<?php


namespace App;

class Util{

  public function getView($viewName){
    $filename = __DIR__ . '/Views/'. $viewName . '.php';

    if(is_file($filename))
      require_once $filename;
  }
}