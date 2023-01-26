<?php


class Test extends Controller
{
    public function index()
    {
        $commande = new Commande();
        $data = $commande->count()[0]['count(id)'];
        echo $data;
        die();
        //$this->view('home',$data,'test');

    }

}
/* if (empty($_SESSION['USER'])) {
    $username = 'guest';
    $userrole = 'guest';
}else{
    //show($_SESSION['USER']);
    $username = $_SESSION['USER']['nom'];
    $userrole = $_SESSION['USER']['role'];
}
$data['username'] = $username;
$data['userrole'] = $userrole; */

