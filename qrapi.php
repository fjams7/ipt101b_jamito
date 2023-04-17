<title> QR Code </title>
<?php
$url = $_POST["link"];
$apiUrl = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=".urlencode($url);
$response = file_get_contents($apiUrl);
    echo "<html><head><style>body {background-color: #FFFFFF;} .qr-code-container {display: flex; justify-content: center; align-items: center; height: 100vh;}</style></head><body>";
    echo "<div class='qr-code-container'><img src='data:image/png;base64,".base64_encode($response)."'/></div>";
    echo "</body></html>";
?>
