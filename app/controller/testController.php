<?php

/**
 * 
 */
class testController extends Controller
{
    /**
     * -
     */
    public function test()
    {
    	$change = $this->calculateRating($_GET['user1'],$_GET['user2']);

    	$user1 = (int)$_GET['user1']+$change;
    	$user2 = (int)$_GET['user2']-$change;
    	if($user2<0) $user2=0;

        if(isset($_GET['round']))
            $round = $_GET['round']+1;
        else
            $round = 1;


    	echo 'Runda: '.$round.'<hr>';
		echo '<form>
		<br><br>
		Winner:  <input type="number" name="user1" value="'.$user1.'"> <p color="green"> + '.$change.'</p>
		<br>
		Loser: &nbsp;&nbsp;&nbsp;<input type="number" name="user2" value="'.$user2.'"><p color="red"> - '.$change.'</p>
		<hr>
        <input type="hidden" name="round" value="'.$round.'">
		<input type="submit" value="Testuj">
		</form>';	



    }

    public function calculateRating($winner, $loser)
    {
    	$rating = round(abs($winner-$loser)/50);
    	if($rating>9) $rating =9;

    	if($winner>$loser)
    		return 10-$rating;
    	else
    		return 10+$rating;
    }
}
