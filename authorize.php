<?php
// Hämta nycklar från miljövariabler
$client_id = getenv("FORTNOX_CLIENT_ID");
$redirect_uri = "https://fortnox-integration.onrender.com/fortnox-callback.php";

// Kontrollera att klient-ID finns
if (!$client_id) {
    echo "🚫 FORTNOX_CLIENT_ID saknas. Kontrollera miljövariabler i Render.";
    exit;
}

// Bygg URL till Fortnox OAuth
$url = "https://apps.fortnox.se/oauth-v1/authorize?"
     . "client_id=" . urlencode($client_id)
     . "&redirect_uri=" . urlencode($redirect_uri)
     . "&scope=customer"
     . "&response_type=code";

// Skicka användaren till Fortnox
header("Location: $url");
exit;
?>
