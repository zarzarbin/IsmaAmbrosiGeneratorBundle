<?php

/** @var $loader \Composer\Autoload\ClassLoader */
if (!$loader = include __DIR__.'/../vendor/.composer/autoload.php') {
    $nl = PHP_SAPI === 'cli' ? PHP_EOL : '<br />';
    echo "$nl$nl";
    if (is_writable(dirname(__DIR__)) && $installer = @file_get_contents('http://getcomposer.org/installer')) {
        echo 'You must set up the project dependencies.'.$nl;
        $installerPath = dirname(__DIR__).'/install-composer.php';
        file_put_contents($installerPath, $installer);
        echo 'The composer installer has been downloaded in '.$installerPath.$nl;
        die('Run the following commands in '.dirname(__DIR__).':'.$nl.$nl.
            'php install-composer.php'.$nl.
            'php composer.phar install'.$nl);
    }
    die('You must set up the project dependencies.'.$nl.
        'Run the following commands in '.dirname(__DIR__).':'.$nl.$nl.
        'curl -s http://getcomposer.org/installer | php'.$nl.
        'php composer.phar install'.$nl);
}

$loader->add('IsmaAmbrosi\\Bundle\\GeneratorBundle', __DIR__.'/../../../..');