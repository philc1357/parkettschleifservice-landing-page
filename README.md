# Parkettschleifmaschinen – Landing Page

Statische Landing Page für einen Parkettschleifservice in Leipzig. Veröffentlicht via **GitHub Pages**.

## Seiten

| Seite | Datei |
|---|---|
| Startseite | `index.html` |
| Leistungen | `leistungen.html` |
| Über uns | `ueber-uns.html` |
| Referenzen | `referenzen.html` |
| Kontakt | `kontakt.html` |
| Impressum | `impressum.html` |
| Datenschutz | `datenschutz.html` |

## Technik

- **HTML/CSS** – statischer Export, kein Build-Schritt nötig
- **Bootstrap 5** via CDN
- **Google Fonts** – Newsreader (Überschriften) & Hanken Grotesk (Fließtext)
- **PHP-Vorlage** unter `public/` (serverseitig, konfigurierbar über `public/includes/config.php`)

## Struktur

```
├── index.html              # Startseite (statischer Export)
├── *.html                  # Weitere Unterseiten
├── docs/                   # Statische Assets für GitHub Pages
│   ├── css/style.css
│   ├── js/main.js
│   └── imgs/
├── public/                 # PHP-Vorlage (für eigenen Server)
│   ├── includes/config.php # Zentrale Konfiguration (Firmendaten, Inhalte)
│   ├── php/                # PHP-Seitenvorlagen
│   └── ...
└── private/
    └── php/contact-handler.php
```

## Lokal starten

Da es sich um eine statische Seite handelt, reicht ein einfacher HTTP-Server:

```bash
# Python
python3 -m http.server 8080

# Node.js (npx)
npx serve .
```

Dann im Browser `http://localhost:8080` öffnen.

## Deployment

Die Seite wird automatisch über **GitHub Pages** aus dem `main`-Branch bereitgestellt.  
Zum manuellen Pushen steht das Skript `push.sh` zur Verfügung.

## Konfiguration (PHP-Vorlage)

Alle Inhalte (Firmenname, Kontaktdaten, Leistungen, Referenzen) befinden sich zentral in:

```
public/includes/config.php
```

Vor dem Live-Gang alle mit `[Platzhalter]` markierten Werte durch echte Firmendaten ersetzen (Domain, E-Mail-Adresse).
