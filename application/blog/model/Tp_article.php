<?php
namespace app\blog\model;
use think\Model;
class Tp_article extends Model
{ 
	protected $autoWriteTimestamp = true;//是否开启自动写入时间戳
	protected $pk   =   'id';//设置主键
	protected $name = 'article';
	public function getTypeAttr($value)
	{
		$status = [1=>'技术探讨',2=>'慢生活',3=>'js',4=>'html'];
		return $status[$value];
	}
}
?>