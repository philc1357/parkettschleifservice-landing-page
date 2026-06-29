<?php
/**
 * =============================================================================
 *  Kontaktformular-Handler – STUB / Vorlage
 * -----------------------------------------------------------------------------
 *  Diese Datei ist bewusst NICHT aktiv. Das Kontaktformular auf kontakt.php ist
 *  im aktuellen Template rein optisch (clientseitige Validierung, kein Versand).
 *
 *  Wenn der Betreiber die Verarbeitung aktivieren möchte, kann dieser Handler
 *  als Grundlage dienen. Er liegt absichtlich in private/php/ (außerhalb des
 *  Doc-Roots public/), damit er bzw. künftige Zugangsdaten nicht direkt über
 *  den Browser erreichbar sind.
 *
 *  WICHTIG bei der späteren Umsetzung (Projektvorgaben):
 *    - Niemals Nutzereingaben vertrauen: serverseitig streng validieren
 *      (filter_var, Längen, Pflichtfelder) und ausgeben mit htmlspecialchars().
 *    - Sollen Anfragen in einer Datenbank gespeichert werden, ausschließlich
 *      PDO mit Prepared Statements verwenden.
 *    - CSRF-Schutz (Token) und ein Spam-Schutz (z. B. Honeypot) ergänzen.
 * =============================================================================
 */

// Beispielhafter (deaktivierter) Ablauf – als Orientierung:
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // --- Eingaben einlesen & validieren ----------------------------------
    $name      = trim($_POST['name']      ?? '');
    $email     = trim($_POST['email']     ?? '');
    $telefon   = trim($_POST['telefon']   ?? '');
    $nachricht = trim($_POST['nachricht'] ?? '');

    $fehler = [];
    if ($name === '' || mb_strlen($name) > 100) {
        $fehler[] = 'Bitte einen gültigen Namen angeben.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fehler[] = 'Bitte eine gültige E-Mail-Adresse angeben.';
    }
    if ($nachricht === '' || mb_strlen($nachricht) > 2000) {
        $fehler[] = 'Bitte eine gültige Nachricht angeben.';
    }

    if (empty($fehler)) {
        // --- Variante A: Speichern via PDO (Prepared Statement) ----------
        // require __DIR__ . '/config.php'; // DB-Zugangsdaten (außerhalb public/)
        // $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        // $stmt = $pdo->prepare(
        //     'INSERT INTO anfragen (name, email, telefon, nachricht, erstellt_am)
        //      VALUES (:name, :email, :telefon, :nachricht, NOW())'
        // );
        // $stmt->execute([
        //     ':name' => $name, ':email' => $email,
        //     ':telefon' => $telefon, ':nachricht' => $nachricht,
        // ]);

        // --- Variante B: Versand per E-Mail ------------------------------
        // mail($empfaenger, 'Neue Anfrage', $nachricht, 'From: ' . $email);
    }
}
*/
