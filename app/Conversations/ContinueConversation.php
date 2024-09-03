<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class ContinueConversation extends Conversation
{
    public function run()
    {
        $this->askToContinue();
    }

    public function askToContinue()
    {
        $this->ask('Do you want to continue?', function (Answer $answer) {
            // Handle user response here
            if ($answer->getText() === 'yes') {
                // If user wants to continue, do something
                // Example: $this->say('Great! What would you like to do next?');
            } else {
                // If user doesn't want to continue, end the conversation
                $this->say('Okay, feel free to reach out if you need assistance in the future.');
            }
        });
    }
}
