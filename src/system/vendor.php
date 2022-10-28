<?php
// aws/aws-crt-php
$autoloader->register('AWS/CRT', DIR_SYSTEM . 'vendor/aws/aws-crt-php/src/AWS/CRT/', true);
$autoloader->register('AWS/CRT/Auth', DIR_SYSTEM . 'vendor/aws/aws-crt-php/src/AWS/CRT/Auth/', true);
$autoloader->register('AWS/CRT/HTTP', DIR_SYSTEM . 'vendor/aws/aws-crt-php/src/AWS/CRT/HTTP/', true);
$autoloader->register('AWS/CRT/IO', DIR_SYSTEM . 'vendor/aws/aws-crt-php/src/AWS/CRT/IO/', true);
$autoloader->register('AWS/CRT/Internal', DIR_SYSTEM . 'vendor/aws/aws-crt-php/src/AWS/CRT/Internal/', true);

// aws/aws-sdk-php
$autoloader->register('Aws', DIR_SYSTEM . 'vendor/aws/aws-sdk-php/src/', true);
require_once(DIR_SYSTEM . 'vendor/aws/aws-sdk-php/src/functions.php');

// guzzlehttp/guzzle
$autoloader->register('GuzzleHttp', DIR_SYSTEM . 'vendor/guzzlehttp/guzzle/src/', true);
require_once(DIR_SYSTEM . 'vendor/guzzlehttp/guzzle/src/functions_include.php');

// guzzlehttp/promises
$autoloader->register('GuzzleHttp\Promise', DIR_SYSTEM . 'vendor/guzzlehttp/promises/src/', true);
require_once(DIR_SYSTEM . 'vendor/guzzlehttp/promises/src/functions_include.php');

// guzzlehttp/psr7
$autoloader->register('GuzzleHttp\Psr7', DIR_SYSTEM . 'vendor/guzzlehttp/psr7/src/', true);

// mtdowling/jmespath.php
$autoloader->register('JmesPath', DIR_SYSTEM . 'vendor/mtdowling/jmespath.php/src/', true);
require_once(DIR_SYSTEM . 'vendor/mtdowling/jmespath.php/src/JmesPath.php');

// psr/http-client
$autoloader->register('Psr\Http\Client', DIR_SYSTEM . 'vendor/psr/http-client/src/', true);

// psr/http-factory
$autoloader->register('Psr\Http\Message', DIR_SYSTEM . 'vendor/psr/http-factory/src/', true);

// psr/http-message
$autoloader->register('Psr\Http\Message', DIR_SYSTEM . 'vendor/psr/http-message/src/', true);

// psr/log
$autoloader->register('Psr\Log', DIR_SYSTEM . 'vendor/psr/log/src/', true);

// ralouphie/getallheaders
require_once(DIR_SYSTEM . 'vendor/ralouphie/getallheaders/src/getallheaders.php');

// scssphp/scssphp
$autoloader->register('ScssPhp\ScssPhp', DIR_SYSTEM . 'vendor/scssphp/scssphp/src/', true);

// symfony/deprecation-contracts
require_once(DIR_SYSTEM . 'vendor/symfony/deprecation-contracts/function.php');

// symfony/polyfill-ctype
$autoloader->register('Symfony\Polyfill\Ctype', DIR_SYSTEM . 'vendor/symfony/polyfill-ctype//', true);
require_once(DIR_SYSTEM . 'vendor/symfony/polyfill-ctype/bootstrap.php');

// symfony/polyfill-mbstring
$autoloader->register('Symfony\Polyfill\Mbstring', DIR_SYSTEM . 'vendor/symfony/polyfill-mbstring//', true);
require_once(DIR_SYSTEM . 'vendor/symfony/polyfill-mbstring/bootstrap.php');

// twig/twig
$autoloader->register('Twig', DIR_SYSTEM . 'vendor/twig/twig/src/', true);

// phpmailer/phpmailer
$autoloader->register('PHPMailer', DIR_SYSTEM . 'vendor/phpmailer/phpmailer/src/', true);
