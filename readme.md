# 部署流程
1. 创建recycling_project数据库
2. 配置.env文件
3. 重新生成项目秘钥 php artisan key:generate
4. 创建数据表 php artisan migrate

注:如上述步骤报错 
运行：

composer clear-cache

composer install

重新载入库依赖