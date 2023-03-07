SHELL = /bin/bash


SASSFLAGS = --style nested -M

# sassc - a very fast SASS compiler written in C++
install-sass:
	sudo apt install sassc

sass:
	sassc $(SASSFLAGS) modules/clean/_sass/clean.sass > modules/clean/assets/css/clean.css


# Watch changes in SASS files and compile the CSS bundle
sass-watch:
	while true; do \
  		make; \
  		inotifywait -qre close_write ./modules/clean/_sass; \
	done


# esbuild - a very fast JavaScript bundler written in Go
install-esbuild:
	npm install --save-exact esbuild

# create bundle from the source
esbuild:
	./node_modules/.bin/esbuild modules/clean/_javascript/clean.js --bundle --sourcemap --target=es6 --outfile=modules/clean/assets/js/clean.js

esbuild-watch:
	./node_modules/.bin/esbuild modules/clean/_javascript/clean.js --bundle --sourcemap --outfile=modules/clean/assets/js/clean.js --watch

