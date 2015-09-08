<?php
namespace Admin\Controller;
use Think\Controller;

class BlogController extends Controller
{
	public function category()
	{
		$categoryModel 	= new \Admin\Model\CategoryModel();
		$categoryList  	= $categoryModel->order("position asc")->select();
		$bottomPosition = $categoryModel->getFootPosition();
		$topPosition	= $categoryModel->getTopPosition();
		$this->assign("categoryList", $categoryList);
		$this->assign("footPosition", $bottomPosition);
		$this->assign("topPosition",  $topPosition);
		$this->display();
	}

	public function create()
	{
		$this->display();
	}

	public function addCategory()
	{
		$data = $_POST;
		if(!empty($data['category_name'])){
			$data['user_id'] 	= 1;
			$data['blog_num']	= 0;
			$data['create_at']	= date("Y-m-d H:i:s");
			$data['update_time']	= date("Y-m-d H:i:s");
			$data['display_name']	= "新增分类";
			$data['is_enable']	= 1;
			$data['is_visible'] = 1;
			$categoryModel  = new \Admin\Model\CategoryModel();
			$footPosition	= $categoryModel->getFootPosition();
			$data['position'] 	= intval($footPosition) + 1;
			$categoryModel->data($data)->add();
		}
		$this->redirect("Blog/Category");
	}

	public function editCategory()
	{
		$categoryId = $_GET['category'];
		$categoryName = "";
		if(!empty($categoryId)){
			$categoryModel  = new \Admin\Model\CategoryModel();
			$res			= $categoryModel->where("category_id=%d", $categoryId)->select();
			$categoryId		= $res[0]['category_id'];
			$categoryName	= $res[0]['category_name'];
			$displayName	= $res[0]['display_name'];
			
		}
		$this->assign('categoryId', $categoryId);
		$this->assign('categoryName', $categoryName);
		$this->assign('displayName', $displayName);
		$this->display();
	}
	
	public function saveCategory()
	{
		$data = $_POST;
		$categoryModel  = new \Admin\Model\CategoryModel();
		if(empty($data['category_id'])){
			//新增分类
			$data['user_id'] 	= 1;
			$data['blog_num']	= 0;
			$data['create_at']	= date("Y-m-d H:i:s");
			$data['update_time']	= date("Y-m-d H:i:s");
			if("on" == $data['is_enable']){
				$data['is_enable']	= 0;
			}else{
				$data['is_enable'] = 1;
			}
			$data['is_visible'] = 1;

			$footPosition	= $categoryModel->getFootPosition();
			$data['position'] 	= intval($footPosition) + 1;
			$categoryModel->data($data)->add();
		}else{
			//编辑分类
			if("on" == $data['is_enable']){
				$data['is_enable']	= 0;
			}else{
				$data['is_enable'] = 1;
			}
			$res			= $categoryModel->where("category_id=%d", $data['category_id'])->select();
			if( ($res[0]['category_name'] != $data['category_name'] ) ||
					 ($res[0]['display_name'] != $data['display_name'] ) ||
					($res[0]['is_enable'] != $data['is_enable'] )
			){
				$data['update_time']	= date("Y-m-d H:i:s");  //有更改才更新时间
			}
			
			$categoryModel->data($data)->save();
		}
		$this->redirect("Blog/Category");
	}
	
	public function save()
	{

		
	}

	public function test()
	{
		$categoryModel = new \Admin\Model\CategoryModel();
		$res = $categoryModel->query("select * from blog_category order by position desc limit 1");
		if(empty($res)){
			$position = 0;
		}else{
			$position = $res[0]['position'];
			var_dump(intval($position) + 1);
		}
		
	}
	
