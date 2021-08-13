<?php

class Api{
    public function sendJson($data){
        echo json_encode($data);
    }
}