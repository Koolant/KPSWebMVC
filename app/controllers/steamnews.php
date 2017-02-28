<?php
class Steamnews extends Controller
{
  public function index()
  {
    $this->view('steamnews/index');
  }
  public function queryapps($appid = '')
  {
    $steamapps = $this->model('Steamapps');
    $arr = $steamapps->getIdArray($appid);
    echo $arr;
  }
  public function queryarticles($appid = '')
  {
    $steamapps = $this->model('Steamapps');
    $arr = $steamapps->getArticlesFromApi($appid);
    echo $arr;
  }
}
 ?>
