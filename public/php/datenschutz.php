<?php
/**
 * =============================================================================
 *  Datenschutzerklärung (Platzhalter)
 * -----------------------------------------------------------------------------
 *  Gegliederte Platzhalter-Texte gemäß DSGVO. Die mit [Platzhalter] markierten
 *  Stellen müssen angepasst werden. Hinweis: Dies ist kein Rechtsrat.
 * =============================================================================
 */
$pageTitle       = 'Datenschutz';
$pageDescription = 'Datenschutzerklärung von ' . ($site['name'] ?? '') . ' – Informationen zur Verarbeitung personenbezogener Daten gemäß DSGVO.';
$activeUrl       = '';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Datenschutzerklärung</h1>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 800px;">

        <h2 class="h5">1. Verantwortlicher</h2>
        <p>
            Verantwortlich für die Datenverarbeitung auf dieser Website ist:<br>
            [Platzhalter] <?= htmlspecialchars($site['name']) ?>,
            <?= htmlspecialchars($site['contact']['street']) ?>,
            <?= htmlspecialchars($site['contact']['zip'] . ' ' . $site['contact']['city']) ?>,
            E-Mail: <?= htmlspecialchars($site['contact']['email']) ?>.
        </p>

        <h2 class="h5 mt-4">2. Erhebung und Speicherung personenbezogener Daten</h2>
        <p>
            [Platzhalter] Beim Besuch dieser Website werden durch den Server automatisch Informationen
            (z. B. IP-Adresse, Datum und Uhrzeit des Zugriffs) in sogenannten Server-Logfiles erfasst.
            Diese Daten sind nicht bestimmten Personen zuordenbar.
        </p>

        <h2 class="h5 mt-4">3. Kontaktformular</h2>
        <p>
            [Platzhalter] Wenn Sie uns über das Kontaktformular Anfragen zukommen lassen, werden Ihre
            Angaben zwecks Bearbeitung der Anfrage gespeichert. Diese Daten geben wir nicht ohne Ihre
            Einwilligung weiter. Rechtsgrundlage ist Art. 6 Abs. 1 lit. b und f DSGVO.
        </p>

        <h2 class="h5 mt-4">4. Ihre Rechte</h2>
        <p>
            Sie haben das Recht auf Auskunft, Berichtigung, Löschung, Einschränkung der Verarbeitung,
            Datenübertragbarkeit sowie Widerspruch gegen die Verarbeitung Ihrer personenbezogenen Daten.
        </p>

        <h2 class="h5 mt-4">5. Hosting</h2>
        <p>[Platzhalter] Angaben zum Hosting-Anbieter und Auftragsverarbeitungsvertrag hier ergänzen.</p>

        <p class="text-muted small mt-4">
            Hinweis: Dieser Text ist ein Platzhalter und ersetzt keine Rechtsberatung.
            Bitte lassen Sie Ihre Datenschutzerklärung vor Veröffentlichung rechtlich prüfen.
        </p>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
