# CoreUI-laravel
This is a very crude port of the [CoreUI](https://github.com/mrholek/CoreUI-Free-Bootstrap-Admin-Template) bootstrap 4 template.

## Installation:
First clone or download this repository and cd to that directory.
Make sure you have bower, gulp and nmp installed on your system. Set the storage folder permissions to 777. After this run the following commands.
```
composer install
npm install
bower install
gulp --production
cp .env.example .env
php artisan key:generate
php artisan serve
```
## Usage:
To enable authentication uncomment the auth middleware in the HomeController to enable the authentication check.


### Credits:
Big thanks to [CoreUI Bootstrap 4 Admin Template](https://github.com/mrholek/CoreUI-Free-Bootstrap-Admin-Template) for making such an awesome bootstrap template.
