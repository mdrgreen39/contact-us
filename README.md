# お問い合わせフォーム

## 環境構築

### Dockerビルド

1. git clone : https://github.com/coachtech-material/laravel-docker-template.git
2. リポジトリ名をcontact-usに変更
3. mysqlのplatform:をlinux/amd64に設定
4. docker-compose up -d —build
 
### Laravel開発環境

1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、開発環境を変更
4. php artisan key: generate
5. php artisan migrate
6. php artisan db:seed

### 使用技術

- PHP 8.0
- Laravel 8.0
- MySQL 8.0

### ER図

### URL

- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/
