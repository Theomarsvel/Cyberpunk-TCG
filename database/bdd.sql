
CREATE DATABASE IF NOT EXISTS cyberpunk_tcg
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

use cyberpunk_tcg;

CREATE TABLE categorie (
    id_categorie INT UNSIGNED AUTO_INCREMENT,
    libelle VARCHAR(100) NOT NULL,

    CONSTRAINT pk_categorie
        PRIMARY KEY (id_categorie),

    CONSTRAINT uq_categorie_libelle
        UNIQUE (libelle)
);



CREATE TABLE carte (
    id_carte INT UNSIGNED AUTO_INCREMENT,
    nom_carte VARCHAR(255) NOT NULL,
    description_carte TEXT,
    serie_carte VARCHAR(100) NOT NULL,
    id_categorie INT UNSIGNED NOT NULL,

    CONSTRAINT pk_carte
        PRIMARY KEY (id_carte),

    CONSTRAINT fk_carte_categorie
        FOREIGN KEY (id_categorie)
        REFERENCES categorie(id_categorie)
);



CREATE TABLE statistique (
    id_statistique INT UNSIGNED AUTO_INCREMENT,
    id_carte INT UNSIGNED NOT NULL,
    type_carte VARCHAR(100) NOT NULL,
    cout INT UNSIGNED ,
    conv_edit BOOLEAN NOT NULL,
    ram INT UNSIGNED,
    power INT UNSIGNED,
    effet VARCHAR(100),

    CONSTRAINT pk_statistique
        PRIMARY KEY (id_statistique),

    CONSTRAINT fk_statistique_carte
        FOREIGN KEY (id_carte)
        REFERENCES carte(id_carte),

    CONSTRAINT uq_statistique_carte
        UNIQUE (id_carte)
);


CREATE TABLE exemplaire (
    id_exemplaire INT UNSIGNED AUTO_INCREMENT,
    numero_inventaire VARCHAR(50) NOT NULL,
    etat VARCHAR(50) NOT NULL,
    disponibilite BOOLEAN NOT NULL DEFAULT TRUE,
    id_carte INT UNSIGNED NOT NULL,

    CONSTRAINT pk_exemplaire
        PRIMARY KEY (id_exemplaire),

    CONSTRAINT uq_exemplaire_numero
        UNIQUE (numero_inventaire),

    CONSTRAINT fk_exemplaire_carte
        FOREIGN KEY (id_carte)
        REFERENCES carte(id_carte)
);


CREATE TABLE adherent (
    id_adherent INT UNSIGNED AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,

    CONSTRAINT pk_adherent
        PRIMARY KEY (id_adherent),

    CONSTRAINT uq_adherent_email
        UNIQUE (email)
);



CREATE TABLE emprunt (
    id_emprunt INT UNSIGNED AUTO_INCREMENT,
    date_emprunt DATE NOT NULL,
    date_retour_prevue DATE NOT NULL,
    date_retour DATE,
    id_adherent INT UNSIGNED NOT NULL,
    id_exemplaire INT UNSIGNED NOT NULL,

    CONSTRAINT pk_emprunt
        PRIMARY KEY (id_emprunt),

    CONSTRAINT fk_emprunt_adherent
        FOREIGN KEY (id_adherent)
        REFERENCES adherent(id_adherent),

    CONSTRAINT fk_emprunt_exemplaire
        FOREIGN KEY (id_exemplaire)
        REFERENCES exemplaire(id_exemplaire)
);
