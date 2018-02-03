<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "pk_test_2UZks67mel2s6DcisSwbPvhK",
  "publishable_key" => "sk_test_Q8KtcRgBcB7fnzqkA4tVEcIS"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>