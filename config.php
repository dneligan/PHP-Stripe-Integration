<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "pk_test_461Mu1lAXIj6gfTL68x7jRQb",
  "publishable_key" => "sk_test_N7EATYzj8zZqhaU11iNWsimC"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>