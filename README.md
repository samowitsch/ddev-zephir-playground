# DDEV Zephir playground

![Zephir logo](docs/images/zephir_logo-105x36.svg)

This is a playground to try [Zephir](https://docs.zephir-lang.com/latest/motivation/#why-zephir) for PHP extension creation.  
Depending on which host this [DDEV Zephir playground](https://github.com/samowitsch/ddev-zephir-playground) is used  
an x86 or arm64 PHP extension will be compiled.

## Installation

```shell
# clone repositoy
$ git clone https://github.com/samowitsch/ddev-zephir-playground.git

# cd into folder an start ddev
$ cd ddev-zephir-playground
$ ddev start

# "ssh" into ddev web contauner
$ ddev ssh

# and then compile playground php module "utils"
$ make build-all

# open site (use not inside web container)
$ ddev launch

# [optional] enable xdebug (use not inside web container)
$ ddev xdebug toggle
```

## Links

* [Zephir-lang](https://zephir-lang.com/en)
* [Introducing Zephir](https://docs.zephir-lang.com/latest/introduction/)
* [Getting Started, Installation, Tutorial](https://docs.zephir-lang.com/latest/installation/)