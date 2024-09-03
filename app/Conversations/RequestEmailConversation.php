<?php

namespace App\Conversations;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Illuminate\Support\Facades\Log;

class RequestEmailConversation extends Conversation
{
    public function askForEmail()
    {
        $this->ask('To send you the conversation transcript, could you please provide your email address?', function (Answer $answer) {
            $email = $answer->getText();

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->say('Please provide a valid email address.');
                $this->askForEmail(); // Repeat the question
                return;
            }

            // Send transcript via email
            $messages = $this->bot->getMessages();
            $transcript = $this->formatTranscript($messages);
            $this->sendTranscriptToEmail($email, $transcript);

            // Send acknowledgment message
            $this->say("The conversation transcript has been sent to $email.");
        });
    }

    public function run()
    {
        $this->askForEmail();
    }

    private function formatTranscript($messages)
    {
        $transcript = '';
        foreach ($messages as $message) {
            $transcript .= $message->getText() . "\n";
        }
        return $transcript;
    }

    private function sendTranscriptToEmail($email, $transcript)
    {
        $attachment = new File($transcript, 'conversation_transcript.txt');

        $message = OutgoingMessage::create()
            ->withAttachment($attachment);

        $this->bot->say($message, $email);
        Log::info('Attempting to send transcript to email: ' . $email);
    }
}
