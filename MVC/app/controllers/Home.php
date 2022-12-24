<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        /* $model = new User;
        $arr["password"] = "hatikmi";
        $arr["email"] = "bouzhar.lahcen@gmail.com"; */

        //$result = $model->findAll();
        
        echo "this is the home controller";
        show($a);
        show($b);
        show($c);
        $this->view('home');
    }
    public function edit($a = '', $b = '', $c = '')
    {
        /* $model = new User;
        $arr["password"] = "hatikmi";
        $arr["email"] = "bouzhar.lahcen@gmail.com"; */

        //$result = $model->findAll();
        show("from edit function");
        //echo "this is the home controller";
        $this->view('home');
    }
}

