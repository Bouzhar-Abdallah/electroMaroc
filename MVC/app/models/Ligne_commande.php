<?php

class Ligne_commande extends Model
{
    

    protected $allowedColumns = [
        
    ];

    public function validate($data)
    {
        $this->errors = [];

     
        if (empty($this->errors))
        {
            return true;
        }
    }

    
}