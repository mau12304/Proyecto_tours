// This is your test secret API key.
const stripe = Stripe("pk_test_51RHp5y2fRHv4vPfbCI4rGtWPLEex26a8Z8eDZB2nx1Pgqqv8Ul4YHCjngL0iTR5a872ZdgHackuSAtbFkzTiD0PH00GPdWpM6Z");

initialize();

// Create a Checkout Session
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("checkout.php", {
      method: "POST",
    });
    const { clientSecret } = await response.json();
    return clientSecret;
  };

  const checkout = await stripe.initEmbeddedCheckout({
    fetchClientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}