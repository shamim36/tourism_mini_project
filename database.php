<?php

require __DIR__ . '/vendor/autoload.php'; // Include Composer autoload file

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Path to your service account JSON file
$serviceAccountPath = __DIR__ . '/path/to/your-firebase-service-account.json';

// Check if the service account file exists
if (!file_exists($serviceAccountPath)) {
    die('Service account file not found: ' . $serviceAccountPath);
}

// Initialize Firebase
$firebase = (new Factory)
    ->withServiceAccount($serviceAccountPath)
    ->withDatabaseUri('https://your-database-name.firebaseio.com') // Replace with your actual Firebase Realtime Database URL
    ->createDatabase();

// Access the Firebase Database
//$database = $firebase->createDatabase();

// Example: Writing data to Firebase
$newPost = $database
    ->getReference('posts')  // Create or reference a 'posts' node
    ->push([
        'title' => 'Hello World!',
        'body' => 'This is my first post from PHP!'
    ]);

echo 'Data successfully written to Firebase!';