<?php

require __DIR__ . '/Post.php';
require __DIR__ . '/Mutator/PostMutator.php';
require __DIR__ . '/Mutator/StringMutator.php';

use Mutator\PostMutator;

$post = new Post('Belajar OOP', 'Saya Sedang Belajar OOP PHP');
$mutator = new PostMutator($post);
echo $mutator->getBoldTitle();

// require __DIR__ . '/RequestInterface.php';
// require __DIR__ . '/Http/Request.php';
// require __DIR__ . '/Api/Request.php';

// use Http\Request as HttpRequest;
// use Api\Request as ApiRequest;

// $request = new HttpRequest();
// $request->handle();
// echo PHP_EOL;

// $apiRequest = new ApiRequest();
// $apiRequest->handle();
// echo PHP_EOL;
