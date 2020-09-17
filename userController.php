<?php

require_once('view.php');
require_once('controller.php');

class UserController extends Controller
{
    private const SHOW_USERS_TITLE = 'Les usagers';
    private const SHOW_USER_TITLE = 'L\'usager';
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

        $content = $view->render($data);
        $this->renderTemplateWithContent(self::SHOW_USERS_TITLE, $content);
    }

    public function showUser($userID)
    {
        $user = $this->userModel->getUser($userID);
        $data = array(
            'user' => $user
        );

        $view = new View('userView.php');

        $content = $view->render($data);
        $this->renderTemplateWithContent(self::SHOW_USER_TITLE, $content);
    }
}
