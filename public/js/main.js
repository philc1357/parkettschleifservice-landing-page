/* =============================================================================
   main.js – clientseitige Interaktionen des Templates
   -----------------------------------------------------------------------------
   Enthält: Schließen des mobilen Menüs nach Klick, sanftes Scrollen zu
   Anker-Links und die clientseitige Validierung des Kontaktformulars.
   Hinweis: Das Kontaktformular ist nur ein optisches Template – es findet
   KEIN echter Versand statt. Die serverseitige Verarbeitung muss vom Betreiber
   ergänzt werden (siehe private/php/contact-handler.php).
   ============================================================================ */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        // --- Mobiles Menü nach Klick auf einen Link wieder einklappen --------
        const navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
        const collapse = document.querySelector('.navbar-collapse');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (collapse && collapse.classList.contains('show')) {
                    new bootstrap.Collapse(collapse).hide();
                }
            });
        });

        // --- Sanftes Scrollen für reine Anker-Links (#...) -------------------
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // --- Kontaktformular: clientseitige Bootstrap-Validierung ------------
        const form = document.getElementById('kontaktFormular');
        if (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();          // kein echter Versand (Template)
                event.stopPropagation();

                if (form.checkValidity()) {
                    // Erfolgs-Hinweis anzeigen (Demo, ohne Backend)
                    const hinweis = document.getElementById('formularHinweis');
                    if (hinweis) {
                        hinweis.classList.remove('d-none');
                        form.reset();
                        form.classList.remove('was-validated');
                        return;
                    }
                }
                form.classList.add('was-validated');
            });
        }
    });
})();
