1.Создать базу данных mysql
Пользователь: root
без пароля
2.php artisan migrate
3.php artisan db:seed

Роуты
1.1. GET /api/v1/notebook/ - выводит первые 10 записей, если указать 
http://restapi/public/api/v1/notebook?page=2 то выведет 2 страницу записей
1.2. POST /api/v1/notebook/   - добавляет запись где email fio phone - обязательные поля
1.3. GET /api/v1/notebook/<id>/  - выводит запись с айди
1.4. POST /api/v1/notebook/<id>/ - изменяет запись с айди
1.5. DELETE /api/v1/notebook/<id>/ - удаляет запись с айди

update

