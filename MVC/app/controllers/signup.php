<?php


class Signup extends Controller
{
    public function index()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $data = $_POST;
            $user = new User;
            if ($user->validate($data)) {
                $user->insert($data);
                redirect('home');
            }
            
            $data['errors'] = $user->errors;
        } 
        $this->view('signup',$data);

}
}

