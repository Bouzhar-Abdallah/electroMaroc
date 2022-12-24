<?php

class Model extends Database
{
    public function test()
    {
        $query = "select * from users";
        $result = $this->query($query);
        //show($result);
    }

    public function first()
    {
        
    }
    public function insert()
    {
        
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
