<?php


namespace App\Model;

use App\Config;


class Data{
  private $oDb;

  public function __construct(){
    $this->oDb = new \PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_NAME, Config::DB_USER, Config::DB_PASSWORD);
  }

  public function retrieve(){
    
    $stmt = $this->oDb->query('SELECT * FROM datagram ORDER BY id asc');

    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function update(){
    $stmt = $this->oDb->query('UPDATE datagram set value=FLOOR(1+RAND()*9), last_updated=current_timestamp WHERE id BETWEEN 1 AND 10');
  }

  public function getUpdateTime(){
    $stmt = $this->oDb->query('SELECT NOW() - last_updated FROM datagram WHERE id=1');

    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $result[array_key_first($result)];
  }
}