<?php

require_once './models/DbManager.php';
require_once './views/View.php';
require_once './api/Api.php';

require_once './models/SessionManager.php';

class UsersController
{
    private $dbManager;
    private $view;
    private $api;

    public function __construct()
    {
        $this->dbManager = new DbManager();
        $this->view = new View();
        $this->api = new Api();
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

        $this->view->redirect("users/getAll");
    }

    //endregion

    //region RETRIEVE

    public function getAllAction()
    {
        $users = $this->dbManager->Users->getAll();

        //SessionManager::deleteValue("user");

        $this->view->render("main", "users/getAll", $users);
    }

    public function getAllApi()
    {
        $users = $this->dbManager->Users->getAll();
        $this->api->sendJson($users);
    }

    public function getByIdAction($id)
    {
        $user = $this->dbManager->Users->getById($id);

        //SessionManager::setValue("user", $user);

        $this->view->render("main", "users/getById", $user);
    }

    public function getByIdApi($id)
    {
        $user = $this->dbManager->Users->getById($id);
        $this->api->sendJson($user);
    }

    //endregion

    //region DELETE
    public function deleteByIdAction($post)
    {
        $id = $post["id"];

        $user = $this->dbManager->Users->deleteById($id);

        $this->view->redirect("users/getAll");
    }
    //endregion


    //region Update

    public function updateFormAction($post)
    {
        $id = $post["id"];

        $user = $this->dbManager->Users->getById($id);

        $this->view->render("main", "users/updateForm", $user);
    }

    public function updateAction($post)
    {
        $id = $post["id"];
        $name = $post["name"];
        $login = $post["login"];
        $password = $post["password"];

        $this->dbManager->Users->updateById($id, $name, $login, $password);

        $this->view->redirect("users/getbyid/{$id}");
    }

    //endregion

}
