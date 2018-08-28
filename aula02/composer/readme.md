

```
cd /var/www/html/
ls
cd 501/aula02/
mkdir composer
cd composer/
composer init

Package name (<vendor>/<name>) [root/composer]: lucas/composer
Description []: 
Author [Lucas Marques <lucasmarques73@hotmail.com>, n to skip]: 
Minimum Stability []: 
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: 

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no

{
    "name": "lucas/composer",
    "type": "project",
    "authors": [
        {
            "name": "Lucas Marques",
            "email": "lucasmarques73@hotmail.com"
        }
    ],
    "require": {}
}

Do you confirm generation [yes]? 



sudo apt update
sudo apt install php7.0-xml php7.0-mbstring
sudo service apache2 restart
composer install