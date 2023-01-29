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
        
        
        $this->view('admin',$data,'table-categories');
    }
    
    public function add($a = '', $b = '', $c = '')
    {
        $data = [];
        $data['errors'] = [];
        $categorie = new Categorie;
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $data['photo'] = file_get_contents($_FILES['photo']['tmp_name']);
            
            $categorie->insert($data);
            
            
            if (isset($categorie->status->exception)){
                $this->setFlash('failure', 'something went wrong');
                redirect('categories');
            }else if ($categorie->status->success) {
                if ($categorie->status->affected_rows) {
                    $this->setFlash('success', 'categorie a ete ajoutèe ');
                }else{
                    $this->setFlash('failure', 'something went wrong');
                }
            }
        }
            $this->view('admin', $data, 'newcategorie');
        
    }


    public function delete($id)
    {
        $categorie = new Categorie();
        $categorie->delete($id,'id');
        if (isset($categorie->status->exception)){
            $this->setFlash('failure', 'something went wrong');
            redirect('categories');
        }else if ($categorie->status->success) {
            if ($categorie->status->affected_rows) {
                $this->setFlash('success', 'categorie a ete supprimé ');
            }else{
                $this->setFlash('failure', 'something went wrong');
            }
        }
        
        redirect('categories');
    }
    public function switchV($a = '', $b = '', $c = '', $d = '')
    {
        showd($a);
        showd($b);
        
        $model = new $a();
        $row = $model->where(array('id'=>$b));
        if ($row[0]['visibilite'] === '1') {
            $model->update($b,array('visibilite'=>0));
        }else {
            $model->update($b,array('visibilite'=>1));
        }
        redirect('categories');
    }
    
}

