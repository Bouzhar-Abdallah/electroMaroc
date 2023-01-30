<?php


class Produits extends Controller
{
    public function index($id_category ='*', $limit = 10, $offset = '0')
    {
        
        $data = [];
        $produit = new Produit('products_view_user');
        $categorie = new Categorie;
        $data['categories'] = $categorie->where(array('visibilite'=>1));
        $produit->setLimit($limit);
        $produit->setOffset($offset);
        $data['produits'] = $produit->where(
            array('id_categorie'=>$id_category)
        );
        //showd($produit->status);
        $this->view('produits',$data,'products-container');
    }
    public function getproductsByCategory($id_category ='all', $limit = 10, $offset = '0'){
       
        $data = [];
        $produit = new Produit('products_view_user');
        $categorie = new Categorie;
        $data['categories'] = $categorie->where(array('visibilite'=>1));
        $produit->setLimit($limit);
        $produit->setOffset($offset);
        if ($id_category == 'all') {
            $data['produits'] = $produit->findAll();
        }else{
            $data['produits'] = $produit->where(
                array('id_categorie'=>$id_category)
            );
        }
        //showd($produit->status);
        $this->view('produits_ajax',$data,'products-container_ajax');
    }
}

