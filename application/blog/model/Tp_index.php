<?php
namespace app\blog\model;
use think\Model;
class Tp_index extends Model
{ 
	public function getStatusAttr($value) //get+字段名+attr是model自制的函数
	{
		$status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
		return $status[$value];
	}
	$user = User::get(1);//获取数据库id为多少的一条数据
	echo $user->status; // 例如输出“正常”  $user->status 中的status是get+字段名+attr中的字段名 model会自动执行这个函数
}
?>