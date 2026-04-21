<?php
/* ============================================================
   INDEX.PHP — Portfolio Jérémy Thomas | BTS SIO SISR
   Épreuve E5
   ============================================================ */
require_once './includes/config.php';
include  './includes/header.php';
include  './includes/nav.php';
?>

<!-- ══════════════════════════════════════════════════════════
     SECTION : À PROPOS
══════════════════════════════════════════════════════════ -->
<section id="about">
  <div class="container">
    <p class="section-label fade-in">Qui suis-je ?</p>
    <h2 class="section-title fade-in">À propos</h2>

    <div class="about-grid fade-in">
      <!-- Texte de présentation -->
      <div>
        <p><?= nl2br(htmlspecialchars(trim($A_PROPOS))) ?></p>

        <div class="btn-row">
          <?php if ($CV_PATH): ?>
          <a href="<?= htmlspecialchars($CV_PATH) ?>" class="btn btn-primary" download>
            ⬇ Télécharger mon CV
          </a>
          <?php endif; ?>
          <a href="#contact" class="btn btn-outline">✉ Me contacter</a>
        </div>
      </div>

      <!-- Infos rapides -->
      <ul class="info-list">
        <?php foreach ($INFOS as $info): ?>
        <li>
          <span class="label"><?= htmlspecialchars($info['label']) ?></span>
          <span class="value"><?= htmlspecialchars($info['value']) ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : FORMATION
══════════════════════════════════════════════════════════ -->
<section id="formation">
  <div class="container">
    <p class="section-label fade-in">Parcours scolaire</p>
    <h2 class="section-title fade-in">Formation</h2>

    <!-- BTS SIO -->
    <div class="formation-card fade-in" style="margin-bottom:1.2rem;">
      <span class="formation-year"><?= htmlspecialchars($FORMATION_ITEM['annee']) ?></span>
      <div>
        <h3><?= htmlspecialchars($FORMATION_ITEM['titre']) ?></h3>
        <p class="school"><?= htmlspecialchars($FORMATION_ITEM['ecole']) ?></p>
        <p><?= nl2br(htmlspecialchars(trim($FORMATION_ITEM['description']))) ?></p>
      </div>
    </div>

    <!-- Bac -->
    <div class="formation-card fade-in">
      <span class="formation-year"><?= htmlspecialchars($FORMATION_PREC['annee']) ?></span>
      <div>
        <h3><?= htmlspecialchars($FORMATION_PREC['titre']) ?></h3>
        <p class="school"><?= htmlspecialchars($FORMATION_PREC['ecole']) ?></p>
        <p><?= nl2br(htmlspecialchars(trim($FORMATION_PREC['description']))) ?></p>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : COMPÉTENCES SISR (Référentiel E5)
