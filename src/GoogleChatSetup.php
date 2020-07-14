<?php

namespace VrielingSoftwareOntwikkeling\LaravelGoogleChat;

use Monolog\Logger;

class GoogleChatSetup
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('custom');
        $logger->pushHandler(new GoogleChatHandler());
        return $logger;
    }
}
