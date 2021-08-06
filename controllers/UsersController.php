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

    //region CREATE

    public function addNewFormAction()
    {
        $this->view->render("main", "users/addNewForm");
    }

    public function addNewAction($post)
    {
        $name = $post["name"];
        $login = $post["login"];
        $password = $post["password"];

        $this->dbManager->Users->addNew($name, $login, $password);

        $this->getAllAction();
    }

    //endregion

    //region RETRIEVE

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

    //endregion

    //region DELETE
    public function deleteByIdAction($post)
    {
        $id = $post["id"];

        $user = $this->dbManager->Users->deleteById($id);

        $this->getAllAction();
    }
    //endregion

}
