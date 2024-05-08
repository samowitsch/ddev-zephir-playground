.PHONY: build-all
build-all: clean build stubs reload-php-fpm  ## build-all: clean build stubs reload-php-fpm

.PHONY: build
build: ## build php module
	@echo "build php module with zephir"
	cd ./utils/ && \
	../bin/zephir build

	ls -lah /usr/lib/php/20230831/utils.so
	ls -lah /usr/lib/php/20230831/zephir_parser.so

.PHONY: clean
clean: ## clean
	@echo "Cleaning..."
	cd ./utils/ && \
	../bin/zephir fullclean

.PHONY: reload-php-fpm
reload-php-fpm: ## "reload" php-fpm (https://github.com/ddev/ddev/issues/981)
	@echo "reload-php-fpm..."
	killall -HUP php-fpm

.PHONY: stubs
stubs: ## generate stubs for IDE
	@echo "Generate stubs..."
	cd ./utils/ && \
	../bin/zephir stubs

# Self-Documenting Makefiles utilizing comments starting with
# double hash appended in same line where the rule is defined
# https://marmelab.com/blog/2016/02/29/auto-documented-makefile.html
.PHONY: help
help: ## prints this help information
	@echo "Available commands:"
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-25s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help