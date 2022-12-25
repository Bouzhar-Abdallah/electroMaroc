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
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $data = $_POST;
            $photos = [];
            
            $produit = new Produit;
            $photo = new Photo;
            
            if ($produit->validate($data)) 
            {
                
                if ($produit->insert($data)) 
                {
                    $product= $produit->last($data);
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
            /* 
            $produit->insert($data); 
            $photo->insert($photos); */
            /* if ($user->validate($data)) {
                redirect('home');
            }
            
            $data['errors'] = $user->errors; */
            //show($data);
            //show($_FILES['photos']['tmp_name'][0]);
        }else
        
        $this->view('admin',$data,'newproduct');
    }

    
}

