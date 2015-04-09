<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Portfolio extends Controller_Common {
 
    public function action_index()
    {
       $login = View::factory('pages/login');
       $this->template->login = $login; 

       $content = View::factory('pages/portfolio');
       $this->template->content = $content; 

       $footer = View::factory('footer');
       $this->template->footer = $footer; 
    }

   }