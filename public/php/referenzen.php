<?php
/**
 * =============================================================================
 *  Referenzen
 * -----------------------------------------------------------------------------
 *  Galerie ausgewählter Projekte (aus $site['references']) inkl. kurzer
 *  Beschreibungen sowie ein Platzhalter-Kundenstimmen-Bereich.
 * =============================================================================
 */
$pageTitle       = 'Referenzen';
$pageDescription = 'Ausgewählte Referenzen unseres Parkett- und Bodenschliffs: Altbausanierung, Gewerbeobjekte und private Wohnräume mit neuem Glanz.';
$activeUrl       = '/php/referenzen.php';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Referenzen</h1>
        <p class="mb-0">Ein Einblick in unsere abgeschlossenen Projekte.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards">
            <?php foreach ($site['references'] as $ref): ?>
                <div class="ref-card">
                    <img src="<?= htmlspecialchars($ref['image']) ?>" alt="<?= htmlspecialchars($ref['alt']) ?>" class="ref-media">
                    <div class="ref-body">
                        <h2 class="h6" style="font-size:19px;"><?= htmlspecialchars($ref['title']) ?></h2>
                        <p><?= htmlspecialchars($ref['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section refs">
    <div class="container">
        <div class="process-head">
            <span class="eyebrow">Kundenstimmen</span>
            <h2 class="section-h2">Was unsere Kunden sagen</h2>
        </div>
        <div class="cards">
            <blockquote class="quote-card p-4 mb-0">
                <div class="mb-2" style="color:var(--accent);" aria-label="5 von 5 Sternen">★★★★★</div>
                <p class="fst-italic">„Kompetente Beratung. Alles was man zum Schleifen von Parkett so braucht. Tolle Produkte, super Preise. Immer wieder gerne.....“</p>
                <footer class="text-muted">— Hendrik Teren, Local Guide · Google-Rezension</footer>
            </blockquote>
            <blockquote class="quote-card p-4 mb-0">
                <div class="mb-2" style="color:var(--accent);" aria-label="5 von 5 Sternen">★★★★★</div>
                <p class="fst-italic">„[Platzhalter] Schnell, professionell und absolut termintreu. Das Ergebnis hat unsere Erwartungen übertroffen.“</p>
                <footer class="text-muted">— Muster GmbH, Musterstadt</footer>
            </blockquote>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
