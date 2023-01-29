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
        $produit = new Produit('product_view');
        $carte = new Carte;
        $produits_id = $carte->where(
            array('id_client' => $_SESSION['USER']['id']),'id_produit'
        );
        //show(($value['id_produit']));

        if (!empty($produits_id)) 
        {
            foreach ($produits_id as $key => $value) 
            {
                $cart_item =$produit->where(array('id' => $value['id_produit']))['0'];
                $cart_item['id_cart_item'] = $carte->where(array('id_client'=>$_SESSION['USER']['id'],'id_produit'=>$value['id_produit']),'id')['0']['id'];
                array_push($data, $cart_item);
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
        if (!$carte->count_($data)) 
        {
            $carte->insert($data);
            echo 'added';
        }else{
            $carte->feedbacks["item"] = "ce produit exist deja dans votre panier";
            echo 'not';
        }
        //show($data);
        //show($carte->feedbacks);
        //redirect('');
    }

    public function delete($a = '', $b = '', $c = '')
    {
        $model = new $a();
        $model->delete($b,'id');
        redirect('cart');
    }
}
