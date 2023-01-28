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
        if ($this->count_($data)) 
        {
            show($this->count_($data));
            $this->feedbacks["item"] = "ce produit exist deja dans votre panier";
            return false;
        }
        else return true;
 
       /*  if (empty($this->feedbacks))
        {
            return true;
        } */
    }
    
}