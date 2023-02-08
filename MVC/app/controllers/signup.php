<?php


class Signup extends Controller
{
    public function index()
    {
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $user = new User;
            if ($user->validate($data)) {
                unset($data['password_2']);
                unset($data['terms']);
                $user->insert($data);
                if (isset($user->status->exception)) {
                    if ($user->status->exception->errorInfo['1'] == '1062') {
                        $this->setFlash('failure', "l'email que vous avez introduit existe deja !");
                    } else {
                        $this->setFlash('failure', 'something went wrong');
                    }
                } else {
                    if ($user->status->success) {
                        $this->setFlash('success', 'compte crèe avec succes');
                        $row = $user->where(array('id' => $user->status->last_insert_id))['0'];
                        if ($row) {
                            $_SESSION['USER'] = $row;
                            redirect('home');
                        }
                    } else {
                        $this->setFlash('failure', 'something went wrong');
                    }
                }
            } else {
                $this->setFlash('failure', "l'email que vous avez introduit n'est pas valide !");
            }


            $data['errors'] = $user->errors;
        }

        $this->view('home', $data, 'signup');
    }
}
