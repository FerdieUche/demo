<?php
/**
 * Created by PhpStorm.
 * User: Ferdie
 * Date: 10/17/2018
 * Time: 10:55 AM
 */

use Unirest\Request\Body;

$data = array('txref' => 'rave-123456',
    'SECKEY' => 'FLWSECK-08d952eac4131600178c33976f0d4b09-X' //secret key from pay button generated on rave dashboard
);


// Make request to endpoint using unirest.
  $headers = array('Content-Type' => 'application/json');
  $body = Unirest\Request\Body::json($data);
  $url = "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify"; //url to staging server. please make sure to change when in production.

// Make `POST` request and handle response with unirest
  $response = Unirest\Request::post($url, $headers, $body);

//check the status is success
  if ($response->body->data->status === "success" && $response->body->data->chargecode === "00") {
      //confirm that the amount is the amount you wanted to charge
      if ($response->body->data->amount === 100) {
          echo("Give value");
      }
  }