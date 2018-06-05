<?php
namespace app\home\model;
use think\Model;
class Tp_article extends Model{
	protected $autoWriteTimestamp = true;//是否开启自动写入时间戳
	protected $pk = 'id';
	protected $name = 'article';
	public function getTypeAttr($value)
	{
		$status = [1=>'慢生活',2=>'程序人生',3=>'经典美文'];
		return $status[$value];
	}
	public function getSignAttr($value)
	{
		$status = [1=>'首页',2=>'技术探讨',3=>'慢生活',4=>'js/jquery',5=>'html5|css3'];
		return $status[$value];
	}
}
?>