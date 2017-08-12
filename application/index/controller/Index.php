<?php
namespace app\index\controller;
use think\View;
use think\controller;
class Index extends \think\Controller
{
    public function index()
    {
      return $this->fetch('login');
    }
}
