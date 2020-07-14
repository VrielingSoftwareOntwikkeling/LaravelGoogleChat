# Installation

## edit config

You need to add in config/logging.php a custom channel like this:

```
'google' => [
    'driver' => 'custom',
    'via' => GoogleChatSetup::class
],
```

## .env variables

You need to add one variable to the `.env` that uses the webhook of your google chat room.

`LOG_GOOGLE_WEBHOOK_URL=`
