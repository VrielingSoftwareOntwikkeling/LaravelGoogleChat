<?php


use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;

class GoogleChatHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $record): void
    {
        var_dump($record);
    }
    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return;
    }
}
