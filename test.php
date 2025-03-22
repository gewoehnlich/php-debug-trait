<?php

namespace Test;

require_once "helpers/converter.php";
require_once "debug.php";

use Helper\Debug;

class Test
{
    use Debug;
}

$tester = new Test();
$tester->print("Hello, world!");
