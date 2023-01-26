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
            $photos = [];
            
            $produit = new Produit;
            $photo = new Photo;
            if ($photo->validate($_FILES)) {
                if ($produit->validate($data)) {
                    if ($produit->insert($data)) {
                        $product = $produit->last($data);
                        $key = 1;
                        foreach ($_FILES['photos']['tmp_name'] as $value) {
                            $photos['photo'] = file_get_contents($value);
                            $photos['display_order'] = $key;
                            $photos['id_produit'] = $product['id'];
                            $photo->insert($photos);
                            $key++;
                        }
                        /* to set principale image */

                        $photo_principale = $photo->where(array(
                            "id_produit" => $product['id'],
                            "display_order" => 1
                        ));

                        $produit->update($product['id'], array('id_photo_principale' => $photo_principale[0]['id']));
                    }
                }
            }
        
            $data['errors'] = array_merge($photo->errors, $produit->errors);
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