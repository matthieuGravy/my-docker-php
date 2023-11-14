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
        function verre ($a, $b){
            return $a * $b;
        }
        switch ($formData->location) {
            case "Malaysia":
                $ringgit = 5.13;
                $ringgitResult = verre($glass , $ringgit);
                echo "Malaysia : " . $ringgitResult. "RM";
                break;
            case "United-arab-Emirates":
                $aed= 4;
                $aedResult = verre($glass,$aed );
                echo "United Arab Emirates : ". $aedResult . "AED";
                break;
            case "Singapore":
                $ds = 1.47;
                $dsResult = verre($glass , $ds);
                echo "Singapore : " . $dsResult. "SGD";
                break;
            case "Bahrain":
                $db = 0.41;
                $dbResult = verre($glass , $db);
                echo "Bahrain : " . $dbResult. "BHD";
                break;
            case "Indonesia":
                $IDR = 16817.64;
                $IDRResult = verre($glass , $IDR);
                echo "Bahrain : " . $IDRResult. "IDR";
                break;
            case "Qatar":
                $QAR = 3.96;
                $QARResult = verre($glass , $QAR);
                echo "Bahrain : " . $QARResult. "QAR";
                break;
        }

    }
    ?>
</body>
</html>