<?php

class Controller
{
    public function view($name, $data = [], $component = '', $picture = 0)
    {
        if (!empty($data)) extract($data);
        $commande = new Commande;
        $carte = new Carte;
        $cmd_EC = 0;
        $cmd_EC = $commande->idwhere(array('etat' => 'en cours'), 'count(id)')['0']['count(id)'];
        $Carte_count = $carte->idwhere(array('id_client' => $_SESSION['USER']['id']), 'count(id)')['0']['count(id)'];
        $componentfile = '../app/views/components/' . $component . '.php';
        $filename = '../app/views/' . $name . '.view.php';

        if (file_exists($componentfile)) {
            $componentfile = 'components/' . $component . '.php';
        } else {
            $componentfile = $componentfile = 'components/404.php';
        }

        if (file_exists($filename)) {
            require_once $filename;
        } else {
            $filename = '../app/views/404.view.php';
            require_once $filename;
        }
    }
}
