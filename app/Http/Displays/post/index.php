<?php

namespace App\Http\Displays;

require __DIR__.'/../../../../bootstrap/app.php';

use App\Http\Controllers\PostController;


$post = new PostController();

$post->index();


