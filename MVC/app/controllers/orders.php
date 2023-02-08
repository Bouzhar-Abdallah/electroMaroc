<?php


class Orders extends Controller
{
    function __construct()
    {

        if ($_SESSION['USER']['role'] != 'user') {
            redirect('login');
        }
    }

    public function index($a = '', $b = '', $c = '')
    {
        $id_client = $_SESSION['USER']['id'];
        $data = [];
        $commande = new Commande;
        $ligne_commande = new Ligne_commande;


        $data = $commande->where(array('id_client' => $id_client));
        $total_price = 0;
        $total_items = 0;
        if (!empty($data)) foreach ($data as $key => $comd) {
            $commande_infos = $ligne_commande->where(array('id_commande' => $comd['id']), 'quantite, prix_vente');

            foreach ($commande_infos as $value) {
                $total_items += $value['quantite'];
                $total_price += $value['prix_vente'] * $value['quantite'];
            }

            $data[$key]['total_items'] = $total_items;
            $data[$key]['total_price'] = $total_price;


            $total_price = 0;
            $total_items = 0;
        }
        $this->view('home', $data, 'orders');
    }
    public function confirmRecipt($commande_id = '')
    {

        $user_id = $_SESSION['USER']['id'];
        $commande = new Commande();
        $commande->update($commande_id, array(
            'etat' => 'livré',
            'date_livraison' => date('Y-m-d')
        ));

        redirect('orders');
    }
}
