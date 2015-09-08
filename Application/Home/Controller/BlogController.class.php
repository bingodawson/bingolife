<?php
namespace Home\Controller;
use Think\Controller;
use Admin\Model;


class BlogController extends Controller
{
	public function detail()
	{
		$passageId = $_GET['passage'];

		$passageModel = new \Admin\Model\PassageModel();
		$detail = $passageModel->where("passage_id = %d", $passageId)->select();
		$this->assign("detail", $detail[0]);
		$this->display("detail");exit;
	}
}
