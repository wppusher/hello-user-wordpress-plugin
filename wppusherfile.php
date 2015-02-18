<?php

return array(

    // Each string will be passed to the shell as a command.
    'commands' => array(
        'composer install',
    ),

    // Defaults to false and is not required.
    // If set to true, installing and update can take a long time
    // and may seem like it's 'hanging'.
    'async' => true,
    
    // Defaults to true, meaning that if one command fails,
    // the following commands won't be executed.
    'halt_on_fail' => false,
);
