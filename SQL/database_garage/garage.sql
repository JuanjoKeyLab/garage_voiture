#création de la table utilisateur

CREATE TABLE utilisateur(
        utilisateur_id Int  Auto_increment  NOT NULL ,
        Mail           Varchar (50) NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (utilisateur_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Admin
#------------------------------------------------------------

CREATE TABLE Admin(
        Admin_id  Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) ,
        prenom    Varchar (50) ,
        mail      Varchar (50) ,
        telephone Varchar (50) COMMENT "Administrateur: Vivent Parrot"
	,CONSTRAINT Admin_PK PRIMARY KEY (Admin_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: visiteur
#------------------------------------------------------------

CREATE TABLE visiteur(
        visiteur_id Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL ,
        mail        Varchar (50) NOT NULL
	,CONSTRAINT visiteur_PK PRIMARY KEY (visiteur_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: employe
#------------------------------------------------------------

CREATE TABLE employe(
        employe_id Int  Auto_increment  NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL ,
        mail       Varchar (50) NOT NULL ,
        telephone  Varchar (50) NOT NULL
	,CONSTRAINT employe_PK PRIMARY KEY (employe_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Brand
#------------------------------------------------------------

CREATE TABLE Brand(
        brand_id   Int  Auto_increment  NOT NULL ,
        car_read   Varchar (50) NOT NULL ,
        employe_id Int
	,CONSTRAINT Brand_PK PRIMARY KEY (brand_id)

	,CONSTRAINT Brand_employe_FK FOREIGN KEY (employe_id) REFERENCES employe(employe_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: temoignages
#------------------------------------------------------------

CREATE TABLE temoignages(
        id_temoignages Int  Auto_increment  NOT NULL ,
        nom            Varchar (150) NOT NULL ,
        prenom         Varchar (150) NOT NULL ,
        commentaire    Varchar (150) NOT NULL ,
        note           Varchar (5) NOT NULL
	,CONSTRAINT temoignages_PK PRIMARY KEY (id_temoignages)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: allVoitures
#------------------------------------------------------------

CREATE TABLE allVoitures(
        allVoitures        Int  Auto_increment  NOT NULL ,
        brand_id           Int NOT NULL ,
        model_id           Int NOT NULL ,
        model              Varchar (50) NOT NULL ,
        year               Date NOT NULL ,
        price              Decimal (50) NOT NULL ,
        km                 Int NOT NULL ,
        description        Varchar (50) NOT NULL ,
        brand_id_relation0 Int
	,CONSTRAINT allVoitures_PK PRIMARY KEY (allVoitures)

	,CONSTRAINT allVoitures_Brand_FK FOREIGN KEY (brand_id_relation0) REFERENCES Brand(brand_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: photos
#------------------------------------------------------------

CREATE TABLE photos(
        photo_id    Int  Auto_increment  NOT NULL ,
        model_id    Int NOT NULL ,
        photos      Blob NOT NULL ,
        allVoitures Int
	,CONSTRAINT photos_PK PRIMARY KEY (photo_id)

	,CONSTRAINT photos_allVoitures_FK FOREIGN KEY (allVoitures) REFERENCES allVoitures(allVoitures)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commander
#------------------------------------------------------------

CREATE TABLE commander(
        utilisateur_id           Int NOT NULL ,
        brand_id                 Int NOT NULL ,
        utilisateur_id_commander Int NOT NULL ,
        quantite                 Int NOT NULL
	,CONSTRAINT commander_PK PRIMARY KEY (utilisateur_id,brand_id,utilisateur_id_commander)

	,CONSTRAINT commander_utilisateur_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id)
	,CONSTRAINT commander_Brand0_FK FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
	,CONSTRAINT commander_utilisateur1_FK FOREIGN KEY (utilisateur_id_commander) REFERENCES utilisateur(utilisateur_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gerer
#------------------------------------------------------------

CREATE TABLE gerer(
        employe_id Int NOT NULL ,
        Admin_id   Int NOT NULL
	,CONSTRAINT gerer_PK PRIMARY KEY (employe_id,Admin_id)

	,CONSTRAINT gerer_employe_FK FOREIGN KEY (employe_id) REFERENCES employe(employe_id)
	,CONSTRAINT gerer_Admin0_FK FOREIGN KEY (Admin_id) REFERENCES Admin(Admin_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: connexion
#------------------------------------------------------------

CREATE TABLE connexion(
        employe_id     Int NOT NULL ,
        utilisateur_id Int NOT NULL ,
        visiteur_id    Int NOT NULL ,
        brand_id       Int NOT NULL ,
        id_temoignages Int NOT NULL
	,CONSTRAINT connexion_PK PRIMARY KEY (employe_id,utilisateur_id,visiteur_id,brand_id,id_temoignages)

	,CONSTRAINT connexion_employe_FK FOREIGN KEY (employe_id) REFERENCES employe(employe_id)
	,CONSTRAINT connexion_utilisateur0_FK FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(utilisateur_id)
	,CONSTRAINT connexion_visiteur1_FK FOREIGN KEY (visiteur_id) REFERENCES visiteur(visiteur_id)
	,CONSTRAINT connexion_Brand2_FK FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
	,CONSTRAINT connexion_temoignages3_FK FOREIGN KEY (id_temoignages) REFERENCES temoignages(id_temoignages)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ajouter
#------------------------------------------------------------

CREATE TABLE ajouter(
        employe_id     Int NOT NULL ,
        id_temoignages Int NOT NULL
	,CONSTRAINT ajouter_PK PRIMARY KEY (employe_id,id_temoignages)

	,CONSTRAINT ajouter_employe_FK FOREIGN KEY (employe_id) REFERENCES employe(employe_id)
	,CONSTRAINT ajouter_temoignages0_FK FOREIGN KEY (id_temoignages) REFERENCES temoignages(id_temoignages)
)ENGINE=InnoDB;


# alimentation, code, donnees

INSERT INTO allVoitures (brand_id, model, year, price, km, description) VALUES ('renault', 'clio', 1997, 1800, 176540, 'Diesel, boat manual et trois ports');
        INSERT INTO photos(photo_id, model_id, photos) VALUES (1,'renault_clio_rt',LOAD_FILE('../img/renault_clio_rt.jpg')),
                                                        (2,'renault_clio_rt_derecha', LOAD_FILE('../img/renault_clio_rt_derecha.jpg')),
                                                        (3, 'renault_clio_rt_back', LOAD_FILE('../img/renault_clio_rt_back.jpg')),
                                                        (4, 'renault_clio_rt_interior', LOAD_FILE('../img/renault_clio_rt_interior.jpg'));

