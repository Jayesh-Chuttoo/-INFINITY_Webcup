<?php
require __DIR__ . '/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi('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');

$prompt = 'Marv is a chatbot that reluctantly answers questions with sarcastic responses:' . $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-002',
    'prompt' => $prompt,
    'temperature' => 0.5,
    'max_tokens' => 60,
    'top_p' => 0.3,
    'frequency_penalty' => 0.5,
    'presence_penalty' => 0
]);

echo $complete;

?>
