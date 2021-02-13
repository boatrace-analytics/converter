<?php

namespace Boatrace\Analytics;

use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Converter
{
    /**
     * @var \Boatrace\Analytics\MainConverter
     */
    protected $converter;

    /**
     * @var \Boatrace\Analytics\Converter
     */
    protected static $instance;

    /**
     * @var \DI\Container
     */
    protected static $container;

    /**
     * @param  \Boatrace\Analytics\MainConverter  $converter
     * @return void
     */
    public function __construct(MainConverter $converter)
    {
        $this->converter = $converter;
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->converter, $name], $arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return call_user_func_array([self::getInstance(), $name], $arguments);
    }

    /**
     * @return \Boatrace\Analytics\Converter
     */
    public static function getInstance(): Converter
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Converter');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;

        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');

        return $builder->build();
    }
}
