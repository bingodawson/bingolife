<?php
namespace Admin\Model;
use Think\Model;
use Think\Log;

class PassageModel extends Model
{
	protected $trueTableName  = 'blog_passage';

	public function getCategoryPassageList($categoryId)
	{
		if(empty($categoryId)){
			$passageList = $this->join("LEFT JOIN blog_category on ".$this->trueTableName.".category_id = blog_category.category_id")->order("update_at desc")->select();
		}else{
			$condition['category_id'] = $categoryId;
			$passageList = $this->where($condition)->order("update_at desc")->select();
		}		
		file_put_contents("zhai.txt", "\n".$this->getLastSql());
		return $passageList;
	}


}