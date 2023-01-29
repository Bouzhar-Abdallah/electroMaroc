<?php


class Produits extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        
        $data = [];
        $produit = new Produit('product_view');
        $categorie = new Categorie;
        $data['categories'] = $categorie->findAll();
        $data['produits'] = $produit->findAll();
        
        $this->view('produits',$data,'products-container');
    }

}

