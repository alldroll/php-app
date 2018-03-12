## Скелет php приложения

Данный репозиторий содержит базовый скелет php приложения, которое мы будем
использовать в практических заданиях.

Структура проекта:
* www - root директория, содержит index.php (скрипт который обрабатывает все входящие запросы)
* src - исходный код приложения
* static - директория со статикой
* tests - тесты (юнит)
* docker - настройки докер контейнера

В качестве автозагрузчика классов предлагаю использовать [composer](https://getcomposer.org/),
но если у кого-то есть желание написать свой, то пожалуйста:)

### Установка

Чтобы облегчить жизнь студентам, предлагается использовать [докер](https://www.docker.com/what-container).
Использование докера необязательно, студент может сам выбрать и настроить веб сервер (либо использовать php builtin server),
выбрать субд. Все-таки рекомендуется использовать mysql, т.к. у автора есть практический опыт работы с ней.

Я проверил работоспособность только на Unix системах, хотя на Windows все тоже должно работать.

* [Устаналиваем docker](https://docs.docker.com/install/)
* Переходим в папку docker
* Команда docker-compose up ( -d запустить как daemon)
* Ждем пока все image установятся, далее открываем localhost:8080 и если видим "Hello World", значит все ок:)

### Shortcuts

#### Как запустить тесты?
* docker exec -ti docker_php_1 bash - переходим в контейнер php
* vendor/bin/phpunit tests/

#### Как получить допуступ к mysql контейнеру?
* docker exec -ti docker_mysql_1 mysql


#### Как закрыть все контейнеры?
* docker-compose down -v

### Links
* [php-fpm](http://php.net/manual/ru/install.fpm.php)
* [autoload](http://php.net/manual/ru/language.oop5.autoload.php)
* [docker](https://www.docker.com/)
* [composer](https://getcomposer.org/)
* [debug](https://medium.com/@pablofmorales/xdebug-with-docker-and-phpstorm-786da0d0fad2)
