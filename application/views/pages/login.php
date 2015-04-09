
<?php  

		$auth = Auth::instance();
        $data = array();
     
        if($auth->logged_in() ==0)
{
	echo '<a href="';echo URL::site('auth');
	echo '">Вхід&ensp;&ensp;&ensp;</a>';
		echo '<a href="';echo URL::site('auth/register');
	echo '">Реєстрація&ensp;&ensp;&ensp;</a>';
}
else
	
{ $user = $auth->get_user();
	echo 'Користувач: ';
	echo $user;
	echo " ";
	echo '<a href="';echo URL::site('auth/logout');
	echo '">Вихід&ensp;&ensp;&ensp;</a>';

}
?>


	
	
		
	