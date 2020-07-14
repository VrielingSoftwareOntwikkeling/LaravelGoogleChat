<?php


use Monolog\Logger;

class GoogleChatSetup
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('custom');
        $logger->pushHandler(new LogHandler());
        $logger->pushProcessor(new LogProcessor());
        return $logger;
    }
}
