<?php
header('Content-Type: application/json');

// Beispiel-URL der API (hier muss die echte URL der Aktienkurs-API rein)
$api_url = 'https://api.example.com/stockprice/DB'; // Ersetze durch echte API-URL
$api_key = 'DEIN_API_KEY'; // Optional: Falls ein API-Schlüssel nötig ist

// API-Anfrage
$response = file_get_contents($api_url . "?apikey=" . $api_key);
$data = json_decode($response, true);

// Beispielhafte Datenstruktur anpassen
$aktueller_kurs = $data['currentPrice'] ?? 'Nicht verfügbar';
$kurs_verlauf = $data['historicalData'] ?? [];

// JSON-Antwort ausgeben
echo json_encode([
    'currentPrice' => $aktueller_kurs,
    'historicalData' => $kurs_verlauf
]);
=======
<?php
header('Content-Type: application/json');

// Beispiel-URL der API (hier muss die echte URL der Aktienkurs-API rein)
$api_url = 'https://api.example.com/stockprice/DB'; // Ersetze durch echte API-URL
$api_key = 'DEIN_API_KEY'; // Optional: Falls ein API-Schlüssel nötig ist

// API-Anfrage
$response = file_get_contents($api_url . "?apikey=" . $api_key);
$data = json_decode($response, true);

// Beispielhafte Datenstruktur anpassen
$aktueller_kurs = $data['currentPrice'] ?? 'Nicht verfügbar';
$kurs_verlauf = $data['historicalData'] ?? [];

// JSON-Antwort ausgeben
echo json_encode([
    'currentPrice' => $aktueller_kurs,
    'historicalData' => $kurs_verlauf
]);
?>
