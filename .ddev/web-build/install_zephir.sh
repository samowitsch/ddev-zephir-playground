#!/usr/bin/env bash
git clone https://github.com/zephir-lang/php-zephir-parser.git
cd php-zephir-parser
phpize
./configure
make
sudo make install


#cd /var/www/html/utils/
#../bin/zephir build