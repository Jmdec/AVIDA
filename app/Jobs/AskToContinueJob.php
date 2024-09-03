<?php
namespace App\Jobs;

use BotMan\BotMan\BotMan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class AskToContinueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $bot;

    /**
     * Create a new job instance.
     *
     * @param BotMan $bot
     */
    public function __construct(BotMan $bot)
    {
        $this->bot = $bot;
    }

    /**
     * Execute the job.
     */
    public function handle($bot): void
    {
        $this->bot->reply(Question::create('Do you want to continue?')
            ->addButtons([
                Button::create('Yes')->value('yes'),
                Button::create('No')->value('no'),
            ]));

        $this->bot->listenForAnswer(function ($answer) {
            if ($answer->getValue() === 'yes') {
                $this->bot->reply('Great! Feel free to ask me anything.');
            } else {
                $this->bot->reply('Okay, feel free to reach out if you need assistance in the future.');
            }
        });
    }
}

