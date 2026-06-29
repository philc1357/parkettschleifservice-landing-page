<?php
/**
 * =============================================================================
 *  Leistungen
 * -----------------------------------------------------------------------------
 *  Übersicht aller angebotenen Leistungen als Karten (aus $site['services']).
 * =============================================================================
 */
$pageTitle       = 'Unsere Leistungen';
$pageDescription = 'Unsere Leistungen rund um Holzböden: Parkett & Dielen schleifen, Versiegeln, Ölen, UV-Sofortversiegelung, Treppenrenovierung sowie Reinigung und Pflege.';
$activeUrl       = '/php/leistungen.php';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Unsere Leistungen</h1>
        <p class="mb-0">Alles rund um Schliff, Versiegelung und Pflege Ihrer Holzböden.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards">
            <?php foreach ($site['services'] as $i => $service): ?>
                <div class="card-brand">
                    <div class="card-num"><?= sprintf('%02d', $i + 1) ?></div>
                    <h2 class="h3" style="font-size:23px;"><?= htmlspecialchars($service['title']) ?></h2>
                    <p><?= htmlspecialchars($service['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <p class="lead">Sie wünschen ein individuelles Angebot?</p>
            <a href="/php/kontakt.php" class="btn btn-brand btn-lg">Jetzt unverbindlich anfragen</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
