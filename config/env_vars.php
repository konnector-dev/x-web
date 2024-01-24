<?php

return [
    'APP_NAME' => env('APP_NAME', 'watcher!'),
    'APP_ENV' => env('APP_ENV', 'production'),

    'GITHUB_CLIENT_ID' => env('GITHUB_CLIENT_ID', 'helo.github.com'),
    'GITHUB_CLIENT_SECRET' => env('GITHUB_CLIENT_SECRET', 'github_client_secret_placeholder'),
    'GITHUB_CALLBACK' => env('GITHUB_CALLBACK', '/auth/github/callback'),

    'SENTRY_LARAVEL_DSN' => env('SENTRY_LARAVEL_DSN', 'https://dsn@oi.ingest.sentry.io/999'),

    'SLACK_BOT_USER_OAUTH_TOKEN' => env('SLACK_BOT_USER_OAUTH_TOKEN', 'xoxb-1234567890-123456789012'),
    'SLACK_BOT_USER_DEFAULT_CHANNEL' => env('SLACK_BOT_USER_DEFAULT_CHANNEL', '#watcher'),
];