══════════════════════════════════════════════════════════ -->
<section id="competences">
  <div class="container">
    <p class="section-label fade-in">Référentiel BTS SIO SISR</p>
    <h2 class="section-title fade-in">Compétences</h2>

    <div class="comp-grid">
      <?php foreach ($COMPETENCES as $comp): ?>
      <div class="comp-card fade-in">
        <div class="comp-code"><?= htmlspecialchars($comp['code']) ?></div>
        <h4><?= htmlspecialchars($comp['titre']) ?></h4>
        <p><?= htmlspecialchars($comp['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : STAGES
══════════════════════════════════════════════════════════ -->
<section id="stages">
  <div class="container">
    <p class="section-label fade-in">Expériences professionnelles</p>
    <h2 class="section-title fade-in">Stages</h2>

    <?php foreach ($STAGES as $stage): ?>
    <div class="stage-card fade-in">
      <div class="stage-num"><?= htmlspecialchars($stage['num']) ?></div>
      <div>
        <h3><?= htmlspecialchars($stage['titre']) ?></h3>
        <p class="org">🏢 <?= htmlspecialchars($stage['organisation']) ?> &nbsp;·&nbsp; <?= htmlspecialchars($stage['periode']) ?></p>
        <p><?= nl2br(htmlspecialchars(trim($stage['description']))) ?></p>
        <?php if (!empty($stage['competences'])): ?>
        <div class="tags" style="margin-top:.8rem;">
          <?php foreach ($stage['competences'] as $c): ?>
          <span class="tag"><?= htmlspecialchars($c) ?></span>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : PROJETS SCOLAIRES
══════════════════════════════════════════════════════════ -->
<section id="projets">
  <div class="container">
    <p class="section-label fade-in">Réalisations</p>
    <h2 class="section-title fade-in">Projets scolaires</h2>

    <div class="projects-grid">
      <?php foreach ($PROJETS as $projet): ?>
      <div class="project-card fade-in">
        <?php if (!empty($projet['image'])): ?>
          <img src="<?= htmlspecialchars($projet['image']) ?>"
               alt="<?= htmlspecialchars($projet['titre']) ?>"
               class="project-thumb"
               onerror="this.style.display='none'" />
        <?php else: ?>
          <div class="project-thumb-placeholder">
            <?= $projet['emoji'] ?? '💻' ?>
          </div>
        <?php endif; ?>
        <div class="project-body">
          <h3><?= htmlspecialchars($projet['titre']) ?></h3>
          <p><?= htmlspecialchars($projet['description']) ?></p>
          <?php if (!empty($projet['tags'])): ?>
          <div class="tags">
            <?php foreach ($projet['tags'] as $tag): ?>
            <span class="tag"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : TABLEAU DE SYNTHÈSE — ÉPREUVE E5
══════════════════════════════════════════════════════════ -->
<section id="synthese">
  <div class="container">
    <p class="section-label fade-in">BTS SIO — Épreuve E5</p>
    <h2 class="section-title fade-in">Tableau de Synthèse</h2>

    <div class="synth-box fade-in">
      <div class="synth-icon">📋</div>
      <h3>Tableau de Synthèse des réalisations professionnelles</h3>
      <p>
        Ce document recense l'ensemble des situations professionnelles vécues en stage,
        associées aux compétences du référentiel BTS SIO SISR, conformément aux 
        exigences de l'épreuve E5.
      </p>
      <?php if ($TABLEAU_SYNTH_PATH): ?>
      <a href="<?= htmlspecialchars($TABLEAU_SYNTH_PATH) ?>" class="btn btn-primary" download>
        ⬇ Télécharger le tableau de synthèse (.xlsx)
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ══════════════════════════════════════════════════════════
     SECTION : CONTACT
══════════════════════════════════════════════════════════ -->
<section id="contact">
  <div class="container">
    <p class="section-label fade-in">Me joindre</p>
    <h2 class="section-title fade-in">Contact</h2>

    <div class="contact-grid fade-in">
      <div>
        <p style="color:var(--text-muted); margin-bottom:1.5rem; font-size:.95rem;">
          Vous pouvez me contacter par email ou via LinkedIn pour toute question,
          proposition de stage ou d'alternance.
        </p>
        <div class="contact-links">
          <?php if ($EMAIL): ?>
          <a href="mailto:<?= htmlspecialchars($EMAIL) ?>" class="contact-link">
            <span class="icon">✉</span>
            <div>
              <div class="link-label">Email</div>
              <div class="link-val"><?= htmlspecialchars($EMAIL) ?></div>
            </div>
          </a>
          <?php endif; ?>

          <?php if ($LINKEDIN): ?>
          <a href="<?= htmlspecialchars($LINKEDIN) ?>" class="contact-link" target="_blank" rel="noopener">
            <span class="icon">🔗</span>
            <div>
              <div class="link-label">LinkedIn</div>
              <div class="link-val">Voir mon profil</div>
            </div>
          </a>
          <?php endif; ?>

          <?php if ($GITHUB): ?>
          <a href="<?= htmlspecialchars($GITHUB) ?>" class="contact-link" target="_blank" rel="noopener">
            <span class="icon">💾</span>
            <div>
              <div class="link-label">GitHub</div>
              <div class="link-val">Voir mes dépôts</div>
            </div>
          </a>
          <?php endif; ?>
        </div>
      </div>

      <div style="display:flex; flex-direction:column; gap:1rem;">
        <div class="card" style="background:var(--bg3);">
          <div class="card-icon">🎓</div>
          <h3>Épreuve E5</h3>
          <p class="meta">BTS SIO SISR · Promotion <?= $ANNEE_PORTFOLIO ?></p>
        </div>
        <div class="card" style="background:var(--bg3);">
          <div class="card-icon">📍</div>
          <h3>Disponibilité</h3>
          <p class="meta">Ouvert aux stages et opportunités en alternance dans le domaine des réseaux et systèmes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include './includes/footer.php'; ?>
