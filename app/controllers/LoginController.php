<?php
class LoginController
{
    public function action()
    {
        require_once('../app/views/LoginView.php');


        $view = new LoginView();


        $view->render();
    }

    public function checkCredentials($username, $password)
    {

        if ($username == 'admin' && $password == 'admin') {
            $_SESSION['is_admin'] = true;
            return true;
        } else {
            $_SESSION['is_admin'] = false;
            return false;
        }
    }
}
