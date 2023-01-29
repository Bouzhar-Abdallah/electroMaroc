<?php

class Categorie extends Model
{
    //protected $table = 'produit';

    protected $allowedColumns = [
        'password',
        'email'
    ];

    public function validate($data)
    {
        
        $photos_uploaded = 0;
        if (isset($data['photo']['error'])) {
            if ($data['photo']['error']>0) {
                $this->errors["photo"] = "veuillez telecharger au moin une image";
            }
        }
        
        if (empty($this->errors))
        {
            return true;
        }else{
            return false;
        }
    }
    public function categoriename($id)
    {
        $row = $this->where(array('id'=>$id));
        return $row[0]['nom'];
    }
}