<?php

namespace App\Notifications;

use App\Models\Url;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Slack\BlockKit\Blocks\ContextBlock;
use Illuminate\Notifications\Slack\BlockKit\Blocks\SectionBlock;
use Illuminate\Notifications\Slack\SlackMessage;
use Illuminate\Support\Facades\Log;

class UrlIsDown extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Url $url)
    {
        Log::info('Sending Slack notification...', [$url->name]);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['slack'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage())
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    /**
     * Get the Slack representation of the notification.
     */
    public function toSlack(object $notifiable): SlackMessage
    {
        return (new SlackMessage())
            ->headerBlock($this->url->name . ' is down :x:')
            ->sectionBlock(function (SectionBlock $block) {
                $block->field("<{$this->url->url}|{$this->url->url}>")->markdown();
            })
            ->dividerBlock()
            ->contextBlock(function (ContextBlock $block) {
                $block->text('By: ' . config('env_vars.APP_NAME') . ', Env: ' . config('env_vars.APP_ENV'));
            });
    }
}
