<?php


class Utilisateurs extends Controller
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
        
        $users = new User;
        $commande = new Commande;
        $data = $users->where(array('role'=>'user'));
        foreach ($data as $key => $user) {
            
            $data[$key]['nombre_commandes'] = $commande->idwhere(array('id_client' => $user['id']), 'count(id)')[0]['count(id)'];
            $data[$key]['total_achats'] = $this->user_total($user['id']);
            
            
        }
        
        $this->view('admin',$data,'table-users');
        
    }
    
    private function user_total($id)
    {
        $commande = new Commande;
        $ligne_commande = new Ligne_commande;
        
         $user_commandes = $commande->idwhere(array('id_client' => $id), );
     
        $total_ventes = 0;
            if(!empty($user_commandes)) foreach ($user_commandes as $key => $value) {
                
                $lc = $ligne_commande -> idwhere(array('id_commande' => $value['id']),'quantite, prix_vente');
                
                //show($lc[$key]['quantite']);
                foreach ($lc as $key => $value) {
                    $total_ventes += $value['quantite']*$value['prix_vente'];
                }
            }
           
            return $total_ventes; 
    }
  
   

   
}

