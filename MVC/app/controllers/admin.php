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
        $data = [];
        $produit = new Produit;
        $categorie = new Categorie;

        $data = $produit->findAll();
        if(!empty($data))
        foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categorie->categoriename($value['id_categorie']);
        }
        $this->view('admin',$data,'table-products');
    }
    
    public function delete($a = '', $b = '', $c = '')
    {
        $model = new $a();
        $model->delete($b,'id');
        redirect('admin');
    }
    public function switchV($a = '', $b = '', $c = '', $d = '')
    {
        
        $model = new $a();
        $row = $model->where(array('id'=>$b));
        if ($row[0]['visibilite'] === '1') {
            $model->update($b,array('visibilite'=>0));
        }else {
            $model->update($b,array('visibilite'=>1));
        }
        redirect('admin');
    }

    /* 
    public function commands($a = '', $b = '', $c = '')
    {
        $data = [];
        $this->view('admin',$data,'table-commands');
    }
    $model = new User;
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
}

