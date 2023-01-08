<?php

class User extends Model
{
    //protected $table = 'user';

    protected $allowedColumns = [
        'password',
        'email'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data["email"])) 
        {
            $this->errors["email"] = "Email is required";
        }else 
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors["email"] = "Email is not valid";
        }
        if (empty($data["password"])) 
        {
            $this->errors["password"] = "password is required";
        }
        if (!empty($this->idwhere(array('email'=> $data["email"])))) {
            $this->errors["email"] = "cette adresse email existe deja dans la base de donnes";
        }

        if (empty($this->errors))
        {
            return true;
        }
    }
}