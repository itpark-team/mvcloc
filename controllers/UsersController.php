<?php

require_once './models/DbManager.php';
require_once './views/View.php';

class UsersController
{
    private $dbManager;
    private $view;

    public function __construct()
    {
        $this->dbManager = new DbManager();
        $this->view = new View();
    }

    public function getAllAction()
    {
        $users = $this->dbManager->Users->getAll();
        $this->view->render("main", "users/getAll", $users);

    }

    public function getByIdAction($id)
    {
        $user = $this->dbManager->Users->getById($id);
        $this->view->render("main", "users/getById", $user);
    }

    public function filledAction()
    {
        $this->view->render("main", "users/filled");
    }


}
