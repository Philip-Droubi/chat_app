## To clone the project
follow this:  
- Go to the ```C:\xampp\htdocs``` and clone the project here .
- Run ```composer install``` on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type ```copy .env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu
- Create ```chatv2db``` in your phpMyAdmin in ```http://localhost/phpmyadmin/```
- Run ```php artisan migrate```
- Run ```php artisan serv```

## To start websocket server
- Run ```php artisan websocket:serv```
- In browser copy paste this link ```http://127.0.0.1:8000/laravel-websockets```
- Click on ```Connect``` blue button
