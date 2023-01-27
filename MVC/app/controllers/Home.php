<?php


class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        
        $data = [];
        /* if (empty($_SESSION['USER'])) {
            $username = 'guest';
            $userrole = 'guest';
        }else{
            //show($_SESSION['USER']);
            $username = $_SESSION['USER']['nom'];
            $userrole = $_SESSION['USER']['role'];
        }
        $data['username'] = $username;
        $data['userrole'] = $userrole; */
        $produit = new Produit('product_view');
        $photo = new Photo;
        $data = $produit->findAll();

        
        $this->view('home',$data,'products-container');
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

