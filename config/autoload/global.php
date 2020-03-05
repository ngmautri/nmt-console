<?php
use App\Command\TestCommand;
use App\Command\TestCommandFactory;

return [
    'factories' => [
        TestCommand::class => TestCommandFactory::class
    ]
];
