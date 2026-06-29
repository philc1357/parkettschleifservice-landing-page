#!/bin/bash

set -e

# Alle geänderten und neuen Dateien stagen (außer Dateien in .gitignore)
git add -A

# Prüfen ob es etwas zu committen gibt
if git diff --cached --quiet; then
  echo "Keine Änderungen zum Committen."
  exit 0
fi

# Commit-Nachricht abfragen oder Standard verwenden
if [ -n "$1" ]; then
  MSG="$1"
else
  echo "Commit-Nachricht eingeben (Enter für Standard):"
  read -r MSG
  if [ -z "$MSG" ]; then
    MSG="Update: $(date '+%Y-%m-%d %H:%M')"
  fi
fi

git commit -m "$MSG"
git push origin main

echo "Erfolgreich gepusht!"
