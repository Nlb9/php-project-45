# Makefile
install:
	composer install

brain_games:
	./bin/brain-games

brain_even:
	./bin/brain-even

brain_calc:
	./bin/brain-calc

brain-gcd:
	.bin/brain-gcd

brain-progression:
	.bin/brain-progression

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin