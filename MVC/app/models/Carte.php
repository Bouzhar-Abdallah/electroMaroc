<?php

class Carte extends Model
{
    //protected $table = 'user';

    protected $allowedColumns = [
        'password',
        'email'
    ];

    public function validate($data)
    {
        $this->errors = [];
        $this->feedbacks = [];
        if (!empty($this->first($data))) 
        {
            $this->feedbacks["item"] = "ce produit exist deja dans votre panier";
        }
        
 
        if (empty($this->feedbacks))
        {
            return true;
        }
    }
}