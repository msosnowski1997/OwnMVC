<?php

class UsersDB extends DB
{

	public static function checkAuthBySite($login, $password)
	{
		$query = 'SELECT `user_id`, `user_password` FROM `users` WHERE `user_alias` = :login';
		$sql = self::$db->prepare($query);
		

		$sql->bindValue(':login', $login, PDO::PARAM_STR);
		$sql->execute();


		if ($data = $sql->fetch(PDO::FETCH_ASSOC)) 
		{

			$sql->closeCursor();


			if(password_verify($password, $data['user_password']))
			{
				$query = "SELECT `user_name`, `user_surname`, `user_alias`,`user_id`,`user_permissions` FROM `users` WHERE `user_id` = ".$data['user_id'];
				$sql = self::$db->query($query);
				$data = $sql->fetch(PDO::FETCH_ASSOC);
				$sql->closeCursor();
				if($data['user_permissions'] >=2 )
				{
				$data['ERROR'] = null;
				return $data;
				}
				else
				{
					return array ("ERROR" => 'Aby się zalogować musisz <a href="'.__BASE.'/rejestracja/aktywuj">aktywować</a> swoje konto!');
				}
			}
			else
			{
				return array ("ERROR" => "Błędne hasło");
			}
		}
		else
		{
			return array ("ERROR" => "Nie znaleziono użytkownika");
		}
	}

	public static function addNewUser($login, $mail, $password, $password2)
	{
		if(!Validate::notEmpty(array ($login, $mail, $password, $password2))) return array('ERROR' => "Nie wszystkie pola zostały wypełnione");
		if(!Validate::same($password, $password2)) return array ('ERROR' => "Podane hasła nie są identyczne");
		if(!Validate::length($login,3,20)) return array ('ERROR' => "Login musi zawierać od 3 do 20 znaków");
		if(!Validate::chars($login)) return array ('ERROR' => "Login może zawierać a-zA-z0-9");
		if(!self::loginAvaliable($login)) return array ('ERROR' => "Podany login jest już zajęty");
		if(!Validate::isEmail($mail)) return array ('ERROR' => "Niepoprawny adres email");
		if(!self::mailAvaliable($mail)) return array ('ERROR' => "Podany adres email jest już zajęty");
		if(!Validate::length($password,8,50)) return array ('ERROR' => "Hasło musi mieć od 8 do 50 znaków");
		if(!Validate::chars($password, 'password')) return array ('ERROR' => "Hasło zawiera niedozwolone znaki");


		$sql = "INSERT INTO `users` (`user_alias`, `user_password`, `user_mail`, `user_permissions`, `user_token`) VALUES (:login, :password, :mail, 0, :token);";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':login',$login,PDO::PARAM_STR);
		$sql->bindValue(':password',password_hash($password, PASSWORD_DEFAULT),PDO::PARAM_STR);
		$sql->bindValue(':mail',$mail,PDO::PARAM_STR);
		$sql->bindValue(':token',Generate::randomCode(30,3),PDO::PARAM_INT);
		$sql->execute();
		$count = $sql->rowCount();
		if($count == 1)
		{
			return true;
		}
		else
		{
			return array ('ERROR' => "Error 500. Coś poszło u nas nie tak.");
		}

	}

	public static function loginAvaliable($login)
	{
		$sql = "SELECT `user_id` FROM `users` WHERE `user_alias` = :login";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':login',$login,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return false; else return true;
	}

	public static function mailAvaliable($mail)
	{
		$sql = "SELECT `user_id` FROM `users` WHERE `user_mail` = :mail";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':mail',$mail,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return false; else return true;
	}

	public static function getUserByToken($token)
	{
		$sql = "SELECT * FROM `users` WHERE `user_token` = :token";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':token',$token,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return $result; else return FALSE;
	}

	public static function getUserByMail($mail)
	{
		$sql = "SELECT * FROM `users` WHERE `user_mail` = :mail";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':mail',$mail,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return $result; else return FALSE;
	}

	public static function getUserById($id)
	{
		$sql = "SELECT * FROM `users` WHERE `user_id` = :id";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':id',$id,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return $result; else return FALSE;
	}

	public static function getUserByAlias($alias)
	{
		$sql = "SELECT * FROM `users` WHERE `user_alias` = :alias";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':alias',$alias,PDO::PARAM_STR);
		$sql->execute();
		if ($result = $sql->fetch()) return $result; else return FALSE;
	}

	public static function activateUser($id, $name, $surname, $phone, $date, $gender)
	{
		if(!Validate::notEmpty(array ($name, $surname, $phone, $gender))) return array('ERROR' => "Nie wszystkie pola zostały wypełnione");
		if((!Validate::length($name,3,25)) || (!Validate::chars($name,'polishletters'))) return array ('ERROR' => "Wprowadź poprawne imię");
		if(!Validate::length($surname,3,30) || !Validate::chars($surname,'polishletters')) return array ('ERROR' => "Wprowadź poprawne nazwisko");
		if(!Validate::length($phone,9,9) || !Validate::chars($phone,'numbers')) return array ('ERROR' => "Wprowadź poprawny numer telefonu");
		if(!Validate::date($date)) return array ('ERROR' => "Wprowadź poprawną datę");
		if($gender == 'W') $gender = 0;
		elseif($gender == 'M') $gender = 1;
		else return array ('ERROR' => "Zaznacz poprawną płeć");

		$sql = "UPDATE `users` SET `user_name` = :name, `user_surname` = :surname, `user_permissions` = '2', `user_gender` = :gender, `user_phone` = :phone, `user_token` = :token, `user_birthday` = :birthday WHERE `user_id` = :id;";
		$sql = self::$db->prepare($sql);
		$sql->bindValue(':name',$name,PDO::PARAM_STR);
		$sql->bindValue(':surname',$surname,PDO::PARAM_STR);
		$sql->bindValue(':gender',$mail,PDO::PARAM_INT);
		$sql->bindValue(':phone',$phone,PDO::PARAM_INT);
		$sql->bindValue(':token',Generate::randomCode(30,3),PDO::PARAM_INT);
		$sql->bindValue(':birthday',$date,PDO::PARAM_STR);
		$sql->bindValue(':id',$id,PDO::PARAM_INT);
		$sql->execute();
		$count = $sql->rowCount();
		if($count == 1)
		{
			return true;
		}
		else
		{
			return array ('ERROR' => "Error 500. Coś poszło u nas nie tak.");
		}
	}

	public static function getUsersIdList($data = null)
	{
		// returs records from $data['min'] to $data['to'].
		if(isset($data['from']) && isset($data['to']))
		{
			$limit = " LIMIT ".$data['from'].",".$data['to'];
		} else $limit = "";
		
		$sql = "SELECT `user_id` FROM `users`".$limit;
		$sql = self::$db->prepare($sql);
		$sql->execute();
		return $sql->fetchAll();
	}
}