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
        //show($arr);
        $data_produit = $produit->where($arr)['0'];
        //die();
        $photos = ($photo->where(
            array('id_produit' => $data_produit['id'])
        ));
        if (!empty($produit->exceptions)) {
        
            show($produit->exceptions);
        }


        $data=['data_produit' => $data_produit,'photos' => $photos];


        $this->view('home',$data,'product',$b);
        
    }
    public function add($a = '', $b = '', $c = '')
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
            $photo = new Photo;
                if ($produit->validate($data)) {
                    $produit->update($a,$data);
                    $key = 1;
                    
                        if (isset($_FILES['photos']['tmp_name']))foreach ($_FILES['photos']['tmp_name'] as $value) {
                            if (!empty($value)) {
                                $photos['photo'] = file_get_contents($value);
                                $photos['display_order'] = $key;
                                $photos['id_produit'] = $a;
                                $photo->insert($photos);
                                $key++;
                            }
                        }
                    redirect('admin');
                }
            
        
            $data['errors'] = $produit->errors;
        }
        
            $this->view('admin', $data, 'editProduct');

    }

    public function getProductImages($id = '')
    {
        $photo = new Photo();
        $Product_Photos = $photo->where(array('id_produit'=> $id),'id, photo, display_order');
        foreach ($Product_Photos as $key => $value) {
            $Product_Photos[$key]['photo'] = base64_encode($value['photo']);
        }
        
        header('Content-Type: application/json');
        echo json_encode($Product_Photos);
        
    }
    public function deleteProductImage($id_image){
        $photo = new Photo();
        echo $photo->delete($id_image);
    }
    public function delete( $id = '', $c = '')
    {
        $model = new Produit();
        $model->delete($id,'id');

        
        if ($model->exceptions) {
            echo 'problem';
        }

        redirect('admin');
    }
    public function switchV( $id = '')
    {
        
        $model = new Produit();
        $row = $model->where(array('id'=>$id));
        if ($row[0]['visibilite'] === '1') {
            $model->update($id,array('visibilite'=>0));
        }else {
            $model->update($id,array('visibilite'=>1));
        }
        redirect('admin');
    }
}
