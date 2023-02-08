<?php


class Login extends Controller
{
    public function index()
    {

        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->where($arr)['0'];

            if ($row) {
                if ($row['password'] === $_POST['password']) {
                    $_SESSION['USER'] = $row;
                    $this->setFlash('success', 'authentificated successfully');
                    redirect('home');
                }
            }

            $this->setFlash('failure', 'email ou mot de passe erronès');
        }
        $this->view('login', $data);
    }
}
