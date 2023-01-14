<?php


class Newcategorie extends Controller
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
            $data['photo'] = file_get_contents($_FILES['photo']['tmp_name']);
            
            $categorie->insert($data);
            //$data['errors'] = array_merge($photo->errors, $produit->errors);
        }
        //else {

            //$data = array_merge($data['errors'],$categories);
            $this->view('admin', $data, 'newcategorie');
        //}
    }
}
