<?php /* includes/header.php */ ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($NOM_PRENOM) ?> — Portfolio BTS SIO SISR</title>
  <meta name="description" content="Portfolio de <?= htmlspecialchars($NOM_PRENOM) ?>, étudiant en BTS SIO option SISR — Épreuve E5" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>

<!-- ══════════════════════ HEADER ══════════════════════ -->
<header>
  <div class="container header-grid">
    <div class="avatar-wrap">
      <img src="<?= htmlspecialchars($PHOTO_PROFIL) ?>"
           alt="<?= htmlspecialchars($PHOTO_ALT) ?>"
           onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($NOM_PRENOM) ?>&background=5b8dee&color=fff&size=220'" />
      <div class="avatar-ring"></div>
    </div>
    <h1><?= htmlspecialchars($NOM_PRENOM) ?></h1>
    <p class="subtitle"><?= htmlspecialchars($TITRE) ?></p>
    <div class="header-badges">
      <span class="badge">BTS SIO</span>
      <span class="badge">SISR</span>
      <span class="badge">Promotion <?= $ANNEE_PORTFOLIO ?></span>
    </div>
  </div>
</header>
