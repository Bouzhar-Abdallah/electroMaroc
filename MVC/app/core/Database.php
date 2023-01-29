<?php

//use function PHPSTORM_META\type;

class Database
{
    public $status;
    
    private function connection()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $con;
    }
    public function query($query, $data = []) {
        $connection = $this->connection();
        $statement = $connection->prepare($query);
        $this->status->query = $query;
        $this->status->data = $data;
        try {
            $success = $statement->execute($data);
            $this->status->success = $success;
            
            if ($success) {
                $this->status->affected_rows = $statement->rowCount();
                $this->status->last_insert_id = $connection->lastInsertId();
                $this->status->result = $statement->fetchAll();
                return $this->status->result;
            } else {
                $this->status->error_code = $connection->errorCode();
                $this->status->error_info = $connection->errorInfo();
                return false;
            }
        } catch (PDOException $e) {
            $this->status->exception = $e;
            return false;
        }
    }
    
}
