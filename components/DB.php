<?php


class DB extends PDO
{
    public function __construct()
    {
        $db_paramPath = ROOT.'/config/db_params';
        $db_param = include_once ($db_paramPath);
        $dsn = "mysql:host={$db_param['host']};dbname={$db_param['dbname']}";
        try{
            parent::__construct($dsn, $db_param['user'], $db_param['password']);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

}