-- Active: 1733754940278@@127.0.0.1@3306@systeme_medical_poo
USE systeme_medical_poo;

CREATE Table utilisateur(
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT ,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    identite ENUM ('Pateint','Médecin')
);

CREATE Table reservation (
    id_res INT PRIMARY KEY AUTO_INCREMENT,
    id_utlilisateur INT,
    DATE_res DATE,
    Foreign Key (id_utlilisateur) REFERENCES utilisateur (id_utilisateur)
);

CREATE Table facteure (
    id_fac INT PRIMARY KEY AUTO_INCREMENT ,
    id_reservation INT ,
    prix INT NOT null,
    Foreign Key (id_reservation) REFERENCES reservation(id_res)
);