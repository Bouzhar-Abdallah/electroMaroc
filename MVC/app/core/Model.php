<?php

class Model extends Database
{
    public function test()
    {
        $query = "select * from users";
        $result = $this->query($query);
        show($result);
    }
}
