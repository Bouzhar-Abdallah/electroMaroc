<?php

class Photo extends Model
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
}