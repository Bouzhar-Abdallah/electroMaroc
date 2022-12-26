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
        foreach ($data['photos']['error'] as $value) {
            
            if ($value === 0) {
                $photos_uploaded++;
            }
        }
        if ($photos_uploaded === 0) {
            $this->errors["photo"] = "veuillez telecharger au moin une image";
        }
        
        if (empty($this->errors))
        {
            return true;
        }
    }
    public function categoriename($id)
    {
        $row = $this->where(array('id'=>$id));
        return $row[0]['nom'];
    }
}