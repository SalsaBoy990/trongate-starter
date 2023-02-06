SHELL = /bin/bash

SASSFLAGS = --style nested -M

# sassc - a very fast SASS compiler written in C++
install-sass:
	sudo apt install sassc

compile:
	sassc $(SASSFLAGS) _sass/w3next.sass > assets/css/w3next.css

.DEFAULT_GOAL := all

.PHONY: all

all: compile

# Watch changes in SASS files and compile the CSS bundle
watch:
	while true; do \
  		make; \
  		inotifywait -qre close_write ./_sass; \
	done

# esbuild - a very fast JavaScript bundler written in Go
install-esbuild:
	npm install --save-exact esbuild

# create bundle from the source
esbuild:
	./node_modules/.bin/esbuild _javascript/w3.js --bundle --sourcemap --outfile=assets/js/w3.js

esbuild-watch:
	./node_modules/.bin/esbuild _javascript/w3.js --bundle --sourcemap --outfile=assets/js/w3.js --watch

