Запуск встроенного сервера

php -S localhost:4000

php -S localhost:80

php -S localhost:4000 -t www

curl -I http://localhost:4000
HTTP/1.1 200 OK
Host: localhost:4000
Connection: close
X-Powered-By: PHP/7.0.0
Content-type: text/html; charset=UTF-8
