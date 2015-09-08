<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index()
	{
		$this->show();
	}
	
    public function home()
    {
    	$sex = "male";
    	$this->assign("sex", $sex);
    	$this->show();
    }
}