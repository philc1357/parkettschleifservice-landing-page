    </main>

    <!-- =====================================================================
         Footer – Kontaktinfos & Rechtslinks
         ==================================================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4">

                <!-- Firma -->
                <div class="col-md-6 col-lg-3">
                    <div class="footer-brand"><?= htmlspecialchars($site['name']) ?></div>
                    <p><?= htmlspecialchars($site['slogan']) ?> in <?= htmlspecialchars($site['contact']['city']) ?> und Umgebung.</p>
                </div>

                <!-- Kontakt -->
                <div class="col-md-6 col-lg-3">
                    <h5>Kontakt</h5>
                    <address class="mb-0">
                        <?= htmlspecialchars($site['contact']['street']) ?><br>
                        <?= htmlspecialchars($site['contact']['zip'] . ' ' . $site['contact']['city']) ?><br>
                        Tel.: <a href="tel:<?= htmlspecialchars(str_replace(' ', '', $site['contact']['phone'])) ?>"><?= htmlspecialchars($site['contact']['phone']) ?></a><br>
                        E-Mail: <a href="mailto:<?= htmlspecialchars($site['contact']['email']) ?>"><?= htmlspecialchars($site['contact']['email']) ?></a>
                    </address>
                </div>

                <!-- Öffnungszeiten -->
                <div class="col-md-6 col-lg-3">
                    <h5>Öffnungszeiten</h5>
                    <p class="hours">
                        <?php foreach ($site['opening_hours'] as $oh): ?>
                            <?= htmlspecialchars($oh['day']) ?>&nbsp;&nbsp;<?= htmlspecialchars($oh['time']) ?><br>
                        <?php endforeach; ?>
                    </p>
                </div>

                <!-- Rechtliches -->
                <div class="col-md-6 col-lg-3">
                    <h5>Rechtliches</h5>
                    <ul class="footer-links">
                        <li><a href="/php/impressum.php">Impressum</a></li>
                        <li><a href="/php/datenschutz.php">Datenschutz</a></li>
                        <li><a href="/php/kontakt.php">Kontakt</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom text-center">
                &copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. Alle Rechte vorbehalten.<br>
                <small>Website erstellt von
                    <a href="https://www.example.com" target="_blank" rel="noopener">Philipp Bauer</a>
                    &middot;
                    <a href="https://github.com/philc1357" target="_blank" rel="noopener">GitHub</a>
                </small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle (CDN, inkl. Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Eigenes Skript -->
    <script src="/js/main.js"></script>
</body>
</html>
