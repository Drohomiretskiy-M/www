<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Acount extends Controller_Common {
 
    
      public function before()

    {
     // $session = Session::instance();
     // $session->set('auth_redirect', $_SERVER['REQUEST_URI']);
      $auth = Auth::instance();
      if($auth->logged_in() ==0)
      {
        $this->redirect('auth');
      }
        
      return parent::before();
    }

     public function action_index()

    { 

       $this->template->title = 'Особистий кабінет';
       $login = View::factory('pages/login');
       $this->template->login = $login; 
 
         
       $content = View::factory('pages/account');
       $this->template->content = $content;
       
       $footer = View::factory('footer');
       $this->template->footer = $footer; 

    }




}