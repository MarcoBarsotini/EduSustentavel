<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('sendDiscordWebhook')) {
    function sendDiscordWebhook(string $title, array $fields = [], string $canal = 'default'): void {
        $urls = [
            //'default' => env('DISCORD_WEBHOOK_URL'),
            'usuarios' => env('DISCORD_WEBHOOK_USUARIOS'),
            //'pagamentos' => env('DISCORD_WEBHOOK_PAGAMENTOS'),
        ];

        $webhookUrl = $urls[$canal] ?? $urls['default'];

        $embed = [
            'title' => $title,
            'color' => 0x00b0f4,
            'fields' => [],
            'timestamp' => now()->toIso8601String(),
        ];

        foreach ($fields as $name => $value) {
            $embed['fields'][] = [
                'name' => $name,
                'value' => $value,
                'inline' => false,
            ];
        }

        Http::post($webhookUrl, [
            'embeds' => [$embed],
        ]);
    }
}

?>