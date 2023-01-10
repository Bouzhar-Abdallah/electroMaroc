<?php


class Login extends Controller
{
    public function index()
    {
        
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->first($arr);
            
            if ($row) 
            {
                if ($row['password'] === $_POST['password']){
                    $_SESSION['USER'] = $row;
                    redirect('home');
                }
                
            }
            
            $user->errors['email'] = "email ou mot de passe erronés";
            $data['errors'] = $user->errors;
        } 
        $this->view('login',$data);

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

