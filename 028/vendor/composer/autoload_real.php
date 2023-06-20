<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4c3da997a78e4141e28d7c8c39f119e
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

        spl_autoload_register(array('ComposerAutoloaderInite4c3da997a78e4141e28d7c8c39f119e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4c3da997a78e4141e28d7c8c39f119e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4c3da997a78e4141e28d7c8c39f119e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
