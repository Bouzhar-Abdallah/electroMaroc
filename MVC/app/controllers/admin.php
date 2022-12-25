<?php


class Admin extends Controller
{
    function __construct()
    {
        
        if ($_SESSION['USER']['role'] != 'admin') {
            redirect('home');
        }
    }
    public function index($a = '', $b = '', $c = '')
    {
        /* $model = new User;
        $arr["password"] = "hatikmi";
        $arr["email"] = "bouzhar.lahcen@gmail.com"; */

        //$result = $model->findAll();
        
        /* echo "this is the home controller";
        show($a);
        show($b);
        show($c); */
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
        $data = [];
        $this->view('admin',$data,'table-products');
    }
    public function newproduct($a = '', $b = '', $c = '')
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $data = [];
            $data = $_POST;
            $produit = new Produit;
            //$produit->insert($data);
            /* if ($user->validate($data)) {
                redirect('home');
            }
            
            $data['errors'] = $user->errors; */
            show($data);
            show($_FILES);
        }else
        
        $this->view('admin',$data,'newproduct');
    }

    public function commands($a = '', $b = '', $c = '')
    {
        $data = [];
        $this->view('admin',$data,'table-commands');
    }
}

