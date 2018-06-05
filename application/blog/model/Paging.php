<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 11:12
 */

namespace app\blog\model;
use think\Controller;
use think\Db;

class Paging extends Controller
{
    protected $table;
    protected $counts;      //总信息数
    protected $page;        //当前页
    protected $nums = 3;   //每页显示的信息数
    protected $limit = 5;   //设置底部中间显示页数
    protected $start;       //起始条数
    protected $list;        //每页数据
    protected $yeshu;       //总页数

    public function __construct($table)
    {
        $this->table = $table;

    }

    /*
     * 资源分页
     */
    //$where 数据库查询的条件
    public function page_info($page,$where = [])
    {
        $this->page = $page;
        $this->fenye($where);
        $lim = $this->fylist();

        return [
            'info'  =>  $this->list,
            'fenye' =>  $lim,
            'page'  =>  $this->page,
            'zys'   =>  $this->yeshu,
            'count' => $this->counts
            ];
    }

    /*
     * 实例化处理数据
     */
    protected function fenye($where = [])
    {
        if(!empty($where))
        {
            $this->counts = Db::name($this->table)->where($where)->count();
            $this->start = $this->nums * ($this->page-1);
            $this->list = Db::name($this->table)
                ->where($where)
                ->order('update_time desc')
                ->limit($this->start,$this->nums)
                ->select();
            $this->yeshu = ceil( $this->counts / $this->nums );
        }
        else
        {
            $this->counts = Db::name($this->table)->count();
            $this->start = $this->nums * ($this->page-1);
            $this->list = Db::name($this->table)
                ->order('update_time desc')
                ->limit($this->start,$this->nums)
                ->select();
            $this->yeshu = ceil( $this->counts / $this->nums );
        }
    }

    /*
     * 分页页数处理
     */
    protected function fylist()
    {
        $yeshu = [];
        $yelist = $this->yeshu;
        $bs = ( $this->limit - 1 ) / 2;
        if( $yelist <= $this->limit )
        {
            for( $i = 1 ; $i <= $yelist ; $i++ )
            {
                $yeshu[] = $i;
            }
        }
        else
        {
            if(($yelist - $bs) > $this->page)
            {
                if( ( $this->page - $bs ) <= 0 )
                {
                    for( $i = 1 ; $i <= $this->limit ; $i++ )
                    {
                        $yeshu[] = $i;
                    }
                }
                else
                {
                    for( $i = $this->page - $bs ; $i <= $this->page + $bs ; $i++ )
                    {
                        $yeshu[] = $i;
                    }
                }
            }
            else
            {
                for( $i = $yelist - $this->limit + 1 ; $i <= $yelist ; $i++ )
                {
                    $yeshu[] = $i;
                }
            }
        }

        return $yeshu;
    }

    /*
     * 设置每页分页数
     */
    public function set_pagenum($num = 24)
    {
        $this->nums = $num;
    }

}