<?php

namespace App\Models;

use mysqli;

class Model{
     protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;

    protected $connection;
    protected $table;
    protected $query;

    public function_construct(){
        $this->connection();
    }

    public function connection(){
    $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->connection->connect_error) {
            die('error de conexion'. $this->connection->connect_error)
        }
    }

    public function query($sql){
       $this->query = $this->connection->query($sql);

       return $this;
    }

    public function first(){
        return $this->query->fetch_asscoc();
    }

    public function get(){
        return $this->query->fetch_all(MYSQLI_ASSOC);
    }

    public function all(){
        return $this->table;
        // SELECT * FROM contacts
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql)->get();
    }

        public function find(){
        // SELECT * FROM contacts WHERE id = 1
        $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
        return $this->query($sql)->first();
  
    }

    public function where($column, $operator, $value = null){

    if ($value == null) {
        $value = $operator;
        $operator = '=';
    }

    $sql = "SELECT * FROM {$this->table} WHERE {$column} {}'{$value}'";
        return $this->query($sql);

    return $this;

}

}