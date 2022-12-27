<?php


class Product extends Controller
{
    public function index($a = '', $b = 0, $c = '')
    {
       
        $produit = new Produit;
        $photo = new Photo;
        $data = [];
        /* get product id */
        $arr = array(
            'id' => $a,
            'visibilite' => '1'
        );
        
        $data_produit = $produit->first($arr);
        
        $photos = ($photo->where(
            array('id_produit' => $data_produit['id'])
        ));
       


        $data=['data_produit' => $data_produit,'photos' => $photos];


        $this->view('home',$data,'product',$b);
        
    }
}


/* if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $data = [];
    $data = $_POST;
    $user = new User;
    if ($user->validate($data)) {
        $user->insert($data);
        redirect('home');
    }
    
    $data['errors'] = $user->errors;
}  */