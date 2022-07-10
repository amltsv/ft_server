service mysql restart
echo "CREATE USER 'admin'@'localhost';" | mysql -u root
echo "CREATE DATABASE wordpress_db;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress_db.* TO 'admin'@'localhost' identified by 'admin';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
service php7.3-fpm start
service nginx start
bash
