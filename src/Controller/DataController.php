<?php


namespace App\Controller;

use App\Config;

use App\Model\Data;

class DataController{
  
  private $oData;

  public function __construct(){
    $this->oData = new Data();
  }

  public function retrieve(){
    $this->update();


    $result = $this->oData->retrieve();
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($result);
  }

  public function update(){
    $result = $this->oData->getUpdateTime();

    if(intval($result)>Config::INTERVAL_TIME){
      $this->oData->update();
    }
  }

  
}