<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_CHARSET' =>  'utf-8',// 默认输出编码
	'URL_MODEL'		  =>  1,      // URL访问模式: 2 采用Rewrite模式 IIS下需配置webconfig文件
	
	/* 数据库设置 */
	'DB_TYPE'      => 'sqlsrv',//数据库类型
	'DB_HOST'      => '192.168.1.101',//服务器地址
	'DB_NAME'      => 'wx_daliedu',//数据库名
	'DB_USER'      => 'daliedu',//用户名
	'DB_PWD'       => 'daliedu',//密码
	'DB_PORT'      => '1433',//端口
	'DB_PREFIX'    => 'tb',//数据库表前缀
	'DB_CHARSET'   => 'utf8',//数据库编码默认采用utf8
	
	/* SQL解析缓存*/
	'DB_SQL_BUILD_CACHE'   => true,
	'DB_SQL_BUILD_QUEUE'   => 'xcache',
	'DB_SQL_BUILD_LENGTH'  => 20,
	
	/*布局设置*/
	'TMPL_ENGINE_TYPE'     => 'Think',
    'URL_CASE_INSENSITIVE' => true,
);