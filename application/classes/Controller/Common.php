<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {
    
    public $template = 'basic';   
    public function before()
    {
        parent::before();
        View::set_global('title', 'Фотографи');				
        View::set_global('description', 'Сайт');
        $this->template->slider = '';
        $this->template->serch = '';
        $this->template->content = '';
        $this->template->fotografi = '';
        $this->template->footer = '';
        $this->template->portfolio = '';
        $this->template->contact='';
        $this->template->account='';
        $this->template->main='';
        $this->template->login='';
        $this->template->loginpage='';
        $this->template->register='';

      


        $this->template->styles = array( 'bootstrap','bootstrap.min','flexslider','font-awesome','prettyPhoto','style');   

        $this->template->scripts = array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
            '/public/js/bootstrap.min.js','/public/js/jflickrfeed.js','/public/js/jquery-1.8.2.min.js','/public/js/jquery.flexslider.js',
            '/public/js/jquery.quicksand.js','/public/js/jquery.tweet.js','/public/js/jquery.ui.map.min.js','/public/ja/scripts.js',
            '/public/modal.js'
            );
        
       
    }
    
} // End Common
