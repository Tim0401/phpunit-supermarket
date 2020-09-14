
## 概要

これをやるためのリポジトリ  
https://gist.github.com/yattom/c906216ab1fdf68a133ba0fbade1a395  

## 参考

https://phpunit.readthedocs.io/ja/latest/  
http://masayuki5160.hatenablog.com/entry/2018/01/03/091826  
https://qiita.com/atwata/items/5ba72d3d881a81227c2a  
https://qiita.com/masayuki5160/items/3e1c282eed91188699f1  

## composer install phpunit

### install

```bash
docker exec -it php bash

php composer.phar install
php -v
./vendor/bin/phpunit --v

php composer.phar update
php composer.phar dumpautoload
```

### test

```bash
./vendor/bin/phpunit src/Test/*
```

## 初期設定（すでに入ってるので必要なし）

```bash
curl -sS https://getcomposer.org/installer | php
php composer.phar require --dev phpunit/phpunit ^9
```
