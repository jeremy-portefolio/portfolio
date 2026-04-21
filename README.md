# Portfolio — Jérémy Thomas | BTS SIO SISR

## Structure des fichiers

```
portfolio/
├── index.html          ← Version HTML statique (à utiliser sans PHP)
├── index.php           ← Version PHP (à utiliser avec un serveur PHP)
├── css/
│   └── style.css       ← Styles (thème sombre professionnel)
├── js/
│   └── main.js         ← Animations et navigation active
├── includes/
│   ├── config.php      ← ✏️ FICHIER PRINCIPAL À MODIFIER (toutes les données)
│   ├── header.php      ← Header (auto-généré depuis config.php)
│   ├── nav.php         ← Navigation
│   └── footer.php      ← Footer
└── img/
    ├── photo_profil.png   ← Votre photo (renommez votre fichier)
    ├── CV.pdf             ← Votre CV
    └── tableau de synthese - epreuve e5 - bts sio.xlsx
```

---

## Comment modifier le portfolio

### Version HTML (simple, sans PHP)
→ Ouvrez `index.html` dans un éditeur et modifiez directement le contenu.

### Version PHP (recommandée)
→ **Ouvrez uniquement `includes/config.php`** et modifiez les variables.
→ Vous n'avez jamais besoin de toucher aux autres fichiers.

---

## Sections conformes à l'épreuve E5

- ✅ À propos
- ✅ Formation (BTS SIO SISR + Bac)
- ✅ Compétences du référentiel (C1 à C6 SISR)
- ✅ Stages avec compétences associées
- ✅ Projets scolaires
- ✅ Tableau de Synthèse E5 (téléchargeable)
- ✅ Contact

---

## Ajouter un projet

Dans `config.php`, dans le tableau `$PROJETS`, ajoutez :

```php
[
  "titre"       => "Mon nouveau projet",
  "description" => "Description courte.",
  "image"       => "./img/mon_projet.png",  // ou laisser ""
  "emoji"       => "🌐",
  "tags"        => ["Linux", "Réseau", "C2"],
],
```

---

## Ajouter le stage de 2ème année

Dans `config.php`, décommentez le bloc commenté dans `$STAGES`.

---

## Serveur local PHP (XAMPP / WAMP / Laragon)

1. Copiez le dossier `portfolio/` dans `htdocs/` (XAMPP) ou `www/` (WAMP)
2. Accédez à `http://localhost/portfolio/`
