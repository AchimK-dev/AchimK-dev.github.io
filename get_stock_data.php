<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Finnhub API-Schlüssel
$api_key = csiaoe1r01qpalorrqtgcsiaoe1r01qpalorrqu0;

// Finnhub-Konfiguration einrichten
$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', $api_key);
$client = new Finnhub\Api\DefaultApi(new GuzzleHttp\Client(), $config);

// Symbol der Deutschen Telekom
$symbol = 'DTE.DE'; // Börsensymbol der Deutschen Telekom an der Frankfurter Börse

try {
    // Abrufen des aktuellen Aktienkurses
    $quote = $client->quote($symbol);
    $currentPrice = $quote->getC(); // Aktueller Preis
    $highPrice = $quote->getH();    // Tageshöchstpreis
    $lowPrice = $quote->getL();     // Tagestiefstpreis
    $openPrice = $quote->getO();    // Eröffnungspreis
    $previousClose = $quote->getPc(); // Schlusskurs des Vortages

    echo "Aktueller Preis der Deutschen Telekom (DTE.DE): €" . $currentPrice . "\n";
    echo "Tageshöchstpreis: €" . $highPrice . "\n";
    echo "Tagestiefstpreis: €" . $lowPrice . "\n";
    echo "Eröffnungspreis: €" . $openPrice . "\n";
    echo "Schlusskurs des Vortages: €" . $previousClose . "\n";
} catch (Exception $e) {
    echo 'Fehler bei der Abfrage: ', $e->getMessage(), PHP_EOL;
}
?>