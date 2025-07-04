<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit31ca365061c33a35a63272e11d3aaf02
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit31ca365061c33a35a63272e11d3aaf02', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit31ca365061c33a35a63272e11d3aaf02', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit31ca365061c33a35a63272e11d3aaf02::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
