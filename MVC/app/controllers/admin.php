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
        $produit = new Produit('product_view');
        $categorie = new Categorie;
        $data = $produit->findAll();
        $this->view('admin',$data,'table-products');
    }
    
}

