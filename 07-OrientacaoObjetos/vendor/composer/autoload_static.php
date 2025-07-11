<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31ca365061c33a35a63272e11d3aaf02
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Ssl\\OrientacaoObjetos\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ssl\\OrientacaoObjetos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31ca365061c33a35a63272e11d3aaf02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31ca365061c33a35a63272e11d3aaf02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31ca365061c33a35a63272e11d3aaf02::$classMap;

        }, null, ClassLoader::class);
    }
}
