<?php

namespace App;

use App\Controller\DataController;
use App\Controller\PageController;

class Router{

  private $dataController;

  private $pageController;

  public function __construct(){
    $this->dataController = new DataController();
    $this->pageController = new PageController();
  }
  public function run(){

    $uriWithQuery = $_SERVER['REQUEST_URI'];

    $uriArray = preg_split('~\?~', $uriWithQuery);
    $uri = $uriArray[0];

    switch($uri){
      case '/':
        $this->pageController->index();break;
      case '/json':
        $this->dataController->retrieve();break;
      case '/wtf':
        $this->dataController->update();break;
      default:
        $this->pageController->notFound();break;
    }
  }
}