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
        

        $this->view('admin',$data,'table-users');
    }
    
  
   

   
}

