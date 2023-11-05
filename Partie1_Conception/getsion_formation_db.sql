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

-- Création de la table "Formation"
CREATE TABLE Formation (
    NumeroUnique INT AUTO_INCREMENT PRIMARY KEY,
    DateDebut DATE,
    Prix DECIMAL(10, 2),
    DureeMois INT,
    Intitule VARCHAR(100),
    Description TEXT
);

-- Création de la table "Etudiant"
CREATE TABLE Etudiant (
    Identifiant INT AUTO_INCREMENT PRIMARY KEY,
    NumeroCarteIdentite VARCHAR(20),
    Nom VARCHAR(50),
    DateNaissance DATE,
    NumeroTelephone VARCHAR(20),
    AdresseEmail VARCHAR(100),
    Adresse VARCHAR(255)
);