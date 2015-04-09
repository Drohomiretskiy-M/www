<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Common {
 
   
	
 	 public function action_index()
    {

       $login = View::factory('pages/login');
       $this->template->login = $login; 

       $slider = View::factory('slider');
       $this->template->slider = $slider; 

       $serch = View::factory('serch');
       $this->template->serch = $serch; 

       $content = View::factory('pages/main');
       $this->template->content = $content; 

       $fotografi = View::factory('fotografi');
       $this->template->fotografi = $fotografi; 

       $footer = View::factory('footer');
       $this->template->footer = $footer; 
    }






}