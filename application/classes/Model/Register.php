<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register
{

    public function register($loginr, $passwordr, $passwordtr, $emailr, $role)

    {

        $user = new Model_Myuser();
        $adduser = new Model_Adduser();
        $addrole = new Model_Addrole();

        //добавленя користувача
        $auth = Auth::instance();
        // $adduser->lastname= $lastnamer;
        // $adduser->firstname= $firstnamer;
        // $adduser->middlename= $middlenamer;
        $user->username = $loginr;
        $passh = $auth->hash_password($passwordr);
        $user->password = $passh;
        $user->email = $emailr;
        $user->save();
        $adduser->save();

        //узнаємо id
        $idusertemp = ORM::factory('myuser',  array('username' => $loginr));
        $adduserid = $idusertemp->id;

        // додання ролі
        $addrole->user_id = $adduserid;
        $addrole->role_id = $role;
        $addrole->save();

        //додання інфи про користувача
       // $adduser->userid = $adduserid;
       // $adduser->save();


        return TRUE;

    }

}


