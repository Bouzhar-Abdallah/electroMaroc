<?php


class Categories extends Controller
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

        $categorie = new Categorie;

        $data = $categorie->findAll();


        $this->view('admin', $data, 'table-categories');
    }

    public function add($a = '', $b = '', $c = '')
    {
        $data = [];
        //$data['errors'] = [];
        $categorie = new Categorie;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $files = $_FILES;
            if (!$categorie->validate($files)) {
                $this->setFlash('failure', $categorie->errors['photo']);
                $this->view('admin', $data, 'newcategorie');
                //redirect('categories/add');
            } else {


                $data['photo'] = file_get_contents($_FILES['photo']['tmp_name']);

                $categorie->insert($data);


                if (isset($categorie->status->exception)) {
                } else if ($categorie->status->success) {
                    if ($categorie->status->affected_rows) {
                        $this->setFlash('success', 'categorie a ete ajoutèe ');
                    } else {
                        $this->setFlash('failure', 'something went wrong');
                    }
                }
            }
        }

        $this->view('admin', $data, 'newcategorie');
    }


    public function delete($id = '')
    {
        $categorie = new Categorie();
        $categorie->delete($id, 'id');
        if (isset($categorie->status->exception)) {
            $this->setFlash('failure', 'something went wrong');
            redirect('categories');
        } else if ($categorie->status->success) {
            if ($categorie->status->affected_rows) {
                $this->setFlash('success', 'categorie a ete supprimé ');
            } else {
                $this->setFlash('failure', 'something went wrong');
            }
        }

        redirect('categories');
    }
    public function switchV($id = '')
    {
        $categorie = new Categorie();
        $row = $categorie->where(array('id' => $id));
        if ($row[0]['visibilite'] === 1) {
            $new_vis = 0;
        } else {
            $new_vis = 1;
        }
        $categorie->update($id, array('visibilite' => $new_vis));
        redirect('categories');
    }
    public function edit($id = '')
    {

        $data = [];
        $data['errors'] = [];
        $categorie = new Categorie;

        $data = $categorie->where(array('id' => $id))['0'];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $files = $_FILES;

            /*  */
            if ($categorie->validate($files)) {
                $data['photo'] = file_get_contents($_FILES['photo']['tmp_name']);
            }
            $categorie->update($id, $data);
            if (isset($categorie->status->exception)) {
                $this->setFlash('failure', 'something went wrong');
                redirect('categories');
            } else if ($categorie->status->success) {
                if ($categorie->status->affected_rows) {
                    $this->setFlash('success', 'categorie a ete modifiée');
                    redirect('categories');
                } else {
                    $this->setFlash('failure', 'aucun changement');
                    redirect('categories');
                }
            }
            /*  */
        }

        $this->view('admin', $data, 'editCategory');
    }
}
