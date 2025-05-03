<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$stripeSecretKey = $_ENV['STRIPE_SECRET_KEY'];
$stripePublicKey = $_ENV['STRIPE_PUBLISHABLE_KEY'];
