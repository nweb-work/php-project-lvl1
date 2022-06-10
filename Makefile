install: composer install
php ./bin/brain-games
validate: composer validate
lint: сomposer exec --verbose phpcs -- --standard=PSR12 src bin