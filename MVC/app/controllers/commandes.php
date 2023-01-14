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
        $user = new User;
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
            $data[$key]['client'] = $user->where(array('id' => $comd['id_client']),'nom')['0']['nom'];
            
            $total_price = 0;
            $total_items = 0;
        }

        $this->view('admin',$data,'table-commands');
    }

    public function update($action = '', $id = '', $c = '')
    {
        $commande = new Commande;
            if ($action === 'en transit') 
            {
                $commande -> update($id,array(
                    'etat'=> $action,
                    'date_envoi' => date('Y-m-d')
                ));
            }else 
            {
                $commande -> update($id,array('etat'=> $action));
            }
            redirect('commandes');
    }
}
