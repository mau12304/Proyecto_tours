<?php
require_once(__DIR__ . '/../secrets.php');

if (!isset($_ENV['STRIPE_PUBLISHABLE_KEY'])) {
    die("Error: STRIPE_PUBLISHABLE_KEY is not set in the environment.");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pagar con Stripe</title>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    const stripe = Stripe("<?= $_ENV['STRIPE_PUBLISHABLE_KEY'] ?>");

    initialize();

    async function initialize() {
      const response = await fetch("index.php?a=crearCheckout", {
        method: "POST",
      });
      const { clientSecret } = await response.json();

      const sessionId = clientSecret.split('_secret')[0]; // Obtenemos el session_id

      const checkout = await stripe.initEmbeddedCheckout({
        fetchClientSecret: async () => clientSecret,
        onComplete: (event) => {
          if (event.status === 'complete') {
            // Redirigir manualmente al return.php con el session_id
            window.location.href = `index.php?a=return&session_id=${sessionId}`;
          }
        }
      });

      checkout.mount('#checkout');
    }
  </script>
</head>
<body>
  <div id="checkout"></div>
</body>
</html>
