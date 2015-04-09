<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Common
{

    public function action_index()
    {
        $auth = Auth::instance();
        $data = array();


        if ($auth->logged_in() != 0) {
            //Залогінений
            $this->redirect('');
        } else {
            //не залогінений
            if (isset($_POST['btauth'])) {
                $login = Arr::get($_POST, 'login', '');
                $password = Arr::get($_POST, 'password', '');

                if ($auth->login($login, $password)) {
                    // $session = Session::instance();
                    // $authredire = $session->get('authredirect', '')
                    // $session->delete('auth_redirect');
                    $this->redirect('');

                } else {
                    $data['error'] = '';
                }
            }
        }

        $this->template->title = 'Вхід';
        $content = View::factory('pages/auth', $data);
        $this->template->content = $content;
    }


    public function action_hpass()
    {
        $auth = Auth::instance();
        $this->template->content = $auth->hash_password('user4321');


    }

    public function action_logout()
    {
        $auth = Auth::instance();
        $auth->logout();
        $this->template->content = "Розлогінилися";
        $this->redirect('auth');
    }

    public function action_register()
    {
        $data = array('');
        if (isset($_POST['btnreg'])) {
           // $lastnamer = Arr::get($_POST, 'lastnamer', '');
           // $firstnamer = Arr::get($_POST, 'firstnamer', '');
           // $middlenamer = Arr::get($_POST, 'middlenamer', '');
            $loginr = Arr::get($_POST, 'loginr', '');
            $passwordr = Arr::get($_POST, 'passwordr', '');
            $passwordtr = Arr::get($_POST, 'passwordtr', '');
            $emailr = Arr::get($_POST, 'emailr', '');

            $register = new Model_Register();

            if ($passwordr == $passwordtr and $loginr !='' and $passwordr !='') {
                //$lastnamer, $firstnamer,  $middlenamer, $loginr, $passwordr, $passwordtr, $emailr, 1
                if ($register->register($loginr, $passwordr, $passwordtr, $emailr, 1)) {
                    $data['regok'] = '';
                    } 

                else {
                    $data['errors'] = '';
                     }
            }



        else {
            $data['errors'] = '';
             }

        }


        $this->template->title = 'Реєстрація';
        $content = View::factory('pages/register', $data);
        $this->template->content = $content;

    }


}