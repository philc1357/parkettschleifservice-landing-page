<?php
/**
 * =============================================================================
 *  Kontakt
 * -----------------------------------------------------------------------------
 *  Kontaktdaten, Öffnungszeiten und ein OPTISCHES Kontaktformular.
 *
 *  WICHTIG: Das Formular ist nur ein Template – es findet KEIN echter Versand
 *  statt (siehe js/main.js). Die serverseitige Verarbeitung inkl. strenger
 *  Input-Validierung muss vom Betreiber ergänzt werden. Ein vorbereiteter
 *  Stub liegt unter private/php/contact-handler.php.
 * =============================================================================
 */
$pageTitle       = 'Kontakt';
$pageDescription = 'Kontaktieren Sie uns für ein kostenloses Angebot rund um Parkett- und Bodenschliff. Adresse, Telefon, E-Mail und Öffnungszeiten auf einen Blick.';
$activeUrl       = '/php/kontakt.php';

require __DIR__ . '/../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Kontakt</h1>
        <p class="mb-0">Wir freuen uns auf Ihre Anfrage.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5">

            <!-- Kontaktdaten -->
            <div class="col-lg-5">
                <h2 class="h4">So erreichen Sie uns</h2>
                <address class="mt-3">
                    <strong><?= htmlspecialchars($site['name']) ?></strong><br>
                    <?= htmlspecialchars($site['contact']['street']) ?><br>
                    <?= htmlspecialchars($site['contact']['zip'] . ' ' . $site['contact']['city']) ?>
                </address>
                <p class="mb-1">📞 <a href="tel:<?= htmlspecialchars(str_replace(' ', '', $site['contact']['phone'])) ?>"><?= htmlspecialchars($site['contact']['phone']) ?></a></p>
                <p class="mb-3">✉️ <a href="mailto:<?= htmlspecialchars($site['contact']['email']) ?>"><?= htmlspecialchars($site['contact']['email']) ?></a></p>

                <h2 class="h5 mt-4 opening-hours-title">Öffnungszeiten</h2>
                <div class="opening-hours">
                    <?php foreach ($site['opening_hours'] as $oh):
                        $closed = stripos($oh['time'], 'geschlossen') !== false;
                    ?>
                        <div class="opening-hours__row <?= $closed ? 'opening-hours__row--closed' : '' ?>">
                            <span class="opening-hours__day"><?= htmlspecialchars($oh['day']) ?></span>
                            <?php if ($closed): ?>
                                <span class="opening-hours__badge">Geschlossen</span>
                            <?php else: ?>
                                <span class="opening-hours__time"><?= htmlspecialchars($oh['time']) ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Kontaktformular (nur optisch) -->
            <div class="col-lg-7">
                <h2 class="h4">Schreiben Sie uns</h2>

                <!-- Erfolgs-Hinweis (wird per JS nach gültiger Eingabe eingeblendet) -->
                <div id="formularHinweis" class="alert alert-success d-none" role="alert">
                    Vielen Dank! Dies ist eine Vorschau – in der finalen Version wird Ihre Nachricht versendet.
                </div>

                <!-- Hinweis: novalidate aktiviert die clientseitige Bootstrap-Validierung -->
                <form id="kontaktFormular" class="needs-validation mt-3" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="100">
                            <div class="invalid-feedback">Bitte geben Sie Ihren Namen ein.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-Mail *</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="150">
                            <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                        </div>
                        <div class="col-12">
                            <label for="telefon" class="form-label">Telefon</label>
                            <input type="tel" class="form-control" id="telefon" name="telefon" maxlength="50">
                        </div>
                        <div class="col-12">
                            <label for="nachricht" class="form-label">Ihre Nachricht *</label>
                            <textarea class="form-control" id="nachricht" name="nachricht" rows="5" required maxlength="2000"></textarea>
                            <div class="invalid-feedback">Bitte geben Sie eine Nachricht ein.</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-brand btn-lg">Nachricht senden</button>
                            <p class="form-text mt-2">* Pflichtfelder</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
