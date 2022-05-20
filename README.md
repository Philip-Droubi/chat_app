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

## To test on postman 
- creat a new ```POST``` request
- Put this link ```http://127.0.0.1:8000/api/sendmessage```
- In request Headers put key: ```Accept``` and its value should be ```application/json```
- In request Body put those Keys and Values : 
- - ```user_id```  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;     ```5``` &nbsp; &nbsp;&nbsp; &nbsp;(or any integer)
- - ```message_id```  &nbsp; &nbsp;&nbsp;   ```1```&nbsp; &nbsp;&nbsp; &nbsp; (or any integer)
- - ```message```  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;     ```message content```
- Click on ```Send``` button or ```ctrl + Enter```
- The response should look like an empty array ```[]``` and status code should be 200
