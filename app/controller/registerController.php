<?php

/**
* 
*/
class registerController extends Controller
{
	
	function run($data = null)
	{
		self::$s->assign('title', "Rejestracja");
		self::$s->assign('content','register-form.tpl');

		if(!is_null($data)) self::$s->assign('response', $data);

		self::$s->display('full-page.tpl');
	}

	public function check()
	{
		if(SessionDB::getUserPermissions())
		{
			header('Location: '.__BASE);
			exit();
		}
		if(isset($_POST['form_login']) && isset($_POST['form_mail']) && isset($_POST['form_password']) && isset($_POST['form_password2']))
		{
			$data = UsersDB::addNewUser($_POST['form_login'],$_POST['form_mail'],$_POST['form_password'],$_POST['form_password2']);

			if($data === true)
			{
				$msg = '<p>Zostałeś poprawnie zarejestrowany. Sprawdź swoją skrzynkę pocztową, aby dokończyć rejestrację.</p>';
				$this->showTips($msg);
			}	
			else
			{

				$this->run($data);
			}	
		}
		else
		{
			$this->run();
		}
	}

	public function showTips($msg)
	{
		self::$s->assign('title', "Rejestracja");
		self::$s->assign('content','message.tpl');
		self::$s->assign('message', $msg);
		self::$s->display('full-page.tpl');
	}

	public function activate($data = null)
	{
		self::$s->assign('title', "Aktywacja konta");
		self::$s->assign('content','activate-user.tpl');

		if(!is_null($data)) self::$s->assign('response', $data);

		self::$s->display('full-page.tpl');
	}

	public function activateTrigger()
	{
		if(isset($_POST['form_activate_mail']) && Validate::notEmpty($_POST['form_activate_mail']))
		{
			if(Validate::isEmail($_POST['form_activate_mail']))
			{
				$result = UsersDB::getUserByMail($_POST['form_activate_mail']);
				if($result)
				{
					if($result['user_permissions'] < 2)
					{
						// Stworz nowy token i go wyślij...

						$msg = "<p>Wysłaliśmy ponownie twój token. Sprawdź swoją skrzynkę pocztową i dokończ aktywację.</p>";
						$this->showTips($msg);
					}
					else
					{
						$data['ERROR'] = "Konto z tym adresem e-mail jest już aktywne."; 
						$this->activate($data);
					}
				}
				else
				{
					$data['ERROR'] = "Nie ma w bazie użytkownika z takim adresem e-mail."; 
					$this->activate($data);
				}
			}
			else
			{
				$data['ERROR'] = "Wpisz poprawny adres email."; 
				$this->activate($data);
			}
			
		}
		elseif(isset($_POST['form_activate_token']) && Validate::notEmpty($_POST['form_activate_token']))
		{
			self::$s->assign('destinyURL', '/rejestracja/aktywuj/'.$_POST['form_activate_token']);
			$this->activateUser(array ('token' => $_POST['form_activate_token']));
		}
		else
		{
			$this->activate();
		}
	}
	public function activateUser($data = null)
	{
		$userdata = UsersDB::getUserByToken($data['token']);
		
		if($userdata && ($userdata['user_permissions'] < 2))
		{
			if(isset($_POST['form_name']) && isset($_POST['form_surname']) && isset($_POST['form_phone']) && isset($_POST['form_born']) && isset($_POST['form_gender']))
			{
				$result = UsersDB::activateUser($userdata['user_id'],$_POST['form_name'],$_POST['form_surname'],$_POST['form_phone'],$_POST['form_born'],$_POST['form_gender']);
				if($result === true)
				{
					header("Refresh: 3; URL=".__BASE."/logowanie");
					$msg = "<p>Konto zostało aktywowane. Za 3 sekundy zostaniesz przekierowany do panelu logowania.</p>";
					$this->showTips($msg);
				}
				else
				{

					$this->showActivateForm($userdata, $result);
				}
			}
			else
			{
			self::$s->assign('title', "Aktywacja konta");
			self::$s->assign('content','activate-user-form.tpl');

			if(!is_null($data)) self::$s->assign('userdata', $userdata);

			self::$s->display('full-page.tpl');
			}
		}
		else
		{
			$data['ERROR'] = "Nie znaleziono tokenu. Spróbuj wygenerować nowy token."; 
			$this->activate($data);
		}
	}

	public function showActivateForm($userdata, $data = null)
	{
		self::$s->assign('title', "Aktywacja konta");
		self::$s->assign('content','activate-user-form.tpl');
		self::$s->assign('userdata', $userdata);
		if(!is_null($data)) self::$s->assign('response', $data);

		self::$s->display('full-page.tpl');
	}
}