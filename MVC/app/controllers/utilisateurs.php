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
        $data = $users->where(array('role'=>'user'));

        $this->view('admin',$data,'table-users');
        show($data);
    }
    
  
   

   
}

