<?php

class Controller
{
    public function view($name, $data = [], $component = '', $picture = 0)
    {
        //if (!empty($data)) extract($data);
        $commande = new Commande;
        $carte = new Carte;
        $cmd_EC = 0;
        if (isset($_SESSION['USER'])) {
            if ($_SESSION['USER']['role'] === 'user') {
                $Carte_count = $carte->where(array('id_client' => $_SESSION['USER']['id']), 'count(id)')['0']['count(id)'];
            }
            if ($_SESSION['USER']['role'] === 'admin') {
                $cmd_EC = $commande->count_(array('etat' => 'en cours'), 'count(id)');
                
                //echo 'admin';
            }
        }
        // In another page or request
        $success = $this->getFlash('success');
        $failure = $this->getFlash('failure');
        
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
    public function setFlash($key, $value)
    {
        $_SESSION[$key] = $value;
        $_SESSION[$key . '_flash'] = true;
    }

    public function getFlash($key)
    {
        if (isset($_SESSION[$key . '_flash'])) {
            $value = $_SESSION[$key];
            unset($_SESSION[$key]);
            unset($_SESSION[$key . '_flash']);
            return $value;
        }
    }
}
