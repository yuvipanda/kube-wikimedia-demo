<?php
$thing = $_ENV['SOME_THING'];
if (strpos($thing, 'wat', 0) !== 0) {
    header("HTTP/1.1 500 Internal Server Error");
    exit(-1);
}
echo $_ENV['SOME_THING'];