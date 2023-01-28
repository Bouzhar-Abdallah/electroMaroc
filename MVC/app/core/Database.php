<?php

class Database 
{
    private function connect()
    {
        $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        $con = new PDO($string,DBUSER,DBPASS);
        $con ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $con;
    }

    protected function query($query , $data = [])
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);
        show($query);
        show($check);
        echo '<br>';
        //show($query);
        if ($check) 
        {
            $result = $stmt->fetchAll();
            if (is_array($result) && count($result)) 
            {
                return $result;
            }
        }

        return $check;
    }
    protected function get_row($query , $data = [])
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);

        $check = $stmt->execute($data);
        if ($check) 
        {
            $result = $stmt->fetchAll();
            if (is_array($result) && count($result)) 
            {
                return $result[0];
            }
        }

        return false;
    }

}

