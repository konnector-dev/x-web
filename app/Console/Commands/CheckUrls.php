<?php

namespace App\Console\Commands;

use App\Models\Url;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckUrls extends Command
{
    protected $signature = 'check:urls';

    protected $description = 'Check URLs for uptime and downtime.';

    public function handle(): void
    {
        $this->info('Checking URLs...');
        $urls = Url::where('status', 'active')->get();
        foreach ($urls as $url) {
            Log::info('Checking ' . $url->url);
            try {
                $headers = Http::get($url->url);
                $url->http_status_code = $headers->successful() ? Response::HTTP_OK : Response::HTTP_INTERNAL_SERVER_ERROR;
                $url->state = $headers->successful() ? Url::STATE_UP : Url::STATE_DOWN;
            } catch (Exception $e) {
                report($e);
                $url->http_status_code = Response::HTTP_INTERNAL_SERVER_ERROR;
                $url->state = Url::STATE_ERROR;
                Log::error("$url->http_status_code: $url->url");
            }
            $url->last_checked_at = now()->format('Y-m-d H:i:s');
            $url->save();
        }
    }
}
