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
        if(empty($a))
        $data = [];
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

