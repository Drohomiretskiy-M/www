<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Register  {
 
    public function register($lastnamer, $firstnamer,  $middlenamer, $loginr, $passwordr, $passwordtr, $emailr, $role)

    {
      $regcode = new Model_Regcode();
      $myuser = new Model_Myuser();
      $adduser = new Model_Adduser();
      //добавленя користувача
        $adduser->lastname= $lastnamer;
        $adduser->firstname= $firstnamer;
        $adduser->middlename= $middlenamer;
        $myuser->username = $loginr;
        $myuser->password = $passwordr;
        $myuser->email = $emailr;
      //  $myuser->save();
        $adduser->save();

        try {
            $myuser->save();
            //return TRUE;

       //узнаємо id
          $idusertemp = ORM::factory('myuser',  array('username' => 
          $loginr));
          $adduserid = $idusertemp->id;
        
        // додання ролі
        $addrole = new Model_Addrole();
        $addrole->user_id = $adduserid;
        $addrole->role_id = $role;
        $addrole->save();

          // додання інфи про користувача
        $adduser->userid = $adduserid;
        $adduser->save();



return TRUE;



        }
        catch(ORM_Validation_Exception $e)
    {
      $this->errors = $e->errors('validation');
      return FALSE;
    }







return TRUE;










   

    }


}