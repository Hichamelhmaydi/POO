<?php

class Utilisateur {
    private $type_utilisateur;
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getType() {
        return $this->type_utilisateur;
    }

    public function setType($type_utilisateur) {
        $this->type_utilisateur = $type_utilisateur;
    }

    public function afficherNomComplet() {
        return $this->prenom . " " . $this->nom;
    }
}

class Patient extends Utilisateur {
    private $rendez_vous;

    public function __construct($nom, $prenom) {
        parent::__construct($nom, $prenom);
        $this->setType("Patient");
    }

    public function prendreRendezVous() {
        $this->rendez_vous = date("Y-m-d H:i:s");
    }

    public function getRendezVous() {
        return $this->rendez_vous;
    }
}

class Medecin extends Utilisateur {
    private $specialite;

    public function __construct($nom, $prenom, $specialite) {
        parent::__construct($nom, $prenom);
        $this->setType("Médecin");
        $this->specialite = $specialite;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    public function consulterPatient($id) {
        return "Consulting patient with ID: " . $id;
    }
}


$utilisateur = new Utilisateur("Youness", "Boumeshouli");
echo $utilisateur->afficherNomComplet() . "\n";

$patient = new Patient("Ahmed", "Zouaoui");
echo $patient->afficherNomComplet() . " is a " . $patient->getType() . "\n";
$patient->prendreRendezVous();
echo "Rendez-vous taken at: " . $patient->getRendezVous() . "\n";

$medecin = new Medecin("Sarah", "Bennani", "Cardiology");
echo $medecin->afficherNomComplet() . " is a " . $medecin->getType() . " specialized in " . $medecin->getSpecialite() . "\n";
echo $medecin->consulterPatient(101);
