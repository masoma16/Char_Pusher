<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "7bf4bac9f6b0fdd313e6", // Replace with 'key' from dashboard
    "b33a9a6aa4f5aad7c629", // Replace with 'secret' from dashboard
    "1760134", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
    $pusher->trigger('price-btcusd', 'new-price', array(
        'value' => rand(0, 5)
    ));
    sleep(1);
}