<?php
if (isset($_GET['code'])) {
    echo "<h2>✅ Du har blivit omdirigerad från Fortnox!</h2>";
    echo "<p><strong>Authorization code:</strong> " . htmlspecialchars($_GET['code']) . "</p>";
} else {
    echo "<h2>🚫 Ingen authorization code mottagen från Fortnox.</h2>";
}
?>
