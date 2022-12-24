<?php


class Login extends Controller
{
    public function index()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->first($arr);
            
            if ($row) 
            {
                if ($row['password'] === $_POST['password']){
                    $_SESSION['client'] = $row['nom'];
                    redirect('home');
                }
                
            }
            
            $user->errors['email'] = "email ou mot passe erronés";
            $data['errors'] = $user->errors;
        } 
        $this->view('login',$data);

    }
    public function logout()
    {
        
        unset($_SESSION['client']);
        
        redirect('home');
    }
}

