<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
//全局变量
    '__pattern__' => [
        'name' => '\w+',
    ],
//  '[hello]'     => [
//      ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//      ':name' => ['index/hello', ['method' => 'post']],
//  ],
    // 定义路由的请求类型和后缀
   // 'hellos/[:name]' => ['test/index/hellos', ['method' => 'get', 'ext' => 'html']], //这句话限制访问的时候 必须后缀是html

    // 添加路由规则 路由到 index控制器的hellos操作方法
	//'hellos/[:name]' => 'test/index/hellos', //路由的name根据定义的页面 定义这个值 然后  路由到test的index的hellos函数
	//定义闭包
//	'hellos/[:name]' => function ($name) {
//		return 'Hello,' . $name . '!';
//	},
	//blog文件定义的内容 定义blog控制器
//	'blog/:year/:month' => ['test/blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
//	'blog/:id' =>['test/blog/gets',['method' => 'get'],['id' => '\d+']],
//	'blog/:name' => ['test/blog/read',['method' => 'get'],['name' => '\w+']],
//	'hellos/:name'  => ['test/par/hellos',[],['name'=>'\w+']], //par 的路由控制 hellos
	//设置控制器user的路由
//	'user/index' => 'test/user/index',
//	'user/creat' => 'test/user/creat',
//	'user/add' => 'test/user/add',
//	'user/add_list' => 'test/user/add_list',
//	'user/updata/:id'  => 'test/user/updata',
//	'user/delet/:id' => 'test/user/delet',
//	'user/:id' => 'test/user/read',
//	'text/create' => 'test/text/create',
//	'text/add' => 'test/text/add',
];

/*
 自定义方法 设置 路由
 自定义 定义闭包
 * */
//use think\Route;
//Route::rule('hellos/[:name]', 'test/index/hellos');
//Route::rule('hellos/:name', function ($name) {
//	return 'Hello,' . $name . '!';
//});
//生成url地址
//Url::build('test/blog/read', 'name=thinkphp');
//Url：：build('test/blog/gets','id=4');
//Url::build('test/blog/archive','year=2015&month=05');

