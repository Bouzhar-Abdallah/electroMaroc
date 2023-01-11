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
        
        if(!empty($data))
        /* foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categorie->categoriename($value['id_categorie']);
        } */
        $this->view('admin',$data,'table-categories');
    }
    
    public function delete($a = '', $b = '', $c = '')
    {
        $model = new $a();
        $model->delete($b,'id');
        redirect('categories');
    }
    public function switchV($a = '', $b = '', $c = '', $d = '')
    {
        
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

