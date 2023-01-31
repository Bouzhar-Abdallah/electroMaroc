<?php


class Home extends Controller
{
    public function index()
    {
        
        $data = [];
        $produits = new Produit('products_view_user');
        $photo = new Photo();
        $data = $produits->where(array(),'*',array(
            'prix_offre' => '0'
        ));
        if(!empty($data))foreach ($data as $key => $value) {
            $data[$key]['photo'] = $photo->where(array('id_produit' => $value['id']),'photo');
            //showd($value);
        }
        
        $this->view('home',$data,'slider');
    }

}

