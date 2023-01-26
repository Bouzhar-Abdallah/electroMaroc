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
    public function editProduct($a = '', $b = '', $c = '')
    {
        $data = [];
        $data['errors'] = [];
        $categorie = new Categorie;
        $produit = new Produit;
        $data['produit'] = $produit->where(array('id'=> $a))['0'];

        $data['categorie'] = $categorie->findAll();
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $produit = new Produit;
                if ($produit->validate($data)) {
                    $produit->update($a,$data);
                    redirect('admin');
                }
            
        
            $data['errors'] = $produit->errors;
        }
        //else {
            //$data = array_merge($categories,$data['produit']);
            //show($data['produit']);
            $this->view('admin', $data, 'editProduct');
        //}
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