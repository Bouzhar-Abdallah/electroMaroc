<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $model = new Model;
        $arr["password"] = "edverv";
        $arr["email"] = "sidatinouhi@gmail.com";

        $result = $model->update(2,$arr);
        show($result);
        //echo "this is the home controller";
        $this->view('home');
    }
}

