<?php

class pagoController {
    public static function checkout() {
        require_once('vista/pago/public/checkout.php');
    }

    public static function crearCheckout() {
        require_once 'vista/pago/vendor/autoload.php';
        require_once 'vista/pago/secrets.php';
    
        $data = $_SESSION['checkout_data'];
        $personas = (int) $data['personas'];
        $precioPersona = (float) $data['precio_persona'];
    
        if ($personas <= 0 || $precioPersona <= 0) {
            http_response_code(400);
            die(json_encode(['error' => 'Datos inválidos']));
        }
    
        $montoSeguro = (($personas * $precioPersona) * 50) / 100;
        $montoEnCentavos = intval($montoSeguro * 100);
    
        $stripe = new \Stripe\StripeClient($stripeSecretKey);
        $YOUR_DOMAIN = 'http://localhost/Proyecto_tours';
    
        $checkout_session = $stripe->checkout->sessions->create([
            'ui_mode' => 'embedded',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mxn',
                    'product_data' => [
                        'name' => 'Reservación de Paquete',
                    ],
                    'unit_amount' => $montoEnCentavos,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'return_url' => $YOUR_DOMAIN . '/index.php?a=return&session_id={CHECKOUT_SESSION_ID}',
        ]);
    
        header('Content-Type: application/json');
        echo json_encode(['clientSecret' => $checkout_session->client_secret]);
    }
    
    

    public static function return() {
        require_once('vista/pago/public/return.php');
    }

    public static function status() {
        require_once 'vista/pago/vendor/autoload.php';
        require_once 'vista/pago/secrets.php';
        header('Content-Type: application/json');

        $jsonStr = file_get_contents('php://input');
        $jsonObj = json_decode($jsonStr);

        $stripe = new \Stripe\StripeClient($stripeSecretKey);
        $session = $stripe->checkout->sessions->retrieve($jsonObj->session_id);

        echo json_encode([
            'status' => $session->status,
            'customer_email' => $session->customer_details->email,
        ]);
    }
}




?>