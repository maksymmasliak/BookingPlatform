FROM php:8.4-fpm-alpine AS base

RUN apk add --no-cache git unzip

COPY --from=mlocati/php-extension-installer:latest /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions intl pdo_pgsql opcache zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ARG UID=1000
ARG GID=1000
RUN addgroup -g ${GID} appgroup \
    && adduser -D -u ${UID} -G appgroup appuser

WORKDIR /var/www/html
RUN chown appuser:appgroup /var/www/html

FROM base AS dev
RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
USER appuser

FROM base AS prod
ENV APP_ENV=prod
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY --chown=appuser:appgroup . .
USER appuser
RUN composer install --no-dev --optimize-autoloader --no-interaction
