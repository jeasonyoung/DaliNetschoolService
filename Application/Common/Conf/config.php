<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_CHARSET' =>  'utf-8',// 默认输出编码
	'URL_MODEL'		  =>  1,      // URL访问模式: 2 采用Rewrite模式 IIS下需配置webconfig文件
	
	/* 数据库设置 */
	'DB_TYPE'      => 'mysql',     // 数据库类型
	'DB_HOST'      => '127.0.0.1', // 服务器地址
	'DB_NAME'      => 'dali',          // 数据库名
	'DB_USER'      => 'sa',      // 用户名
	'DB_PWD'       => 'sa',          // 密码
	'DB_PORT'      => '3306',        // 端口
	'DB_PREFIX'    => 'hk_',    // 数据库表前缀
	'DB_CHARSET'   => 'utf8',    // 数据库编码默认采用utf8
	
	/* SQL解析缓存*/
	'DB_SQL_BUILD_CACHE'   => true,
	'DB_SQL_BUILD_QUEUE'   => 'xcache',
	'DB_SQL_BUILD_LENGTH'  => 20,
	
	/*布局设置*/
	'TMPL_ENGINE_TYPE'     => 'Think',
    'URL_CASE_INSENSITIVE' => true,
);