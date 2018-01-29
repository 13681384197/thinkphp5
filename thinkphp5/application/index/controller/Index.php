<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\index\Model\User;
class Index extends Controller {
    public function index()
    {  
    	$users = Db::name('user')->select();
    	if ($users->isEmpty()) {
    		echo '数据为空';
    	}
    }
  
  
    
}
