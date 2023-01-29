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
        show($produit->status);
        if(!empty($data))
        foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categorie->categoriename($value['id_categorie']);
        }
        $this->view('admin',$data,'table-products');
    }
    
}

