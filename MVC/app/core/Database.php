<?php

//use function PHPSTORM_META\type;

class Database
{
    public $status;
    
    private function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $con;
    }
    public function query_read($query, $params = []) {
        $statement = $this->connect()->prepare($query);
        $success = $statement->execute($params);
        $this->status->success = $success;
        if ($success) {
            $this->status->affected_rows = $statement->rowCount();
            $this->status->last_insert_id = $this->connect()->lastInsertId();
            return $statement->fetchAll();
        } else {
            $this->status->error_code = $this->connect()->errorCode();
            $this->status->error_message = $this->connect()->errorInfo();
            return false;
        }
    }

   /*  
   protected function query_read($query, $data = [])
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);
        try {
            $check = 0;
            $check = $stmt->execute($data);
            
            //record inserted
        } catch (Exception $e) {
            show($e->getMessage());
            array_push($this->exceptions,$e->getMessage());
        }
        
            $result = $stmt->fetchAll();
            if (is_array($result) && count($result)) {
                return $result;
            }
        

        return $check;
    } */

    protected function query_update($query, $data = [])
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);
        try {
            $check = 0;
            $check = $stmt->execute($data);
            
            //record inserted
        } catch (Exception $e) {
            show($e->getMessage());
            array_push($this->exceptions,$e->getMessage());
        }
        //show($stmt->rowCount());
        //$check = $stmt->execute($data);
        //show($query);
        //show($check);
        //echo '<br>';
        //show($query);
        /* if ($check) {
            $result = $stmt->fetchAll();
            if (is_array($result) && count($result)) {
                return $result;
            }
        } */

        return $check;
    }

}
