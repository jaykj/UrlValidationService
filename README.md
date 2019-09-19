#url validation

git clone https://github.com/jaykj/UrlValidationService.git
cd UrlValidationService
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
composer composer.phar install

php bin/console server:start
curl http://localhost:<portnumber> output from above command
curl http://localhost:<portnumber>/urlinfo/1/nodomain.com:9000/goodurl
should return allowed

curl http://localhost:<portnumber>somedomian.com:8080string/wordvalue
should return Blocked

run the tests
 bin/phpunit tests/Service/UrlValidationTest.php 
