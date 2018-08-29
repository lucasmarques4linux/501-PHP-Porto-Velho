# MYSQL

```
sudo su
mysql

CREATE USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';

ALTER USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';

GRANT ALL PRIVILEGES ON *.* TO 'lucas'@'localhost';
l
CREATE DATABASE aula;
exit

exit

mysql -u lucas -b aula -p
```

# POSTGRES

```
sudo su
su postgres
psql

CREATE USER lucas PASSWORD '123';
ALTER USER lucas PASSWORD '123';
CREATE DATABASE aula OWNER lucas;

\q
exit
exit

psql -h localhost -U lucas -d aula
```

```
sudo apt install php7.0-mysql php7,0-pgsql
sudo service apache2 restart