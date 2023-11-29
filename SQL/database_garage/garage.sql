



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
        brand_id         Int  Auto_increment  NOT NULL ,
        brand_name       Varchar (50) NOT NULL ,
        employe_id       Int ,
        employe_id_gerer Int
	,CONSTRAINT Brand_PK PRIMARY KEY (brand_id)

	,CONSTRAINT Brand_employe_FK FOREIGN KEY (employe_id_gerer) REFERENCES employe(employe_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: temoignages
#------------------------------------------------------------

CREATE TABLE temoignages(
        id_temoignages Int  Auto_increment  NOT NULL ,
        nom            Varchar (150) NOT NULL ,
        commentaire    Varchar (150) NOT NULL ,
        note           Varchar (5) NOT NULL
	,CONSTRAINT temoignages_PK PRIMARY KEY (id_temoignages)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: allVoitures
#------------------------------------------------------------

CREATE TABLE allVoitures(
        voiture_id        Int  Auto_increment  NOT NULL ,
        brand_id          Int NOT NULL ,
        model             Varchar (50) NOT NULL ,
        year              Date NOT NULL ,
        price             Decimal (50) NOT NULL ,
        km                Int NOT NULL ,
        description       Varchar (50) NOT NULL ,
        photoSrc          Varchar (200) NOT NULL ,
        photo2            Varchar (200) NOT NULL ,
        photo3            Varchar (200) NOT NULL ,
        brand_id_Displays Int
	,CONSTRAINT allVoitures_PK PRIMARY KEY (voiture_id)

	,CONSTRAINT allVoitures_Brand_FK FOREIGN KEY (brand_id_Displays) REFERENCES Brand(brand_id)
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
        visiteur_id    Int NOT NULL ,
        brand_id       Int NOT NULL ,
        id_temoignages Int NOT NULL
	,CONSTRAINT connexion_PK PRIMARY KEY (employe_id,visiteur_id,brand_id,id_temoignages)

	,CONSTRAINT connexion_employe_FK FOREIGN KEY (employe_id) REFERENCES employe(employe_id)
	,CONSTRAINT connexion_visiteur0_FK FOREIGN KEY (visiteur_id) REFERENCES visiteur(visiteur_id)
	,CONSTRAINT connexion_Brand1_FK FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
	,CONSTRAINT connexion_temoignages2_FK FOREIGN KEY (id_temoignages) REFERENCES temoignages(id_temoignages)
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



#------------------------------------------------------------
#------------------------------------------------------------

# Alimentation, base de donnees

-- INSERT INTO allVoitures (voiture_id, model, year, price, km, description, photoSrc, photo2, photo3) VALUES ('renault', 'clio', 1997, 1800, 176540, 'RT essence, boat manuelle, 1.4 ');
-- UPDATE allVoitures
--         SET photoSrc = '../img/renault/clio/clio_rt_derecha.sql', photo2 = '../img/renault/clio/clio_rt_interior.sql', photo3 = '../img/renault/clio/clio_rt_derecha.sql'
--         WHERE voiture_id = '1';

