<?php
class LoginView
{
    public function render()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $controller = new LoginController();
            $is_authenticated = $controller->checkCredentials($_POST['username'], $_POST['password']);

            if ($is_authenticated && $_SESSION['is_admin']) {

                require_once('../app/views/AdminView.php');
                $view = new AdminView();
                $view->render();
            } else {

                require_once('../app/views/UserView.php');
                $view = new UserView();
                $view->render();
            }
        } else {

            require_once('../app/views/LoginFormView.php');
            $view = new LoginFormView();
            $view->render();
        }
    }
}
