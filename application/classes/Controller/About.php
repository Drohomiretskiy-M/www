<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_About extends Controller_Common {
 
   
    public function action_index()

    {
       $this->template->title = 'Про сервіс';
         $login = View::factory('pages/login');
       $this->template->login = $login; 

        $content = View::factory('pages/about');
        $this->template->content = $content;

        $footer = View::factory('footer');
       $this->template->footer = $footer; 


    }

     
     


}