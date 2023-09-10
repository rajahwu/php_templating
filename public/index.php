<?php 
require_once '../vendor/autoload.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);


$loader = new Twig\Loader\FilesystemLoader('../views');
$twig = new Twig\Environment($loader);


echo $twig->render('hello.twig', array(
    'name' => 'Rajah',
    'age' => 40,

    'users' => [
        ['name' => 'max', 'age' => 22, 'image_url' => 'https://images.unsplash.com/photo-1511367461989-f85a21fda167?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
        ['name' => 'john', 'age' => 65, 'image_url' => 'https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
        ['name' => 'paul', 'age' => 37, 'image_url' => 'https://images.unsplash.com/photo-1457449940276-e8deed18bfff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
    ]
));

