<?php


class Commandes extends Controller
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
        $commande = new Commande;
        $ligne_commande = new Ligne_commande;
        $data = $commande->findAll();
        $total_price = 0;
        $total_items = 0;
        if (!empty($data)) foreach ($data as $key => $comd) 
        {

            $commande_infos = $ligne_commande->where(array('id_commande' => $comd['id']), 'quantite, prix_vente');
            foreach ($commande_infos as $value) 
            {
                $total_items += $value['quantite'];
                $total_price += $value['prix_vente'] * $value['quantite'];
            }

            $data[$key]['total_items'] = $total_items;
            $data[$key]['total_price'] = $total_price;
            $total_price = 0;
            $total_items = 0;
        }

        $this->view('admin',$data,'table-commands');
        show($data);
    }
}
