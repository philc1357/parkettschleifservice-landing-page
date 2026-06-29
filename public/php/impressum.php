<?php
/**
 * =============================================================================
 *  Impressum (Platzhalter)
 * -----------------------------------------------------------------------------
 *  Gegliederte Platzhalter-Angaben gemäß § 5 DDG/TMG. Die mit [Platzhalter]
 *  markierten Stellen müssen durch echte Firmenangaben ersetzt werden.
 *  Hinweis: Dies ist kein Rechtsrat – Inhalte rechtlich prüfen lassen.
 * =============================================================================
 */
$pageTitle       = 'Impressum';
$pageDescription = 'Impressum und Anbieterkennzeichnung von ' . ($site['name'] ?? '');
$activeUrl       = '';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Impressum</h1>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 800px;">

        <h2 class="h5">Angaben gemäß § 5 DDG</h2>
        <p>
            [Platzhalter] <?= htmlspecialchars($site['name']) ?><br>
            [Platzhalter] Inhaber: Max Mustermann<br>
            <?= htmlspecialchars($site['contact']['street']) ?><br>
            <?= htmlspecialchars($site['contact']['zip'] . ' ' . $site['contact']['city']) ?>
        </p>

        <h2 class="h5 mt-4">Kontakt</h2>
        <p>
            Telefon: <?= htmlspecialchars($site['contact']['phone']) ?><br>
            E-Mail: <?= htmlspecialchars($site['contact']['email']) ?>
        </p>

        <h2 class="h5 mt-4">Umsatzsteuer-ID</h2>
        <p>[Platzhalter] Umsatzsteuer-Identifikationsnummer gemäß § 27a UStG: DE000000000</p>

        <h2 class="h5 mt-4">Berufshaftpflicht / Handwerkskammer</h2>
        <p>[Platzhalter] Zuständige Handwerkskammer und Berufsbezeichnung hier ergänzen.</p>

        <h2 class="h5 mt-4">Verbraucherstreitbeilegung</h2>
        <p>
            Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
            Verbraucherschlichtungsstelle teilzunehmen.
        </p>

        <h2 class="h5 mt-4">Technische Umsetzung</h2>
        <p>
            Website konzipiert und entwickelt von
            <a href="https://www.example.com" target="_blank" rel="noopener">Philipp Bauer</a>
            (<a href="https://github.com/philc1357" target="_blank" rel="noopener">GitHub</a>).
        </p>

        <p class="text-muted small mt-4">
            Hinweis: Dieser Text ist ein Platzhalter und ersetzt keine Rechtsberatung.
            Bitte lassen Sie Ihr Impressum vor Veröffentlichung rechtlich prüfen.
        </p>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
