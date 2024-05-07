# DDEV Zephir playground

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

* https://zephir-lang.com/en
* https://docs.zephir-lang.com/latest/introduction/
* https://docs.zephir-lang.com/latest/installation/