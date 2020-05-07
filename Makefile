# include .env
# export

all: up

env:
	@docker-compose exec --user=www-data app bash

env-root:
	@docker-compose exec app bash

cp-env:
	@test -f .env || cp .env.dist .env

up:
	@docker-compose up -d --build --remove-orphans

down:
	@docker-compose down

down-v:
	@docker-compose down -v

stop:
	@docker-compose stop

install: cp-env composer-install up

composer-install:
	@docker-compose run --rm --no-deps app composer install

migrate:
	@docker-compose exec --user=www-data app ./yii migrate --interactive=0