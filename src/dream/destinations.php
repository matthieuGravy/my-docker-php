<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$glass= 2;

global$glass;

class formData {
    public $location;

    public function __construct($location) {
        $this->location = $location;
    }
}
?>
<h1>Destination</h1>
<p>Value of glass <em><?php echo $glass ?></em>€</p>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="location">Choose a location:</label>
    <select name="location" id="location">
        <option value="">--Please choose an option--</option>
        <option value="Malaysia">Malaysia</option>
        <option value="United-arab-Emirates">United Arab Emirates</option>
        <option value="Singapore">Singapore</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Qatar">Qatar</option>
    </select>
    <button type="submit">Send</button>


</form>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = new formData( $_POST["location"]);

    switch ($formData->location) {
        case "Malaysia":

            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            // Continuing if we got a result
            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $MYR_price = round(($base_price * $response->conversion_rates->MYR), 2);


                        echo  "In Malaysia the price is ". $MYR_price." MYR";
                    }

                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }

            break;
        case "United-arab-Emirates":

            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            // Continuing if we got a result
            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $AED_price = round(($base_price * $response->conversion_rates->AED), 2);


                        echo  "In United Arab Emirates the price is ". $AED_price." AED";
                    }

                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }

            break;
        case "Singapore":
            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            // Continuing if we got a result
            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $SGD_price = round(($base_price * $response->conversion_rates->SGD), 2);


                        echo  "In Singapore the price is ". $SGD_price." SGD";
                    }

                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }
            break;
        case "Bahrain":

            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $BHD_price = round(($base_price * $response->conversion_rates->BHD), 2);


                        echo  "In Bahrain the price is ". $BHD_price." BHD";
                    }

                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }
            break;
        case "Indonesia":
            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $IDR_price = round(($base_price * $response->conversion_rates->IDR), 2);


                        echo  "In Indonesia the price is ". $IDR_price." IDR";
                    }

                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }

            break;
        case "Qatar":
            $req_url = 'https://v6.exchangerate-api.com/v6/67694881dbe44eedf7fec1eb/latest/EUR';
            $response_json = file_get_contents($req_url);

            if (false !== $response_json) {

                // Try/catch for json_decode operation
                try {

                    // Decoding
                    $response = json_decode($response_json);

                    // Check for success
                    if ('success' === $response->result) {
                        // YOUR APPLICATION CODE HERE, e.g.
                        $base_price = $glass; // Your price in USD_
                        $QAR_price = round(($base_price * $response->conversion_rates->QAR), 2);


                        echo  "In Qatar the price is ". $QAR_price." QAR";
                    }
                } catch (Exception $e) {
                    // Handle JSON parse error...
                }
            }
            break;
    }

}
?>

<h2>Change with API</h2>
<div>

</div>
</body>
</html>