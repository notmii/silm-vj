apt update
apt install php7.4 -y
apt install wget git zip build-essential -y
wget https://getcomposer.org/download/latest-stable/composer.phar
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer

echo "Installing composer packages"
cd /app
composer install
