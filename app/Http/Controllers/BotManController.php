<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use App\Models\Sale;
use App\Models\Lease;
use Illuminate\Support\Facades\Storage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use Illuminate\Support\Facades\Cache;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Attachments\ButtonTemplate;

class BotManController extends Controller
{
    public function handle(Request $request)
    {


// Reply to the user with the generated text

        $botman = app('botman');
       // Timeout in seconds
       $responses = [

        'who created you' => "I'm sorry, I'm just a bot. But I was created by humans.",
        'who are you' => "I'm your Real Estate bot.",
        'property' => 'Are you looking to buy, sell, or lease a property?',
        'buy' => 'Great! We have a variety of properties available for purchase. Would you like to see our listings?',
        'sell' => 'Are you looking to sell a property? Our team can assist you with that. Feel free to ask any questions you have.',


    ];

    // Handle predefined responses
    foreach ($responses as $keyword => $response) {
        $botman->hears($keyword, function (BotMan $bot) use ($response) {
            $bot->typesAndWaits(1);
            $bot->reply($response);
        });
    }
    //  dictionary
    $dictionary = ['frustrated','what do you sell','no','insurance','coverage','policy','renovation','remodeling', 'improvement','valuation','appraisal','worth', 'roi','price', 'annoyed', 'irritated', 'hello', 'thanks', 'contact', 'thank you so much', 'what can you do', 'hey', 'help', 'what does your company do', 'company', 'interested in property', 'goodbye', 'yes', 'property', 'sell', 'buy', 'take tour', 'who are you', 'some', 'other', 'words', 'hi', 'sale', 'lease', 'thank you', 'who created you', 'no', 'view sale', 'view lease', 'neighborhood', 'location', 'area', 'features', 'amenities', 'specs', 'budget', 'price range', 'afford', 'schedule', 'appointment', 'viewing', 'loan', 'mortgage', 'financing', 'legal', 'documents', 'contracts', 'investment', 'ROI', 'return on investment', 'market', 'trends', 'forecast', 'valuation', 'appraisal', 'worth', 'renovation', 'remodeling', 'improvement', 'insurance', 'coverage', 'policy', 'property management', 'rental management', 'maintenance', 'real estate agent', 'broker', 'realtor', 'property tax', 'tax assessment', 'tax deduction', 'moving', 'relocation', 'moving company', 'real estate event', 'seminar', 'workshop', 'foreclosure', 'short sale', 'distressed property', 'rental agreement', 'lease terms', 'tenant', 'property inspection', 'home inspection', 'survey'];

    $botman->hears('price', function (BotMan $bot) {
        $bot->typesAndWaits(1);

        $sales = Sale::all();

        $leases = Lease::all();

        //  properties available for sale or lease
        if ($sales->isEmpty() && $leases->isEmpty()) {
            $bot->reply('I\'m sorry, but we currently don\'t have any properties available for sale or lease.');
            return;
        }


        $message = 'The prices of properties vary depending on factors such as location, size, and amenities. Here are the prices for some of our properties:<br>';

        // Prices for sale properties
        if (!$sales->isEmpty()) {
            $message .= '<br>Properties for sale:<br>';
            $index = 1;
            foreach ($sales as $sale) {
                $message .= $index . ". " . $sale->name . ': ₱' . $sale->price . "<br>";
                $index++;
            }
        }

        // Prices for lease properties
        if (!$leases->isEmpty()) {
            $message .= '<br>Properties for lease:<br>';
            $index = 1;
            foreach ($leases as $lease) {
                $message .= $index . ". " . $lease->name . ': ₱' . $lease->price . "<br>";
                $index++;
            }
        }

        $bot->reply($message);
    });
    $botman->hears('location', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        // Retrieve properties available for sale
        $sales = Sale::all();
        // Retrieve properties available for lease
        $leases = Lease::all();

        // Check if there are any properties available for sale or lease
        if ($sales->isEmpty() && $leases->isEmpty()) {
            $bot->reply('I\'m sorry, but we currently don\'t have any properties  in that location.');
            return;
        }

        // Construct a message with price information
        $message = ' Here are the location for some of our properties:<br>';

        // Prices for sale properties
        if (!$sales->isEmpty()) {
            $message .= '<br>Properties and its Location:<br>';
            $index = 1;
            foreach ($sales as $sale) {
                $message .= $index . ". " . $sale->name . ': ' . $sale->location . "<br>";
                $index++;
            }
        }

        // Prices for lease properties
        if (!$leases->isEmpty()) {
            $message .= '<br>Properties and its Location:<br>';
            $index = 1;
            foreach ($leases as $lease) {
                $message .= $index . ". " . $lease->name . ': ' . $lease->location . "<br>";
                $index++;
            }
        }

        $bot->reply($message);
    });

