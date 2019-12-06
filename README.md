此项目基于最新的Laravel 6.6.1,对项目进行配置处理达到快速搭建API服务
---
## 实现功能
* 解决跨域问题

* 统一Response响应处理

* Api-Resource资源返回

* 使用Enum枚举

* jwt-auth用户认证与无感知自动刷新

## 环境
---
* PHP :7.2
* MYSQL :5.7
## 安装
1.先把项目克隆到本地
``
git clone https://github.com/renzhifan/laravelApi.git
``
2.打开项目目录，下载依赖扩展包

``
composer install
``

3.复制配置文件

``
cp .env.example .env
``

>自行配置.env里的相关配置信息

4.生成APP_KEY和JWT_SECRET

``
php artisan key:generate
php artisan jwt:secret
``

5.创建迁移

``
php artisan migrate
``

6.填充数据

``
php artisan db:seed
``