FROM composer:master


COPY . /src

RUN cd /src; composer install
RUN php artisan migrate --seed --env=production

RUN chmod -R 775 /src/storage

EXPOSE  8080

CMD ["node", "/src/index.js"]
