<?php


use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use SjorsO\Gobble\Facades\Gobble;

class GoogleChatHandler extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG)
    {
        parent::__construct($level);
    }

    protected function write(array $record): void
    {
        Gobble::post(env('LOG_GOOGLE_WEBHOOK_URL'), [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($record),
        ]);
    }
    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return;
    }
}
