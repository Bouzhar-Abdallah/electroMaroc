<?php


class Signup extends Controller
{
    public function index()
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $data = [];
            $data = $_POST;
            $user = new User;
            if ($user->validate($data)) {
                unset($data['password_2']);
                unset($data['terms']);
                $user->insert($data);
                redirect('home');
            }
            
            $data['errors'] = $user->errors;
        } 

        $this->view('signup',$data);

}
}

