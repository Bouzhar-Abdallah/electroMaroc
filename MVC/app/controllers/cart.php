<?php


class Cart extends Controller
{
    function __construct()
    {
        
        if ($_SESSION['USER']['role'] != 'user') {
            redirect('login');
            /* todo */
        }
    }

    public function index($a = '', $b = '', $c = '')
    {
        
        //if(empty($a))
        $data = [];
        $arr = [];
        $produit = new Produit;
        $carte = new Carte;
        $photo = new Photo;
        $produits_id = $carte->idwhere(
            array('id_client' => $_SESSION['USER']['id']),
            'id_produit'
        );
      
        foreach ($produits_id as  $value) {
                 array_push($data,($produit->where(array('id'=> $value['id_produit']))[0]));
        }
        foreach ($data as $key => $value) {
            $data[$key]['id_photo_principale'] =($photo->first(array('id'=>$value['id_photo_principale']))['photo']) ;
        }
        
         
        
        

     
        $this->view('home',$data,'cart');
    }

    public function add($a = '', $b = '', $c = '')
    {
        $carte = new Carte;
        $data = array(
            'id_produit'=> $a,
            'id_client'=> $_SESSION['USER']['id']
        );

        $carte->insert($data);
        redirect('home');
    }
}

