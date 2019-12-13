<?php
namespace App;

class Loader{


  public static function loadClasses($className){
    $pathParts = explode('\\', $className);

    array_shift($pathParts);


    $pathToClass = ROOT . implode('/', $pathParts) .'.php';

    if(is_file($pathToClass))
      require_once $pathToClass;
  }
}