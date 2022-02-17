<?php


namespace models;


class FormRegister
{
    private $login;
    private $email;
    private $pass;
    private $confirmPassword;

    public $errors = [];

    public function __construct(){
        if(count($_POST) > 0){
            $this->login = $_POST["login"];
            $this->pass = $_POST["password"];
            $this->confirmPassword = $_POST["confirm_password"];
            $this->email = $_POST["email"];

            $this->validate();

            // сохранить в json
            file_put_contents("user.json", json_encode(["login" => $this->login ]));

        }
    }

    public function validate(){

        if(empty($this->login)){

            throw new \Exception("Логин должен быть обязательным");
        }

    }

    public function render(){

        ob_start();
        include_once "views\\formRegister.php";
        return ob_get_clean();
    }
}