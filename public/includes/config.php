<?php
/**
 * =============================================================================
 *  Zentrale Konfiguration & Inhalte (Template)
 * -----------------------------------------------------------------------------
 *  Alle leicht anzupassenden Inhalte der Website befinden sich gebündelt in
 *  diesem $site-Array: Firmenname, Kontaktdaten, Navigation, Leistungen und
 *  Referenzen. Der Betreiber kann die Seite nachträglich individualisieren,
 *  indem er ausschließlich die Werte in dieser Datei ändert.
 *
 *  Alle mit [Platzhalter] markierten Werte müssen vor dem Live-Gang durch echte
 *  Firmendaten ersetzt werden.
 * =============================================================================
 */

$site = [

    // --- Firmen- & Basisdaten -------------------------------------------------
    'name'      => 'Parkettschleifmaschinen',          // [Platzhalter] Firmenname
    'slogan'    => 'Ihr Spezialist für Parkett- und Bodenschliff',
    'baseurl'   => 'https://www.example.de',         // [Platzhalter] Domain (für SEO/Canonical)

    // --- Kontaktdaten ---------------------------------------------------------
    'contact'   => [
        'street'  => 'William-Zipperer-Straße 59',
        'zip'     => '04177',
        'city'    => 'Leipzig',
        'phone'   => '01522 8948377',
        'email'   => 'info@example.de',               // [Platzhalter]
    ],

    // --- Öffnungszeiten -------------------------------------------------------
    //  Reihenfolge Mo–So; 'data' wird zusätzlich für SEO-Strukturdaten genutzt.
    'opening_hours' => [
        ['day' => 'Montag',     'time' => '08:00–18:00',  'data' => 'Mo 08:00-18:00'],
        ['day' => 'Dienstag',   'time' => '08:00–18:00',  'data' => 'Tu 08:00-18:00'],
        ['day' => 'Mittwoch',   'time' => '08:00–18:00',  'data' => 'We 08:00-18:00'],
        ['day' => 'Donnerstag', 'time' => '08:00–18:00',  'data' => 'Th 08:00-18:00'],
        ['day' => 'Freitag',    'time' => '08:00–18:00',  'data' => 'Fr 08:00-18:00'],
        ['day' => 'Samstag',    'time' => '10:00–15:00',  'data' => 'Sa 10:00-15:00']
    ],

    // --- Kennzahlen (Statistik-Leiste auf der Startseite) ---------------------
    //  [Platzhalter] Echte Zahlen des Betriebs eintragen.
    'stats' => [
        ['num' => '15+',     'label' => 'Jahre Handwerk'],
        ['num' => '25.000',  'label' => 'm² Parkett veredelt'],
        ['num' => '100 %',   'label' => 'staubarmes Arbeiten'],
        ['num' => 'UV',      'label' => 'sofort begehbar'],
    ],

    // --- Ablauf (Prozess-Schritte auf der Startseite) -------------------------
    'process' => [
        ['title' => 'Beratung & Festpreis', 'text' => 'Wir begutachten Ihren Boden vor Ort und erstellen ein transparentes Angebot ohne versteckte Kosten.'],
        ['title' => 'Staubarm schleifen',   'text' => 'Moderne Absaugtechnik hält Ihre Räume sauber, während wir den Boden präzise und gleichmäßig abschleifen.'],
        ['title' => 'Versiegeln & ölen',    'text' => 'Lack, Öl oder Hartwachs – wir veredeln die Oberfläche passend zur Beanspruchung und Optik Ihres Raums.'],
        ['title' => 'Sofort begehbar',      'text' => 'Dank UV-Sofortversiegelung können Sie Ihren neuen Boden ohne lange Wartezeit direkt wieder nutzen.'],
    ],

    // --- Hauptnavigation ------------------------------------------------------
    //  'url' ist root-relativ (Doc-Root = public/). Startseite = '/'.
    'nav'       => [
        ['label' => 'Start',         'url' => '/'],
        ['label' => 'Leistungen',    'url' => '/php/leistungen.php'],
        ['label' => 'Wer sind wir',  'url' => '/php/ueber-uns.php'],
        ['label' => 'Referenzen',    'url' => '/php/referenzen.php'],
        ['label' => 'Kontakt',       'url' => '/php/kontakt.php'],
    ],

    // --- Leistungen (für Startseite & Leistungsseite) -------------------------
    'services'  => [
        [
            'icon'  => '🪵',
            'title' => 'Parkett & Dielen schleifen',
            'text'  => 'Professioneller Schliff von Parkett, Dielen und Landhausdielen mit staubarmen Maschinen für ein makelloses Ergebnis.',
        ],
        [
            'icon'  => '🛡️',
            'title' => 'Versiegelung, Öl & Lack',
            'text'  => 'Langlebige Oberflächenbehandlung – ob strapazierfähiger Lack, natürliches Öl oder Hartwachs nach Ihren Wünschen.',
        ],
        [
            'icon'  => '💡',
            'title' => 'UV-Sofortversiegelung',
            'text'  => 'Mit moderner UV-Technik sind Ihre Böden sofort nach der Behandlung begehbar – schnell, geruchsarm und sauber.',
        ],
        [
            'icon'  => '🪜',
            'title' => 'Treppenrenovierung',
            'text'  => 'Aufarbeitung und Neugestaltung von Holztreppen – für mehr Sicherheit und ein gepflegtes Erscheinungsbild.',
        ],
        [
            'icon'  => '✨',
            'title' => 'Renovierung & Reparatur',
            'text'  => 'Ausbessern von Kratzern, Dellen und beschädigten Stellen sowie das Verlegen einzelner Austauschelemente.',
        ],
        [
            'icon'  => '🧹',
            'title' => 'Reinigung & Pflege',
            'text'  => 'Grundreinigung und fachgerechte Pflege Ihrer Holzböden für eine lange Lebensdauer und schöne Optik.',
        ],
    ],

    // --- Referenzen / Projekte ------------------------------------------------
    'references' => [
        [
            'image' => '/imgs/referenz-altbau.jpg',
            'alt'   => 'Bodenschliffmaschine mit UV-Aushärtung auf frisch versiegeltem Parkett',
            'title' => 'Altbau-Sanierung, Musterstadt',
            'text'  => 'Kompletter Neuschliff und UV-Versiegelung von 120 m² historischem Eichenparkett.',
        ],
        [
            'image' => '/imgs/leerer-raum-parkett-querformat.jpg',
            'alt'   => 'Verschiedene Arbeitsschritte beim professionellen Parkettschliff',
            'title' => 'Bürogebäude, Musterstadt',
            'text'  => 'Renovierung stark beanspruchter Böden im laufenden Betrieb – über mehrere Etagen.',
        ],
        [
            'image' => '/imgs/referenz-privat.jpg',
            'alt'   => 'Profi-Bandschleifmaschine Lägler Hummel mit Staubsack',
            'title' => 'Privatwohnung, Musterstadt',
            'text'  => 'Aufarbeitung von Dielenböden inklusive geölter Naturoberfläche.',
        ],
    ],
];
