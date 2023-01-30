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
    public function getproductsByCategory($id_category ='*', $limit = 10, $offset = '0'){
       
        $data = [];
        $produit = new Produit('products_view_user');
        $categorie = new Categorie;
        $data['categories'] = $categorie->where(array('visibilite'=>1));
        
        $data['produits'] = $produit->where(
            array('id_categorie'=>$id_category)
        );
        //showd($produit->status);
        $this->view('produits',$data,'products-container');
    }
}

