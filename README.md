###SDK
这是一个xunsearch搜索引擎的SDK，本人通过修改其中的代码，使其符合laravel5框架。

###使用方法
####1.安装

```shell
composer require fook/laravel-xunsearch
```
####2.注册服务提供者
在config/app.php文件中providers数组里加入：

```php
   Fook\xunsearch\XsServiceProvide::class,
```
在config/app.php文件中的aliases数组里加入

```php
   'XS' => Fook\xunsearch\XS::class,,
```

####查询

```php
XS::make()->getSearch()->search("关键字");
```