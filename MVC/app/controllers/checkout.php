<?php


class Checkout extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {
        $data = $_POST;
        unset($_POST);
        //show($_POST);
        $commande = new commande;
        $ligne_commande = new Ligne_commande;
        $produit = new Produit;
        $commande->insert(array('id_client' => $_SESSION['USER']['id']));

        $id_commande = $commande->lastInsertId('id');

        foreach ($data as $id_produit => $quantite) {
            $prix_vente = $produit->where(array('id' => $id_produit), 'prix_final')['0']['prix_final'];
            $commande_line = array(
                'id_produit' => $id_produit,
                'id_commande' => $id_commande,
                'quantite' => $quantite,
                'prix_vente' => $prix_vente
            );
            $ligne_commande->insert($commande_line);
        }
        $cart = new Carte;
        $cart->delete($_SESSION['USER']['id'], 'id_client');
        $facture = new Facture;
        $data = $facture->where(array('id' => $id_commande));

        $this->view('home', $data, 'checkout');
    }

}
