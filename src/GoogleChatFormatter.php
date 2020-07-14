<?php

namespace VrielingSoftwareOntwikkeling\LaravelGoogleChat;


use Monolog\Formatter\NormalizerFormatter;

class GoogleChatFormatter extends NormalizerFormatter
{
    const LOG = 'log';
    const STORE = 'store';
    const CHANGE = 'change';
    const DELETE = 'delete';
    /**
     * result
     */
    const SUCCESS = 'success';
    const NEUTRAL = 'neutral';
    const FAILURE = 'failure';

    public function __construct()
    {
        parent::__construct();
    }

    public function format(array $record)
    {
        $record = parent::format($record);

        return $this->getDocument($record);
    }

    /**
     * Convert a log message into an MariaDB Log entity
     * @param array $record
     * @return array
     */
    protected function getDocument(array $record)
    {
        $fills = $record['extra'];
        $fills['level'] = str()->lower($record['level_name']);
        $fills['description'] = $record['message'];

        return $fills;
    }
}
