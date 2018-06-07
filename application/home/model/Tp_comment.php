<?php
namespace app\home\model;
use think\Model;
class Tp_comment extends Model{
	protected $autoWriteTimestamp = true;//是否开启自动写入时间戳
	protected $pk = 'id';
	protected $name = 'comment';
}




?>