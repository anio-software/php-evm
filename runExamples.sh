#!/bin/bash -eufx

php src/examples/toJSON.php example/manual.xml > example/manual.json
php src/examples/toCode.php example/manual.xml iface src/examples/filter/renderable.php > example/iface.php
php src/examples/toCode.php example/manual.xml base src/examples/filter/renderable.php > example/base.php
php ./README.example.php
