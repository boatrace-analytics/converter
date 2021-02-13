<?php

return [
    'Converter' => \DI\create('\Boatrace\Analytics\Converter')->constructor(
        \DI\get('MainConverter')
    ),
    'MainConverter' => function ($container) {
        return $container->get('\Boatrace\Analytics\MainConverter');
    },
];
