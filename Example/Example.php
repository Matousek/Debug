<?php

use Matousek\Debug;

require __DIR__ . '/../vendor/autoload.php';

Tracy\Debugger::enable();

$longString = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
    fermentum dolor non mollis feugiat. Aenean eros augue, ultrices at semper ac, 
    aliquam id nulla. Integer in mi nec turpis tempus auctor sit amet eget nunc. 
    Sed et dui at mauris imperdiet mollis sit amet eget mauris. Cras lectus felis, 
    dictum at finibus sit amet, accumsan vel dui. Nulla facilisi. Donec facilisis 
    mauris pulvinar lorem faucibus egestas. Suspendisse pretium nunc molestie 
    consectetur suscipit. Nam ut erat congue, pharetra erat ac, fringilla libero. 
    Nulla tristique neque non arcu varius, vel vehicula nisi rutrum. Donec sit 
    amet odio sed purus eleifend commodo.';

Debug::dump($longString);
Debug::dump($longString, null, 700);

$manyNested[][][][]['foo'] = 'bar';

Debug::dump($manyNested);
Debug::dump($manyNested, 10);