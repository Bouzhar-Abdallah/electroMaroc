<?php


class Newproduct extends Controller
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
        $data['errors'] = [];
        $categorie = new Categorie;

        $categories = $categorie->findAll();
        
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

            $data = array_merge($data['errors'],$categories);
            $this->view('admin', $data, 'newproduct');
        //}
    }
}
