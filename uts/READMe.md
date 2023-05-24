**Nama : Hisyam Fausta**  
**NIM : 20210801191**  
**Teknik Informatika**  

UTS Pemrograman Web

### Opening Project
* Clone this repository  
* ``` cd /uts ```
* ```docker-compose up -d --build```
* ```docker exec -it uts_php bash```
* ```composer install```
* ``` cp .env.example .env ```  
* Adjust configuration in .env to match your database credentials
* ```php artisan key:generate```
* ```php artisan migrate --seed```
* ```chmod 777 -R storage/*```

### Default credentials
- Username: admin@admin.com
- Password: password