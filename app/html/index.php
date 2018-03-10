<pre>
<?php

require __DIR__.'/../vendor/autoload.php';

$helloWorld = new CoB\HelloWorld();

echo "Hello, my instance's x is: " . $helloWorld->whatsMyX() . PHP_EOL;
echo "Hello, our class' i is: " . $helloWorld->whatsOurI() . PHP_EOL;
echo "Hello, our counter is: " . \CoB\HelloWorld::whatsOurC() . PHP_EOL;
echo "inline static test: " . $helloWorld->staticInline();

echo " --- ADVERTISEMENT ---" . PHP_EOL;
$helloWorld->incrementMyX();
$helloWorld->incrementMyI();
\CoB\HelloWorld::incrementOurC();

echo "Hello, my instance's x is: " . $helloWorld->whatsMyX() . PHP_EOL;
echo "Hello, our class' i is: " . $helloWorld->whatsOurI() . PHP_EOL;
echo "Hello, our counter is: " .  \CoB\HelloWorld::whatsOurC() . PHP_EOL;
echo "inline static test: " . $helloWorld->staticInline();


?>
</pre>