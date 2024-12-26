#!/bin/bash

echo "pekral - coding style checker install"

composer require --dev pekral/phpcs-rules
cp ./vendor/pekral/phpcs-rules/ruleset.xml ./ruleset.xml

echo "pekral - static analyzer install"

composer require --dev pekral/phpstan-rules
cp ./vendor/pekral/phpstan-rules/phpstan.neon ./phpstan.neon

echo "pekral - refactoring install"

composer require --dev pekral/rector-rules
cp ./vendor/pekral/rector-rules/rector.php.example ./rector.php
