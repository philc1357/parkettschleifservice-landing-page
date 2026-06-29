<?php
/**
 * =============================================================================
 *  Gemeinsamer Seitenkopf (Header)
 * -----------------------------------------------------------------------------
 *  Bindet die zentrale Konfiguration ein, gibt den <head> mit SEO-Metadaten,
 *  Bootstrap 5 (CDN) und dem eigenen Stylesheet aus und rendert die Navigation.
 *
 *  Erwartete Variablen (vor dem require in der jeweiligen Seite setzen):
 *    $pageTitle        – Seitentitel (Pflicht, für <title> & Open Graph)
 *    $pageDescription  – Meta-Description (Pflicht, für SEO)
 *    $activeUrl        – aktive Navigations-URL für die Hervorhebung (optional)
 * =============================================================================
 */

require __DIR__ . '/config.php';

// Fallback-Werte, falls eine Seite nichts gesetzt hat
$pageTitle       = $pageTitle       ?? $site['name'];
$pageDescription = $pageDescription ?? $site['slogan'];
$activeUrl       = $activeUrl       ?? '';

// Vollständiger <title> inkl. Firmenname
$fullTitle = $pageTitle . ' | ' . $site['name'];
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO-Basis -->
    <title><?= htmlspecialchars($fullTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph (Social Sharing) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= htmlspecialchars($site['name']) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($fullTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($site['baseurl']) ?>/imgs/schleifmaschine-laegler-hummel.png">

    <!-- Google Fonts: Newsreader (Überschriften) + Hanken Grotesk (Fließtext) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400;1,6..72,500&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 via CDN (Vorgabe) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Eigenes Stylesheet (Holz-Design, root-relativ ab Doc-Root public/) -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>

<!-- =========================================================================
     Hauptnavigation – responsive Bootstrap-Navbar
     ======================================================================== -->
<header>
    <nav class="navbar navbar-expand-lg navbar-brand-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="brand-mark">P</span><?= htmlspecialchars($site['name']) ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#hauptmenu" aria-controls="hauptmenu"
                    aria-expanded="false" aria-label="Menü ein-/ausblenden">
                <span class="navbar-toggler-icon" style="filter:invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="hauptmenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <?php foreach ($site['nav'] as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $item['url'] === $activeUrl ? 'active' : '' ?>"
                               href="<?= htmlspecialchars($item['url']) ?>"
                               <?= $item['url'] === $activeUrl ? 'aria-current="page"' : '' ?>>
                                <?= htmlspecialchars($item['label']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <!-- CTA-Pille rechts in der Navigation -->
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="nav-link nav-cta" href="/php/kontakt.php">Angebot anfragen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
