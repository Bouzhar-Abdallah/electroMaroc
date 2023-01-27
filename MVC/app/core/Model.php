<?php

class Model extends Database
{
    
    
    protected   $limit        = 10;
    protected   $offset       = 0;
    protected   $order_type   = "desc";
    protected   $order_column = "id";
    public      $errors       = [];
    public      $feddbacks    = [];

    function __construct()
    {
        if (!property_exists($this,'table')) 
        {
            $this->table = strtolower($this::class);
        }
    }

    public function setLimit($limit = 10)
    {
        $this-> limit = $limit;
    }
    public function setOffset($offset = 0)
    {
        $this-> offset = $offset;
    }

    public function findAll()
    {

        $query = " select * from $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        return $this->query($query);
    }
    public function where($data, $s= '*', $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select $s from $this->table where ";

        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key." && ";
        }
        foreach ($keys_not as $key ) {
            $query .= $key ." != :" .$key." && ";
        }

        $query = trim($query," && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        $data = array_merge($data,$data_not);

        return $this->query($query, $data);
    }
    
    public function idwhere($data, $s = '*')
    {
        $keys = array_keys($data);
        
        $query = "select $s from $this->table where ";

        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key." && ";
        }
        
        $query = trim($query," && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        

        return $this->query($query, $data);
    }
    public function last($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key." && ";
        }
        foreach ($keys_not as $key ) {
            $query .= $key ." != :" .$key." && ";
        }

        $query = trim($query," && ");

        $query .= " order by $this->order_column desc limit $this->limit offset $this->offset";

        $data = array_merge($data,$data_not);
        $result = $this->query($query, $data);
        if ($result)return $result[0];
        return false;
    }


    public function first($data, $data_not =[])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key." && ";
        }
        foreach ($keys_not as $key ) {
            $query .= $key ." != :" .$key." && ";
        }

        $query = trim($query," && ");

        $query .= " limit $this->limit offset $this->offset";

        $data = array_merge($data,$data_not);

        $result = $this->query($query, $data);

        if ($result)return $result[0];
        return false;
    }

    public function insert($data)
    {
        /* removing unwanted data */
        if (!empty($this->allowedColumns)) {
            foreach ($this->allowedColumns as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "insert into $this->table (".implode(",",$keys).") values (:".implode(",:",$keys).")";
        if ($this->query($query, $data))return true;
        return true;
    }

    public function update($id, $data, $id_column = 'id')
    {
        /* removing unwanted data */
        if (!empty($this->allowedColumns)) {
            foreach ($this->allowedColumns as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "update $this->table set  ";
        
        foreach ($keys as $key ) {
            $query .= $key ." = :" .$key.", ";
        }
        
        
        $query = trim($query,", ");
        
        $query .= " where $id_column = :$id_column";
        
        $data[$id_column] = $id;

        $this->query($query, $data);
        return false;
    }

    public function delete($id, $id_column = 'id')
    {
        $data[$id_column] = $id;
        $query = "delete from $this->table where $id_column = :$id_column";
        return $this->query($query, $data);
        
        
    }
    public function lastInsertId($s = 'id')
    {
        $query = "select $s from $this->table ORDER BY id DESC LIMIT 1";

        return $this->query($query)[0][$s];
    }
    public function count($s = 'id')
    {
        //'count(id)')['0']['count(id)']
        $query = "select count($s) from $this->table";

        return $this->query($query);
    }
    /* public function count($column = '*')
    {
        $query = "select count($column) from $this->table";

        return $this->query($query)[0]['count('.$column.')'];
    } */
   

}
