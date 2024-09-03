<?php

// app/Conversations/TourConversation.php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class TourConversation extends Conversation
{
    public function run()
    {
        $this->say('Sure! Let me guide you through our website. (Type "sale" or "lease")');
    }

    public function askForAction()
    {
        $this->ask('Do you want to continue?', function($answer) {
            if ($answer->getText() === 'yes') {
                $this->run();
            } else {
                $this->say('Okay, feel free to reach out if you have any questions.');
            }
        });
    }
}
?>
