# Dhii - Config - Interface

[![Build Status](https://travis-ci.org/Dhii/config-interface.svg?branch=develop)](https://travis-ci.org/Dhii/config-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/config-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/config-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/config-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/config-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/config-interface/version)](https://packagist.org/packages/dhii/config-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
[PSR-11][]-compatible interfaces for working with structured configuration.

### Interfaces
- [`ConfigInterface`][ConfigInterface] - The main interface. On top of [`ContainerInterface`][ContainerInterface],
it adds the concept of "path", allowing access to nested data.
- [`ConfigAwareInterface`][ConfigAwareInterface] - Awareness of a config.


[Dhii]:                                     https://github.com/Dhii/dhii
[PSR-11]:                                   https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md

[ConfigInterface]:                          src/ConfigInterface.php
[ConfigAwareInterface]:                     src/ConfigAwareInterface.php

[ContainerInterface]:                       https://github.com/php-fig/container/blob/master/src/ContainerInterface.php
