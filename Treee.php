<?php
include 'parse.com-php-library-master/parse.php';
class Treee{
	public $id='';
	public $parentId='';
	public $imgUrl='';
	public $content='';
	public $timestamp='';
	public $good=0;
	public $bad=0;
	public $type=0;
	public $level=0;
	function  __construct($id){
		// $p=new parseObject('treee');
		$q=new parseQuery('treee');
		$q->where('objectId',$id);
		$result=$q->find();
		$obj=$result[0];
		var_dump($obj);
		$this->id			=$obj->get('objectId');
		$this->content		=$obj->get('content');
		$this->timestamp	=$obj->get('updatedAt');
		$this->parentId		=$obj->get('parent');
	}
}
?>