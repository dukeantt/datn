# datn

		(Requires internet connection)

1. Required Softwares:
	- Web Server -> WampServer (https://www.wampserver.com/en/#download-wrapper)
			or Xampp (https://www.apachefriends.org/download.html)

	- Composer..Dependency Manager
	https://getcomposer.org/download/

	- Editor -> any
	Recommended Sublime, PHPStorm.

2. Run Apache and MySql Server from Xampp control panel
3. Open Web Browser:
	- localhost/phpmyadmin
	- create a new DB with name "datn"
4. Go to the Folder application using cd
   On your cmd or Terminal:
```
	Run 'composer install'
	create .env file 
 	Run 'php artisan key:generate'
 	Run 'php artisan migrate'
 	Run 'php artisan db:seed'
	Run 'composer require jrm2k6/cloudder'
	Run 'composer require snowfire/beautymail dev-master'
	Run 'php artisan vendor:publish --provider="Snowfire\Beautymail\BeautymailServiceProvider"'
 	Run 'php artisan serve'
```
5. Open Web Browser
	localhost:8000 (Home Page)
	localhost:8000/admin 

**Account: admin01	
**Password: admin01

env:
```APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:FzKxXyiKjzIJMT8Nr34T8aU7mxIdbN63IdLmRQCXiYw=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=datn
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

CLOUDINARY_API_KEY=358885834193318
CLOUDINARY_API_SECRET=Gdtkuq1sn_GiLx9CHRRJizWc9Nk
CLOUDINARY_CLOUD_NAME=dzbi63fko
```


ducanh	
$Abcd1234
fashionvietnam
