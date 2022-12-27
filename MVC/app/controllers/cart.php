<?php


class Cart extends Controller
{
    function __construct()
    {

        if ($_SESSION['USER']['role'] != 'user') {
            redirect('login');
            /* todo */
        }
    }

    public function index($a = '', $b = '', $c = '')
    {

        //if(empty($a))
        $data = [];
        $arr = [];
        $produit = new Produit;
        $carte = new Carte;
        $photo = new Photo;
        $produits_id = $carte->where(
            array('id_client' => $_SESSION['USER']['id'])
        );

        
        if (!empty($produits_id)) 
        {
            foreach ($produits_id as $key => $value) 
            {
                $arr =$produit->where(array('id' => $value['id_produit']))[0];
                $arr['id_cart_item']=$value['id'];
                array_push($data, $arr);
            }
            foreach ($data as $key => $value) if(!empty($data[$key]['id_photo_principale'])){
                $data[$key]['id_photo_principale'] = ($photo->first(array('id' => $value['id_photo_principale']))['photo']);
            }
        }






        $this->view('home', $data, 'cart');
    }

    public function add($a = '', $b = '', $c = '')
    {
        $carte = new Carte;
        $data = array(
            'id_produit' => $a,
            'id_client' => $_SESSION['USER']['id']
        );
        if ($carte->validate($data)) 
        {
            $carte->insert($data);
        }

        redirect('');
    }

    public function delete($a = '', $b = '', $c = '')
    {
        $model = new $a();
        $model->delete($b,'id');
        redirect('cart');
    }
}
