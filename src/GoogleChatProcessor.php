<?php

namespace VrielingSoftwareOntwikkeling\LaravelGoogleChat;

class GoogleChatProcessor
{
    public function __invoke(array $record)
    {
        $record['extra'] = [
            'test' => '123'
        ];

        return $record;
    }
}
