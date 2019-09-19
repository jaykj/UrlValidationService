# url validation service

## Clone the repository 
`git clone https://github.com/jaykj/UrlValidationService.git`
## Install composer only for the project directory

`cd UrlValidationService`

`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`

`php composer-setup.php`
## Install project dependencies

`composer composer.phar install`

## Start the local symfony web server

`php bin/console server:start`

`curl http://localhost:<portnumber>/urlinfo/1/nodomain.com:9000/goodurl'

should return Allowed

`curl http://localhost:<portnumber>somedomian.com:8080string/wordvalue`

should return Blocked

## run the tests
 `bin/phpunit tests/Service/UrlValidationTest.php`
