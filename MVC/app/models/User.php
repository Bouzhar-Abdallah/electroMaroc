<?php

class User extends Model
{
    
    public   $errors = [];

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
       
        if (empty($this->errors))
        {
            return true;
        }
    }
}