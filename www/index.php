<?php

// Kickstart the framework
$f3=require('lib/base.php');

if ((float)PCRE_VERSION<8.0)
    trigger_error('PCRE version is out of date');
system("");
$f3->route('GET /',
    function($f3) {
        echo "easyfatfree unserialize me";
    }
);


unserialize($_GET['payload']);

$f3->run();
