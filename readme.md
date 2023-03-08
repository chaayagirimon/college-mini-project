# PREREQUISITES
- Apache2
- php
- Mysql

## APACHE AND PHP INSTALLATION

apache installation
```
sudo apt-get install apache2 -y
```

apache status
```
/etc/init.d/apache2 status
```

apache version
```
apache2 -v
```

PHP installation
```
sudo apt-get install php
```

```
sudo apt-get install php-mysqlnd
```

PHP version
```
php -v
```

## MYSQL INSTALLATION

dowload debian package from here:
https://dev.mysql.com/downloads/repo/apt/

```
sudo dpkg -i mysql-apt-config_0.8.24-1_all.deb
sudo apt-get update
sudo apt-get install mysql-server
```

Checking status of mySQL
```
systemctl status mysql
```

To start MySQL and enter password.
```
mysql -u root -p
```

### CREATE TABLES IN MYSQL
enter commands given in the tables.sql file

# TO RUN:
```
php -S localhost:8000 -t college-mini-project
```