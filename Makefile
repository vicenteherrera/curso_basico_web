.PHONY: doc-prerequisites doc-serve-watch

all: doc-prerequisites doc-serve-watch


doc-prerequisites:
	gem install bundler
	bundle install

doc-serve-watch:
	bundle exec jekyll serve --watch

test:
	exit 0

update:
	bundle update