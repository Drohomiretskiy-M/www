<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Adminka extends Controller_Common {
 
     public function before()

    {
    // $session = Session::instance();
     //$session->set('authredirect', $_SERVER['REQUEST_URI']);
      $auth = Auth::instance();
      if($auth->logged_in('login') ==1)
      {
        $this->redirect('acount');
      }

      else
      {
$this->redirect('auth');
      }



        
             if($auth->logged_in('admin') ==0)
      {
        $this->redirect('about');
      }
      return parent::before();
    }
    
     public function action_index()

    { 

  
 
         
       $content = View::factory('pages/about');
       $this->template->content = $content;
       
     

    }




}