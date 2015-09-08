<?php
namespace Admin\Model;
use Think\Model;
use Think\Log;

class CategoryModel extends Model
{
	protected $trueTableName  = 'blog_category';

	/**
	 * get the bottom category position
	 * @return number
	 */
	public function getFootPosition()
	{
		$res = $this->query("select * from " .$this->trueTableName. " order by position desc limit 1");
		if(empty($res)){
			$position = 0;
		}else{
			$position = $res[0]['position'];
		}
		return $position;
	}
	
	public function getTopPosition()
	{
		$res = $this->query("select * from " .$this->trueTableName. " order by position asc limit 1");
		if(empty($res)){
			$position = 0;
		}else{
			$position = $res[0]['position'];
		}
		return $position;
	}



}