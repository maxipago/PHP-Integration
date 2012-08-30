<?php
include_once "maxipago_payment.php";
$credentials = array("merchantId" => "mid", "merchantKey" => "secret-key");
$data = array(
  "debug" => "1", // Turns debug ON (1) and OFF (0) //
  "processorID" => "1", // REQUIRED - Use '1' for testing. Contact our team for production values //
  "referenceNum" => "TestTransaction123", // REQUIRED - Merchant internal order number //
  "chargeTotal" => "0.01", // REQUIRED - Transaction amount in US format //
  "numberOfInstallments" => "", // Optional - Number of installments ("parcelas") //
  "chargeInterest" => "", // Optional -  Charge interest flag (Y/N) ("com" ou "sem" juros) //
  "currencyCode" => "", // Optional - Valid only for ChasePaymentech multi-currecy setup. Please see full documentation for more info//
  "token" => "AB6TML7MMW=", // REQUIRED - Credit card token replied by maxiPago! //
  "customerId" => "11223", // REQUIRED -  Customer ID created by maxiPago! //
  "authentication" => "", // Optional - Valid only for Cielo. Please see full documentation for more info //
  "ipAddress" => "123.123.123.123", // Optional //
  "bname" => "Fulano de Tal", // RECOMMENDED - Customer name //
  "baddress" => "Av. República do Chile, 230", // Optional - Customer address //
  "baddress2" => "16 Andar", // Optional - Customer address //
  "bcity" => "Rio de Janeiro", // Optional - Customer city //
  "bstate" => "RJ", // Optional - Customer state with 2 characters //
  "bpostalcode" => "20031-170", // Optional - Customer zip code //
  "bcountry" => "BR", // Optional - Customer country code per ISO 3166-2 //
  "bphone" => "2140099400", // Optional - Customer phone number //
  "bemail" => "fulanodetal@email.com", // Optional - Customer email address //
  "sname" => "Ciclano de Tal", // Optional - Shipping name //
  "saddress" => "Av. Prestes Maia, 737", // Optional - Shipping address //
  "saddress2" => "20 Andar", // Optional - Shipping address //
  "scity" => "São Paulo", // Optional - Shipping city //
  "sstate" => "SP", // Optional - Shipping stats with 2 characters //
  "spostalcode" => "01031-001", // Optional - Shipping zip code //
  "scountry" => "BR", // Optional - Shipping country code per ISO 3166-2 //
  "sphone" => "1121737900", // Optional - Shipping phone number //
  "semail" => "ciclanodetal@email.com", // Optional - Shipping email address //
  "comments" => "Pedido de teste.", // Optional - Additional comments // 
);
$transaction = maxipago_payment("token-sale", $credentials, $data, "TEST");
print_r($transaction);
?>