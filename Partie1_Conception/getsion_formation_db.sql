-- Création de la base de données "gestion_formation"
CREATE DATABASE gestion_formation_db;

-- Utilisation de la base de données
USE gestion_formation_db;

-- Création de la table "Administrateur"
CREATE TABLE Administrateur (
    Identifiant INT AUTO_INCREMENT PRIMARY KEY,
    NumeroCarteIdentite VARCHAR(20),
    Nom VARCHAR(50),
    DateNaissance DATE,
    NumeroTelephone VARCHAR(20),
    AdresseEmail VARCHAR(100),
    Adresse VARCHAR(255)
);
