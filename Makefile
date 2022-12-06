# Makefile
install:
	composer install

brain_games:
	./bin/brain-games

brain_even:
	./bin/brain-even

brain_calc:
	./bin/brain-calc

brain_gcd:
	./bin/brain-gcd

brain_progression:
	./bin/brain-progression

brain_prime:
	./bin/brain-prime

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
