### Задание №2

### Цель
* Реализовать базовую аутентификацию и авторизацию пользователя.
* Ознакомиться с шаблонами проектирования
    * MVC
    * Repository
* Работа с MYSQL
* Mock объекты

### Описание
Необходимо создать функционал авторизации и аутентификации пользователей:
* Создаем страничку со стандартной формой login/register (userLogin, password).
* Реализуем интерфейсы в App\Authentication
* Создаем табличку users с полями (id, login (unique), password, salt)
* Покрываем тестами AuthenticationServiceInterface, используя phpunit mock objects для UserRepositoryInterface 

Студент имеет право использовать стороние библиотеки (роутинг, контроллеры, action, template и т.д.).

В сети очень много информации, более подробно рекомендую почитать Мартина Фаулера.

### Ссылки
* [PHPUnit mock](https://phpunit.de/manual/current/en/test-doubles.html)
* [MVC](http://design-pattern.ru/patterns/mvc.html)
* [Repository](http://design-pattern.ru/patterns/repository.html)