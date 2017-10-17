#!/usr/bin/env bash
export DEBIAN_FRONTEND="noninteractive"
wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/vitexsoftware.list
apt-get update
apt-get install -y php7.0 php7.0-curl php-pear php7.0-intl php7.0-zip composer dpkg-dev devscripts php-apigen debhelper
rm -f /etc/apt/sources.list.d/vitexsoftware.list
apt-get update

cd /vagrant
debuild -i -us -uc -b
mkdir -p /vagrant/deb
mv /*.deb /vagrant/deb
cd /vagrant/deb
dpkg-scanpackages . /dev/null | gzip -9c > Packages.gz
echo "deb file:/vagrant/deb ./" > /etc/apt/sources.list.d/local.list
apt-get update
export DEBCONF_DEBUG="developer"
apt-get -y --allow-unauthenticated install flexipeehp
cd /usr/share/doc/FlexiPeeHP/
composer update
php -f /usr/share/doc/FlexiPeeHP/flexibeeping.php




