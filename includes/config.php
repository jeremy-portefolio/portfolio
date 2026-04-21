<?php
/* ============================================================
   CONFIG.PHP — Modifiez uniquement ce fichier pour mettre
   à jour votre portfolio sans toucher au reste du code.
   ============================================================ */

// ── Identité ──────────────────────────────────────────────
$NOM_PRENOM      = "Jérémy Thomas";
$TITRE           = "Technicien Informatique";
$FORMATION       = "BTS SIO — option SISR";
$ANNEE_PORTFOLIO = "2026";

// ── Photo de profil ───────────────────────────────────────
// Placez votre photo dans /img/ et modifiez le chemin ci-dessous
$PHOTO_PROFIL    = "./img/photo_profil.png";
$PHOTO_ALT       = "Photo de profil de " . $NOM_PRENOM;

// ── À propos ──────────────────────────────────────────────
$A_PROPOS = "Je suis THOMAS Jérémy, jeune étudiant en BTS SIO option SISR. 
             Je sors d'un Bac Général avec les spécialités Mathématiques et 
             Physique-Chimie. En dehors de mes études, je pratique le basket 
             qui est ma passion.";

// ── Infos personnelles (À propos sidebar) ─────────────────
$INFOS = [
  ["label" => "Localisation",  "value" => "France"],
  ["label" => "Formation",     "value" => "BTS SIO SISR"],
  ["label" => "Passion",       "value" => "Basket-ball 🏀"],
  ["label" => "Disponibilité", "value" => "Stage / Alternance"],
];

// ── CV (chemin vers le PDF) ───────────────────────────────
$CV_PATH = "./img/CV.pdf";

// ── Formation ─────────────────────────────────────────────
$FORMATION_ITEM = [
  "annee"       => "2024 – 2026",
  "titre"       => "BTS SIO — Solutions d'Infrastructure, Systèmes et Réseaux (SISR)",
  "ecole"       => "Lycée / CFA — France",
  "description" => "Formation en deux ans préparant à concevoir, déployer et sécuriser 
                    des infrastructures informatiques et réseaux. Acquisition de compétences 
                    en administration systèmes Linux/Windows, réseaux TCP/IP, cybersécurité, 
                    virtualisation et support aux utilisateurs.",
];

$FORMATION_PREC = [
  "annee"       => "2021 – 2024",
  "titre"       => "Baccalauréat Général",
  "ecole"       => "Lycée",
  "description" => "Spécialités : Mathématiques & Physique-Chimie. Acquisition de la rigueur 
                    analytique et du raisonnement scientifique.",
];

// ── Compétences SISR (référentiel E5) ─────────────────────
$COMPETENCES = [
  [
    "code"  => "C1",
    "titre" => "Support & Assistance",
    "desc"  => "Gérer le patrimoine informatique et répondre aux incidents utilisateurs."
  ],
  [
    "code"  => "C2",
    "titre" => "Infra & Réseaux",
    "desc"  => "Concevoir et déployer une infrastructure réseau sécurisée."
  ],
  [
    "code"  => "C3",
    "titre" => "Cybersécurité",
    "desc"  => "Protéger les systèmes d'information et mettre en œuvre une politique de sécurité."
  ],
  [
    "code"  => "C4",
    "titre" => "Virtualisation",
    "desc"  => "Mettre en place et administrer des environnements virtualisés."
  ],
  [
    "code"  => "C5",
    "titre" => "Services Clouds",
    "desc"  => "Déployer et gérer des services en cloud privé ou public."
  ],
  [
    "code"  => "C6",
    "titre" => "Documentation",
    "desc"  => "Rédiger des procédures techniques et maintenir la documentation SI."
  ],
];

// ── Stages ────────────────────────────────────────────────
$STAGES = [
  [
    "num"          => "S1",
    "titre"        => "Stage de 1ère année",
    "organisation" => "Communauté de Communes",
    "periode"      => "Année scolaire 2024-2025",
    "description"  => "Stage effectué au sein du service informatique d'une communauté 
                       de communes. Découverte de l'environnement professionnel, 
                       assistance aux utilisateurs et participation aux tâches 
                       d'administration du parc informatique.",
    "competences"  => ["C1 — Support", "Administration poste", "Inventaire parc"],
  ],
  // Décommentez et remplissez pour le stage de 2ème année :
  /*
  [
    "num"          => "S2",
    "titre"        => "Stage de 2ème année",
    "organisation" => "Nom de l'entreprise",
    "periode"      => "Année scolaire 2025-2026",
    "description"  => "Description du stage...",
    "competences"  => ["C2", "C3"],
  ],
  */
];

// ── Projets scolaires ─────────────────────────────────────
$PROJETS = [
  [
    "titre"       => "Projet 1",
    "description" => "Description du projet — à compléter avec votre réalisation.",
    "image"       => "",          // laisser vide ou mettre un chemin ./img/projet1.png
    "emoji"       => "🖥️",
    "tags"        => ["Réseau", "Linux", "Administration"],
  ],
  [
    "titre"       => "Projet 2",
    "description" => "Description du projet — à compléter avec votre réalisation.",
    "image"       => "",
    "emoji"       => "🔒",
    "tags"        => ["Sécurité", "Firewall", "SISR"],
  ],
  // Ajoutez autant de projets que nécessaire :
  /*
  [
    "titre"       => "Projet 3",
    "description" => "...",
    "image"       => "",
    "emoji"       => "☁️",
    "tags"        => ["Cloud", "Virtualisation"],
  ],
  */
];

// ── Tableau de synthèse ────────────────────────────────────
$TABLEAU_SYNTH_PATH = "./img/tableau de synthese - epreuve e5 - bts sio.xlsx";

// ── Contact ───────────────────────────────────────────────
$EMAIL    = "thomasjeremy1220@gmail.com";
$LINKEDIN = "https://www.linkedin.com/in/jérémy-thomas-752508382";
$GITHUB   = "";   // Ajoutez votre GitHub si vous en avez un
