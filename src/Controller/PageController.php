<?php

namespace App\Controller;

use App\Util;
use App\Config;

class PageController{

  private $oUtil;

  public function __construct(){
    $this->oUtil = new Util();
  }

  public function index(){
    $interval = Config::INTERVAL_TIME;
    $this->oUtil->getView('index');
  }

  public function notFound(){
    $this->oUtil->getView('notFound');
  }
}