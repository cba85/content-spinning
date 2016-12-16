<?php
require(dirname(__DIR__) . '/vendor/autoload.php');

use \ContentSpinning\Spin;

$spin = new Spin;
$string = '{Bonjour|Salut|Hello|Hey|Coucou} {M|Mme|Mlle} {Paco RayBan|Guy Teub|Jef Dentreprise} !';
$content = $spin->process($string);

echo $content;