	public function moveUpDown()
	{
		$data = $_POST;
		$action		= $data['action'];
		$categoryId = $data['categoryId'];
		$secondaryId= $data['secondaryId'];
		echo $action."-".$categoryId."-".$secondaryId;exit;
		$condition 	= new \stdClass();
		$condition->category_id = array("in", array($categoryId, $secondaryId));
		$categoryModel = new \Admin\Model\CategoryModel();
		$positionArr = $categoryModel->where($condition)->select();
// 		echo $categoryModel->getLastSql();

		$categoryPosition = $positionArr[0]['position'];
		$secondaryPosition = $positionArr[1]['position'];
		if($categoryId > $secondaryId){
			$categoryPosition = $positionArr[1]['position'];
			$secondaryPosition = $positionArr[0]['position'];
		}
		
// 		if(0 == strcasecmp("moveup", $action)){
// 			//update blog_category set position = case category_id when 12 then 13 when 13 then 12 else position end
// 			$categoryPosition = $positionArr[1]['position'];
// 			$secondaryPosition = $positionArr[0]['position'];	
// 		}
		$runSql = "update blog_category set position = ";
		$runSql .=" case category_id when ".$categoryId." then ".$secondaryPosition;
		$runSql .=" when ".$secondaryId." then ".$categoryPosition." else position end";
// 		file_put_contents("zhai.txt", $runSql);
		if($categoryModel->execute($runSql))
			echo "success";
		else
			echo "fail";
	}
	
	/**
	 * if pass category,then get corresponding passages,
	 * else get all the passages of all categories
	 */
	public function passageList(){
		$categoryId = $_GET['categoryid'];
// 		$categoryModel 	= new \Admin\Model\CategoryModel();
// 		$categoryList  	= $categoryModel->order("position asc")->select();
		
		$passageModel	= new \Admin\Model\PassageModel();
		$passageList	= $passageModel->getCategoryPassageList($categoryId);
		
// 		$this->assign("categoryList", $categoryList);
		$this->assign("passageList", $passageList);
		$this->display();
	}
	
	public function passageListMobi(){
		$categoryId = $_GET['categoryid'];
		$passageModel	= new \Admin\Model\PassageModel();
		$passageList	= $passageModel->getCategoryPassageList($categoryId);
		$this->assign("passageList", $passageList);
		$this->display();
	}
	
	public function sendPassage()
	{
		$categoryModel 	= new \Admin\Model\CategoryModel();
		$categoryList  	= $categoryModel->order("position asc")->select();
		$this->assign("categoryList", $categoryList);
		$this->display();
	}
	
	public function releasePassage()
	{
		$data = $_POST;
		date_default_timezone_set("asia/shanghai");
		$data['create_at'] = date("Y-m-d H:i:s");
		$data['update_at'] = date("Y-m-d H:i:s");
		$weekDayArr = array("日","一","二","三","四","五","六");
		$data['week_day'] = "星期".$weekDayArr[date("w")];
		if(empty($data['is_support_comment'])){
			$data['is_support_comment'] = 0;
		}else{
			$data['is_support_comment'] = 1;
		}
		$data['user_id'] = 1; /////////////------------------correct
		unset($data['passageDraft']);
// 		var_dump($data);
		$passageModel = new \Admin\Model\PassageModel();
		$passageModel->add($data);
		$this->redirect("passageList");
	}
	
	public function removePassage()
	{
		$data = $_GET;
		$condition['passage_id'] = $data['passage'];
		$categoryId = $data['category'];
		$passageModel = new \Admin\Model\PassageModel();
		if($passageModel->where($condition)->delete() !== false){
			$this->redirect("blog/passagelist/categoryId/".$categoryId);
		}
	}
	
	public function addData()
	{	
	}
	//move passage to the top
	public function toTop()
	{
		$data = $_GET;
		$categoryId = $data['category'];
		$updateData['passage_id'] = $data['passage'];
		$updateData['is_top']	  = 1;
		$passageModel = new \Admin\Model\PassageModel();
		if($passageModel->save($updateData) !== false){
			$this->redirect("blog/passagelist/categoryId/".$categoryId);
		}
	}
	
	//move passage to the top
	public function cancelTop()
	{
		$data = $_GET;
		$updateData['passage_id'] = $data['passage'];
		$updateData['is_top']	  = 0;
		$passageModel = new \Admin\Model\PassageModel();
		if($passageModel->save($updateData) !== false){
			$this->redirect("blog/passagelist/categoryId/".$categoryId);
		}
	}
	

}