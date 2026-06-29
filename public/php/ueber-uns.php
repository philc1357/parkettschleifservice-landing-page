<?php
/**
 * =============================================================================
 *  Wer sind wir (Über uns)
 * -----------------------------------------------------------------------------
 *  Firmenstory, Werte und Hinweise zur eingesetzten Technik (Platzhalter).
 * =============================================================================
 */
$pageTitle       = 'Wer sind wir';
$pageDescription = 'Lernen Sie unseren Familienbetrieb für Parkett- und Bodenschliff kennen: Erfahrung, Werte und moderne Technik für langlebige Holzböden.';
$activeUrl       = '/php/ueber-uns.php';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Wer sind wir</h1>
        <p class="mb-0">Handwerk mit Leidenschaft – Ihr Partner für schöne Holzböden.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2>Unsere Geschichte</h2>
                <p class="text-muted">
                    [Platzhalter] <?= htmlspecialchars($site['name']) ?> ist Ihr regionaler Fachbetrieb
                    für die Aufarbeitung von Parkett, Dielen und Holztreppen. Seit vielen Jahren bringen
                    wir mit Erfahrung und Sorgfalt abgenutzte Böden wieder zum Strahlen.
                </p>
                <p class="text-muted">
                    [Platzhalter] Ob privater Wohnraum, Büro oder Gewerbeobjekt – wir beraten Sie
                    persönlich und finden für jeden Boden die passende Lösung.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="hero-figure">
                    <div class="hero-frame"></div>
                    <img src="/imgs/schleifen-in-werkstatt.jpg"
                         alt="Eingesetzte Profi-Schleifmaschine Lägler Hummel"
                         class="usp-media">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section process">
    <div class="container">
        <div class="process-head">
            <span class="eyebrow">Was uns ausmacht</span>
            <h2 class="section-h2">Unsere Werte</h2>
        </div>
        <div class="cards">
            <div class="card-brand text-center">
                <div class="card-icon mb-3">🤝</div>
                <h3 class="h5">Zuverlässigkeit</h3>
                <p>Termintreue und verlässliche Arbeit, auf die Sie sich verlassen können.</p>
            </div>
            <div class="card-brand text-center">
                <div class="card-icon mb-3">🎯</div>
                <h3 class="h5">Qualität</h3>
                <p>Sorgfältige Ausführung mit hochwertigen Materialien und moderner Technik.</p>
            </div>
            <div class="card-brand text-center">
                <div class="card-icon mb-3">💬</div>
                <h3 class="h5">Beratung</h3>
                <p>Ehrliche, persönliche Beratung – individuell auf Ihren Boden abgestimmt.</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
