<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $model = new User;
        $arr["password"] = "hatikmi";
        $arr["email"] = "bouzhar.lahcen@gmail.com";

        $result = $model->findAll();
        show($result);
        //echo "this is the home controller";
        $this->view('home');
    }
}

