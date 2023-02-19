<?php

/**
 * Divide your view files into "two stages", start by coding PHP and preparing 
 * the content into variables (1),  then output the content/variables together
 * with HTML elements (2).
 * It is good practice to keep this in two stages, it makes your code cleaner
 * and easier to read, edit and develop.
 */

$message = "Hej världen!";
$number = 24;
$pi = 3.141592;
$isTrue = false;
$noValue = null;


?>

<h2>Hello world</h2>

<p> PHP säger: <strong><?= $message ?></strong> </p>

<pre><?= var_dump($message) ?></pre>
<pre><?= var_dump($pi) ?></pre>
<pre><?= var_dump($number) ?></pre>
<pre><?= var_dump($isTrue) ?></pre>
<pre><?= var_dump($noValue) ?></pre>

