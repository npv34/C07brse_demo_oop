<?php

class DBConnect
{
    private string $dsn;
    private string $user;
    private string $password;

    public function __construct(string $dsn,
                                string $user,
                                string $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect(): PDO
    {
        $conn = null;
        try{
            $conn = new PDO($this->dsn, $this->user, $this->password);
        
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $conn;
    }

}