    $botman->hears(['neighborhood'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Type location');
    });

    $botman->hears('Features', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        // Retrieve properties available for sale
        $sales = Sale::all();
        // Retrieve properties available for lease
        $leases = Lease::all();

        // Check if there are any properties available for sale or lease
        if ($sales->isEmpty() && $leases->isEmpty()) {
            $bot->reply('I\'m sorry, but we currently don\'t have that feature  in that location.');
            return;
        }

        // Construct a message with price information
        $message = ' Here are the features:<br>';

        // Prices for sale properties
        if (!$sales->isEmpty()) {
            $message .= '<br>Properties and its Features:<br>';
            $index = 1;
            foreach ($sales as $sale) {
                $message .= $index . ". " . $sale->name . ': ' . $sale->amenities . "<br>";
                $index++;
            }
        }

        // Prices for lease properties
        if (!$leases->isEmpty()) {
            $message .= '<br>Properties and its Features:<br>';
            $index = 1;
            foreach ($leases as $lease) {
                $message .= $index . ". " . $lease->name . ': ' . $lease->amenities . "<br>";
                $index++;
            }
        }

        $bot->reply($message);
    });


    $botman->hears('budget', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        // Retrieve properties available for sale
        $sales = Sale::all();
        // Retrieve properties available for lease
        $leases = Lease::all();

        // Check if there are any properties available for sale or lease
        if ($sales->isEmpty() && $leases->isEmpty()) {
            $bot->reply('I\'m sorry im still dont have the knowledge for that.');
            return;
        }

        // Construct a message with price information
        $message = ' Here are the prices:<br>';

        // Prices for sale properties
        if (!$sales->isEmpty()) {
            $message .= '<br>Price:<br>';
            $index = 1;
            foreach ($sales as $sale) {
                $message .= $index . ". " . $sale->name . ': ₱' . $sale->price . "<br>";
                $index++;
            }
        }

        // Prices for lease properties
        if (!$leases->isEmpty()) {
            $message .= '<br>Price:<br>';
            $index = 1;
            foreach ($leases as $lease) {
                $message .= $index . ". " . $lease->name . ': ₱' . $lease->price . "<br>";
                $index++;
            }
        }

        $bot->reply($message);
    });


    $botman->hears(['schedule', 'appointment', 'viewing'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $appointmentLink = route('appointment');
        $bot->reply('Would you like to schedule an appointment or viewing for a property? If yes, please <a href="' . $appointmentLink . '">click here</a>.');


    });

    $botman->hears(['loan', 'mortgage', 'financing'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Apologies, but at this time, we dont have a loan service available');
    });

    $botman->hears(['legal', 'documents', 'contracts'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Please proceed to our office to obtain the necessary documents for your real estate transaction. If you have any further questions, feel free to ask.');

    });

    $botman->hears(['investment', 'ROI', 'return on investment'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Are you interested in real estate investment opportunities or calculating potential return on investment? If you are considering investing, we can also discuss various asset classes like stocks, bonds, or mutual funds.');
        $bot->reply('Additionally, if you are looking for personalized investment advice, we have financial experts available to assist you.');
        $bot->reply('Understanding your investment goals and risk tolerance is crucial. Feel free to share more about what you  are looking to achieve, and we can tailor our recommendations accordingly.');
    });


    $botman->hears(['market'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Would you like to know about current market trends or forecasts in the real estate industry? type trends or forecast');
    });
    $botman->hears('trends', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('The real estate market is showing an upward trend in urban areas
        Rental prices have increased by 10% in the past quarter.');
    });
    $botman->hears('forecast', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Experts predict a surge in demand for commercial properties in the coming months
        The housing market is expected to stabilize after recent fluctuations.');
    });
    $botman->hears(['valuation', 'appraisal', 'worth'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Are you seeking a property valuation or appraisal to assess its current market worth?');
        $bot->reply('Valuation and appraisal are essential steps in understanding the value of your property, whether for buying, selling, or refinancing purposes.');
        $bot->reply('Our valuation experts utilize various methods, such as comparative market analysis and income approach, to provide accurate assessments tailored to your specific needs.');
        $bot->reply('If you are considering property investment or need guidance on determining the worth of your assets, we are here to help.');
    });


    $botman->hears(['renovation', 'remodeling', 'improvement'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Are you contemplating renovation, remodeling, or improvement endeavors to enhance your property?');
        $bot->reply('Renovation and remodeling projects can significantly impact the value and functionality of your property, whether it is for residential or commercial purposes.');
        $bot->reply('Our team of experts can assist you with everything from initial design concepts to project management and implementation.');
        $bot->reply('Whether you are looking to increase resale value, improve energy efficiency, or simply enhance aesthetics, we are here to provide guidance and support every step of the way.');
    });

    $botman->hears(['insurance', 'coverage', 'policy'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Do you need information about property insurance coverage or policies? If you are interested in real estate policies specifically, we can cover aspects such as property insurance, liability coverage, loss of rental income, legal expenses, and additional coverages. Just let me know if you have any questions!');
    });

    $botman->hears(['property management', 'rental management', 'maintenance'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Are you interested in property management services or rental property maintenance?', 'Perhaps you seek assistance with property management or rental maintenance?', 'Are you exploring options for property management or rental maintenance services?'][array_rand(['Are you interested in property management services or rental property maintenance?', 'Perhaps you seek assistance with property management or rental maintenance?', 'Are you exploring options for property management or rental maintenance services?'])]);
    });

    $botman->hears(['real estate agent', 'broker', 'realtor'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Do you need assistance from a real estate agent, broker, or realtor?', 'In search of guidance from a real estate agent, broker, or realtor?', 'Are you seeking support from a real estate professional such as an agent, broker, or realtor?'][array_rand(['Do you need assistance from a real estate agent, broker, or realtor?', 'In search of guidance from a real estate agent, broker, or realtor?', 'Are you seeking support from a real estate professional such as an agent, broker, or realtor?'])]);
    });

    $botman->hears(['property tax', 'tax assessment', 'tax deduction'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Do you have questions about property tax, tax assessments, or tax deductions?', 'Exploring inquiries regarding property tax, tax assessments, or tax deductions?', 'Curious about property tax matters, assessments, or deductions?'][array_rand(['Do you have questions about property tax, tax assessments, or tax deductions?', 'Exploring inquiries regarding property tax, tax assessments, or tax deductions?', 'Curious about property tax matters, assessments, or deductions?'])]);
    });

    $botman->hears(['moving', 'relocation', 'moving company'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Are you planning a move or relocation and need assistance from a moving company?', 'Considering a move or relocation and require support from a moving company?', 'In need of assistance from a moving company for your upcoming move or relocation?'][array_rand(['Are you planning a move or relocation and need assistance from a moving company?', 'Considering a move or relocation and require support from a moving company?', 'In need of assistance from a moving company for your upcoming move or relocation?'])]);
    });

    $botman->hears(['real estate event', 'seminar', 'workshop'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Yes we offer a real estate event, seminar', 'Interested in participating in a real estate event, seminar, or workshop?', 'Considering attendance at a real estate event, seminar, or workshop?'][array_rand(['Would you like to attend a real estate event, seminar, or workshop?', 'Interested in participating in a real estate event, seminar, or workshop?', 'Considering attendance at a real estate event, seminar, or workshop?'])]);
    });

    $botman->hears(['foreclosure', 'short sale', 'distressed property'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Are you interested in foreclosure properties, short sales, or distressed property deals?', 'Exploring opportunities in foreclosure properties, short sales, or distressed property deals?', 'Considering investments in foreclosure properties, short sales, or distressed property deals?'][array_rand(['Are you interested in foreclosure properties, short sales, or distressed property deals?', 'Exploring opportunities in foreclosure properties, short sales, or distressed property deals?', 'Considering investments in foreclosure properties, short sales, or distressed property deals?'])]);
    });

    $botman->hears(['rental agreement', 'lease terms', 'tenant'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Do you have questions about rental agreements, lease terms, or being a tenant?', 'Inquiring about rental agreements, lease terms, or tenant-related matters?', 'Seeking information on rental agreements, lease terms, or tenant responsibilities?'][array_rand(['Do you have questions about rental agreements, lease terms, or being a tenant?', 'Inquiring about rental agreements, lease terms, or tenant-related matters?', 'Seeking information on rental agreements, lease terms, or tenant responsibilities?'])]);
    });

    $botman->hears(['property inspection', 'home inspection', 'survey'], function (BotMan $bot) use ($dictionary) {
        $bot->typesAndWaits(1);
        $bot->reply(['Are you in need of a property inspection, home inspection, or survey?', 'Requiring a property inspection, home inspection, or survey?', 'Interested in arranging a property inspection, home inspection, or survey?'][array_rand(['Are you in need of a property inspection, home inspection, or survey?', 'Requiring a property inspection, home inspection, or survey?', 'Interested in arranging a property inspection, home inspection, or survey?'])]);
    });

    $botman->hears('contact', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('You can reach out to us at decastrojustin24@gmail.com or call us at 09456754591.');
    });
    $botman->hears(['frustrated', 'annoyed', 'irritated'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('I\'m sorry to hear that. How can I assist you to make things better?');
    });
    $botman->hears(['no'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('No problem! If you change your mind or have any questions, feel free to ask.');
    });

    $botman->hears(['hello', 'hey', 'hi'], function (BotMan $bot) {
        $bot->typesAndWaits(1);

        $question = Question::create('Hello! How can I assist you today?')
            ->addButton(Button::create('Take Tour')->value('take tour'));

        $bot->reply($question);
    });

    $botman->hears(['thanks', 'thank you so much'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('You\'re welcome! If you have any more questions, feel free to ask.');
    });

    $botman->hears('what can you do', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('I can help you with buying, selling, or leasing properties. Feel free to ask me anything related to real estate!');
    });

    $botman->hears('goodbye', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Goodbye! Have a great day.');
    });
    $botman->hears('what do you sell', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('We offer a variety of properties including residential homes, apartments, commercial buildings, and land.');
    });


    // Respond to inquiries about the company
    $botman->hears('company', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Our company is dedicated to providing top-notch real estate services. If you have any specific questions, feel free to ask.');
    });
    $botman->hears('what does your company do', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Our company is dedicated to providing top-notch real estate services. If you have any specific questions, feel free to ask.');
    });


    // Respond to expressions of interest in specific properties
    $botman->hears('interested in property', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Great! Which property are you interested in?');
    });

    // Respond to requests for assistance
    $botman->hears('help', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Sure, I\'m here to help. What do you need assistance with?');
    });

    // Check if the message is in the dictionary before the fallback
    $botman->hears('.*', function (BotMan $bot) use ($dictionary) {
        $message = strtolower($bot->getMessage()->getText());
        if (!in_array($message, $dictionary)) {
            $bot->typesAndWaits(1);
            $bot->reply("'$message' is not yet in my dictionary.");
        }
    });

    $botman->hears('.*', function (BotMan $bot) {
        // Retrieve conversation messages from cache or initialize an empty array
        $conversationId = $bot->getMessage()->getConversationIdentifier();
        $messages = Cache::get('conversation_' . $conversationId, []);

        // Check if this is the start of a new conversation
        if (empty($messages) && $bot->getMessage()->getText() === 'take tour') {
            // Clear the conversation cache
            Cache::forget('conversation_' . $conversationId);
        }

        // Add the current message to the conversation transcript
        $messages[] = $bot->getMessage()->getText();

        // Update the cached conversation messages
        Cache::put('conversation_' . $conversationId, $messages, now()->addSeconds(30)); // Cache for 600 seconds (10 minutes)
        // Cache for 10 minutes
    });

    $botman->hears('Thank You', function (BotMan $bot) {
        // Reply to the user
        $bot->reply('You\'re welcome! If you have any more questions or need assistance, feel free to ask. (type "take tour" to get started)');
        $bot->typesAndWaits(1); // Simulate typing for 1 second

        // Retrieve conversation messages from cache
        $conversationId = $bot->getMessage()->getConversationIdentifier();
        $messages = Cache::get('conversation_' . $conversationId, []);

        // Serialize the messages into a string
        $transcript = implode("\n", $messages);

        // Generate a unique filename for the conversation transcript
        $fileName = 'conversation_' . $conversationId . '_summary.txt';

        // Save the transcript to a file
        Storage::disk('public')->put($fileName, $transcript);

        // Get the URL of the file
        $fileUrl = Storage::url($fileName);

        // Format the URL as a clickable link
        $linkText = '<a href="' . $fileUrl . '">Download Conversation Transcript</a>';

        // Send the link as a response
        $bot->reply('Here is the conversation transcript:');
        $bot->reply($linkText);
    });

    $botman->hears('take tour', function (BotMan $bot) {
        $bot->typesAndWaits(1);

        $question = Question::create('What are you interested in?')
            ->addButton(Button::create('Sale')->value('sale'))
            ->addButton(Button::create('Lease')->value('lease'));

        $bot->reply($question);
    });
        $botman->hears('sale', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            // Logic to retrieve properties available for sale
            $sales = Sale::all();
            $index = 1;

            // Construct a message with links for each sale item
            $message = "This is the available listings for sale:<br>";
            foreach ($sales as $sale) {
                // Assuming $sale->name contains the name of the item
                // Assuming $sale->id contains the ID of the item
                $message .= "$index. <a href='" . route('viewsale', ['id' => $sale->id]) . "'>" . $sale->name . "</a><br>";
                $index++;
            }

            // Output the constructed message
            $bot->reply($message);
        });
        $botman->hears('yes', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            // Logic to retrieve properties available for purchase
            $sales = Sale::all();
            $index = 1;

            // Construct a message with links for each sale item
            $message = "Here are the available listings for purchase:<br>";
            foreach ($sales as $sale) {
                // Assuming $sale->name contains the name of the item
                // Assuming $sale->id contains the ID of the item
                $message .= "$index. <a href='" . route('viewsale', ['id' => $sale->id]) . "'>" . $sale->name . "</a><br>";
                $index++;
            }

            // Output the constructed message
            $bot->reply($message);
        });


        $botman->hears('lease', function (BotMan $bot) {
            $bot->typesAndWaits(1);
            // Logic to retrieve properties available for sale
            $leases = Lease::all();
            $index = 1;

            // Construct a message with links for each sale item
            $message = "This is the available listings for lease:<br>";
            foreach ($leases as $lease) {
                // Assuming $sale->name contains the name of the item
                // Assuming $sale->id contains the ID of the item
                $message .= "$index. <a href='" . route('viewlease', ['id' => $lease->id]) . "'>" . $lease->name . "</a><br>";
                $index++;

            }

            // Output the constructed message
            $bot->reply($message);
        });
        $botman->fallback(function($bot) {
            $userMessage = $bot->getMessage()->getText();
            $usedWord = $this->getUsedWord($userMessage);
            if ($this->containsNegativeWords($userMessage)) {
                $bot->typesAndWaits(1);
                $bot->reply('I\'m sorry, did you mean "' . $usedWord . '"?  If there\'s anything specific that\'s bothering you or that you\'d like assistance with, please let me know. I\'m here to help!');
            } elseif ($this->containsPositiveWords($userMessage)) {
                $bot->typesAndWaits(1);
                $bot->reply('That\'s great to hear! If there\'s anything specific you want to talk about or need assistance with, feel free to let me know.');
            } else {
                $bot->typesAndWaits(1);
                $bot->reply('I\'m sorry, I didn\'t understand "' . $usedWord . '".');
            }
        });
        $botman->listen();




    }

    private function getUsedWord($message)
{
    $words = explode(' ', $message);
    // Return the first word used by the user
    return $words[0];
}
    private function containsNegativeWords($message)
    {
        $negativeWords = [
            'hate', 'bad','disrespect','tang ina mo','puta','panget', 'angry', 'frustrated', 'dislike', 'upset', 'fuck', 'sad', 'depressed', 'unhappy', 'miserable',
            'gloomy', 'sorrowful', 'despair', 'desperate', 'hopeless', 'dejected', 'grief', 'melancholy', 'regret',
            'disappointed', 'distressed', 'anguish', 'agony', 'resentful', 'annoyed', 'irritated', 'furious', 'enraged',
            'outraged', 'disgusted', 'repulsed', 'offended', 'insulted', 'humiliated', 'ashamed', 'guilty', 'embarrassed',
            'humiliated', 'ashamed', 'guilty', 'embarrassed', 'insecure', 'anxious', 'nervous', 'worried', 'fearful',
            'terrified', 'panicked', 'alarmed', 'scared', 'frightened', 'dismayed', 'shocked', 'traumatized', 'stressed'
        ];
        // Add more negative words as needed
        foreach ($negativeWords as $word) {
            if (stripos($message, $word) !== false) {
                return true;
            }
        }
        return false;
    }
    private function containsPositiveWords($message)
{
    $positiveWords = ['happy', 'joyful', 'excited', 'satisfied', 'love', 'fantastic', 'amazing', 'awesome', 'wonderful', 'excellent', 'great', 'superb', 'delighted', 'pleased', 'content', 'grateful', 'thrilled', 'ecstatic', 'overjoyed', 'blissful', 'admire', 'appreciate', 'commend', 'applaud', 'praise', 'stellar', 'fabulous', 'terrific', 'glad', 'eager', 'enthusiastic', 'radiant', 'smiling', 'vibrant', 'cheerful', 'upbeat', 'positive', 'inspired', 'motivated', 'energetic', 'dynamic', 'passionate', 'charming', 'kind', 'friendly', 'warm', 'welcoming'];
 // Add more positive words as needed
    foreach ($positiveWords as $word) {
        if (stripos($message, $word) !== false) {
            return true;
        }
    }
    return false;
}

}
