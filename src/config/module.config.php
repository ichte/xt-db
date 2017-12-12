<?php
return [
    'service_manager' => array(
        'factories' => array(
            \Zend\Db\Adapter\Adapter::class  => \Ichte\Db\AdapterServiceFactory::class
        ),
    ),
];