# Makefile
install:
	composer install

brain_games:
	./bin/brain-games

brain_even:
	./bin/brain-even

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin