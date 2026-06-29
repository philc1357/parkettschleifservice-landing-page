<?php
/**
 * =============================================================================
 *  Startseite
 * -----------------------------------------------------------------------------
 *  Hero, Leistungs-Teaser, USP-/Vertrauensabschnitt und Referenz-Teaser.
 *  Enthält zusätzlich JSON-LD-Strukturdaten (LocalBusiness) für SEO.
 * =============================================================================
 */
$pageTitle       = 'Parkett schleifen & versiegeln';
$pageDescription = 'Professioneller Parkett- und Bodenschliff: Schleifen, Versiegeln, Ölen und Renovieren von Holzböden. Staubarm, schnell und in Meisterqualität.';
$activeUrl       = '/';

require __DIR__ . '/../includes/header.php';
?>

<!-- JSON-LD Strukturdaten (LocalBusiness) für Suchmaschinen -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?= htmlspecialchars($site['name']) ?>",
  "description": "<?= htmlspecialchars($pageDescription) ?>",
  "telephone": "<?= htmlspecialchars($site['contact']['phone']) ?>",
  "email": "<?= htmlspecialchars($site['contact']['email']) ?>",
  "url": "<?= htmlspecialchars($site['baseurl']) ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= htmlspecialchars($site['contact']['street']) ?>",
    "postalCode": "<?= htmlspecialchars($site['contact']['zip']) ?>",
    "addressLocality": "<?= htmlspecialchars($site['contact']['city']) ?>",
    "addressCountry": "DE"
  },
  "openingHours": [
<?php
    // Öffnungszeiten im schema.org-Format (geschlossene Tage ohne 'data' überspringen)
    $ohData = array_values(array_filter(array_column($site['opening_hours'], 'data')));
    foreach ($ohData as $i => $line):
        $comma = $i < count($ohData) - 1 ? ',' : '';
?>
    "<?= htmlspecialchars($line) ?>"<?= $comma ?>

<?php endforeach; ?>
  ]
}
</script>

<!-- Hero -->
<section class="hero">
    <div class="container hero-grid">
        <div>
            <div class="hero-eyebrow">
                <span class="hero-rule"></span>
                <span class="eyebrow">Parkett- &amp; Bodenschliff · <?= htmlspecialchars($site['contact']['city']) ?></span>
            </div>
            <h1>Holzböden, die wieder<br><em>strahlen.</em></h1>
            <p class="hero-lead">Ihr Spezialist für Parkett- und Bodenschliff. Mit modernen, staubarmen Schleifmaschinen und langlebiger Versiegelung bringen wir Parkett und Dielen in Meisterqualität zurück.</p>
            <div class="hero-cta">
                <a href="/php/kontakt.php" class="btn btn-brand btn-lg">Kostenloses Angebot anfragen →</a>
                <a href="/php/leistungen.php" class="btn btn-outline-brand btn-lg">Unsere Leistungen</a>
            </div>
            <div class="trust">
                <span>★★★★★</span><span class="sep"></span>
                <span>Meisterqualität</span><span class="sep"></span>
                <span>Staubarm</span><span class="sep"></span>
                <span>Faire Festpreise</span>
            </div>
        </div>
        <div class="hero-figure">
            <div class="hero-frame"></div>
            <img src="/imgs/mutter-kind-auf-parkett-hochformat.jpg"
                 alt="Profi-Bandschleifmaschine Lägler Hummel mit Staubsack"
                 class="hero-media">
        </div>
    </div>
</section>

<!-- Statistik-Leiste -->
<section class="stats">
    <div class="container stats-grid">
        <?php foreach ($site['stats'] as $stat): ?>
            <div class="stat">
                <div class="stat-num"><?= htmlspecialchars($stat['num']) ?></div>
                <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Leistungs-Teaser -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div>
                <span class="eyebrow">Was wir können</span>
                <h2 class="section-h2">Vom rohen Schliff bis zur fertigen Oberfläche</h2>
            </div>
            <a href="/php/leistungen.php" class="link-arrow">Alle Leistungen →</a>
        </div>
        <div class="cards">
            <?php foreach (array_slice($site['services'], 0, 3) as $i => $service): ?>
                <div class="card-brand">
                    <div class="card-num"><?= sprintf('%02d', $i + 1) ?></div>
                    <h3><?= htmlspecialchars($service['title']) ?></h3>
                    <p><?= htmlspecialchars($service['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Ablauf -->
<section class="section process">
    <div class="container">
        <div class="process-head">
            <span class="eyebrow">So arbeiten wir</span>
            <h2 class="section-h2">In vier Schritten zum neuen Boden</h2>
        </div>
        <div class="steps">
            <?php foreach ($site['process'] as $i => $step): ?>
                <div class="step">
                    <div class="step-num"><?= $i + 1 ?></div>
                    <h3><?= htmlspecialchars($step['title']) ?></h3>
                    <p><?= htmlspecialchars($step['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Warum wir (USP) -->
<section class="section">
    <div class="container usp-grid usp">
        <div class="hero-figure">
            <div class="hero-frame"></div>
            <img src="/imgs/parkett-lack-querformat.jpg"
                 alt="Bodenschliffmaschine mit UV-Aushärtung auf frisch versiegeltem Parkett"
                 class="usp-media">
        </div>
        <div>
            <span class="eyebrow">Warum wir</span>
            <h2>Handwerk, dem Sie vertrauen können</h2>
            <ul class="checklist">
                <li><span class="check">✓</span><span><strong>Meisterqualität</strong> – jahrelange Erfahrung im Parketthandwerk.</span></li>
                <li><span class="check">✓</span><span><strong>Staubarmes Arbeiten</strong> – moderne Absaugtechnik für saubere Räume.</span></li>
                <li><span class="check">✓</span><span><strong>Schnell begehbar</strong> – dank UV-Sofortversiegelung.</span></li>
                <li><span class="check">✓</span><span><strong>Faire Festpreise</strong> – transparente Angebote ohne versteckte Kosten.</span></li>
            </ul>
            <a href="/php/ueber-uns.php" class="btn btn-brand btn-lg">Mehr über uns →</a>
        </div>
    </div>
</section>

<!-- Referenz-Teaser -->
<section class="section refs">
    <div class="container">
        <div class="section-head">
            <div>
                <span class="eyebrow">Ausgewählte Projekte</span>
                <h2 class="section-h2">Referenzen</h2>
            </div>
            <a href="/php/referenzen.php" class="link-arrow">Weitere Referenzen →</a>
        </div>
        <div class="cards">
            <?php foreach ($site['references'] as $ref): ?>
                <div class="ref-card">
                    <img src="<?= htmlspecialchars($ref['image']) ?>" alt="<?= htmlspecialchars($ref['alt']) ?>" class="ref-media">
                    <div class="ref-body">
                        <h3><?= htmlspecialchars($ref['title']) ?></h3>
                        <p><?= htmlspecialchars($ref['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Amber-CTA-Box -->
<section class="cta">
    <div class="container">
        <div class="cta-box">
            <div>
                <h2>Bereit für neue Böden?</h2>
                <p>Fordern Sie jetzt Ihr kostenloses Festpreis-Angebot an – wir melden uns schnellstmöglich bei Ihnen.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:<?= htmlspecialchars(str_replace(' ', '', $site['contact']['phone'])) ?>" class="cta-phone"><?= htmlspecialchars($site['contact']['phone']) ?></a>
                <a href="/php/kontakt.php" class="btn btn-light-brand btn-lg">Angebot per E-Mail anfragen →</a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
