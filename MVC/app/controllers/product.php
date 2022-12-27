<?php


class Product extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $produit = new Produit;
        $photo = new Photo;
        $data = [];
        /* get product id */
        $arr = array(
            'id' => $a,
            'visibilite' => '1'
        );
        
        $data = $produit->first($arr);
        
        $photos = ($photo->where(
            array('id_produit' => $data['id'])
        ));
       


        $order = 0;
        foreach ($photos as $key => $value) {
            $data['photo'][$order] = $value['photo'];
            $order ++;
        }


        $this->view('home',$data,'product');
        
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