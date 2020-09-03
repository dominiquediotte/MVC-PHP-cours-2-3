<?php

require_once('view.php');

class UserController
{
    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function showUsers()
    {
        $users = $this->userModel->getAllUsers();
        $data = array(
            'users' => $users
        );

        $view = new View('usersView.php');

        echo $view->render($data);
    }

    public function showUser($userID)
    {
        $user = $this->userModel->getUser($userID);
        $data = array(
            'user' => $user
        );

        $view = new View('userView.php');

        echo $view->render($data);
    }
}
