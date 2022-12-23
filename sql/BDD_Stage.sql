DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
# -----------------------------------------------------------------------------
#       TABLE : ADMINISTRATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADMINISTRATEUR
 (
   IDA SMALLINT NOT NULL  ,
   NOMA VARCHAR(128) NOT NULL  ,
   PRENOMA VARCHAR(128) NOT NULL  ,
   LOGINA VARCHAR(128) NOT NULL  ,
   MDPA VARCHAR(128) NOT NULL  ,
   EMAILA VARCHAR(128) NOT NULL
   , PRIMARY KEY (IDA) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RETARD
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RETARD
 (
   IDR INTEGER NOT NULL  ,
   IDI INTEGER NOT NULL  ,
   DATE_HEURER DATETIME NOT NULL  ,
   DUREER INTEGER NOT NULL  
   , PRIMARY KEY (IDR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RETARD
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RETARD_INCIDENT
     ON RETARD (IDI ASC);

# -----------------------------------------------------------------------------
#       TABLE : EMPLOYEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EMPLOYEUR
 (
   IDE INTEGER NOT NULL  ,
   LIBELLEE VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ETUDIANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ETUDIANT
 (
   IDE INTEGER NOT NULL  ,
   IDC INTEGER NOT NULL  ,
   NOME VARCHAR(128) NOT NULL  ,
   PRENOME VARCHAR(128) NOT NULL  ,
   LOGINE VARCHAR(128) NOT NULL  ,
   MDPE VARCHAR(128) NOT NULL  ,
   EMAILE VARCHAR(128) NOT NULL
   , PRIMARY KEY (IDE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ETUDIANT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ETUDIANT_CLASSE
     ON ETUDIANT (IDC ASC);

# -----------------------------------------------------------------------------
#       TABLE : INCIDENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INCIDENT
 (
   IDI INTEGER NOT NULL  ,
   IDF INTEGER NOT NULL  ,
   IDM INTEGER NOT NULL  ,
   LIBELLEI VARCHAR(128) NOT NULL  ,
   DESCCRIPTIONI VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDI) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE INCIDENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_INCIDENT_FLUX_KSS
     ON INCIDENT (IDF ASC);

CREATE  INDEX I_FK_INCIDENT_MOYEN_TRANSPORT
     ON INCIDENT (IDM ASC);

# -----------------------------------------------------------------------------
#       TABLE : JOURNEE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS JOURNEE
 (
   IDJ INTEGER NOT NULL  ,
   IDEMPT SMALLINT NOT NULL  ,
   LIBELLEJ VARCHAR(128) NOT NULL  ,
   DEBUTJ TIME NULL  ,
   FINJ TIME NULL  
   , PRIMARY KEY (IDJ) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE JOURNEE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_JOURNEE_PLANNING
     ON JOURNEE (IDEMPT ASC);

# -----------------------------------------------------------------------------
#       TABLE : FLUX_KSS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FLUX_KSS
 (
   IDF INTEGER NOT NULL  ,
   LIBELLEF VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDF) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : BILLET_RETARD
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS BILLET_RETARD
 (
   IDB INTEGER NOT NULL  ,
   DATEB DATE NOT NULL  ,
   HEUREB TIME NOT NULL  
   , PRIMARY KEY (IDB) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MOYEN_TRANSPORT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MOYEN_TRANSPORT
 (
   IDM INTEGER NOT NULL  ,
   IDE INTEGER NOT NULL  ,
   IDCAT INTEGER NOT NULL  ,
   NOMM VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MOYEN_TRANSPORT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MOYEN_TRANSPORT_EMPLOYEUR
     ON MOYEN_TRANSPORT (IDE ASC);

CREATE  INDEX I_FK_MOYEN_TRANSPORT_CATEGORIE
     ON MOYEN_TRANSPORT (IDCAT ASC);

# -----------------------------------------------------------------------------
#       TABLE : MESSAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MESSAGE
 (
   IDME INTEGER NOT NULL  ,
   IDA SMALLINT NOT NULL  ,
   IDE INTEGER NOT NULL  ,
   CONTENUME VARCHAR(128) NOT NULL  ,
   DATEME DATETIME NOT NULL  
   , PRIMARY KEY (IDME) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MESSAGE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MESSAGE_ADMINISTRATEUR
     ON MESSAGE (IDA ASC);

CREATE  INDEX I_FK_MESSAGE_ETUDIANT
     ON MESSAGE (IDE ASC);

# -----------------------------------------------------------------------------
#       TABLE : CLASSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLASSE
 (
   IDC INTEGER NOT NULL  ,
   NOMC VARCHAR(128) NOT NULL  ,
   DIPLOMEC VARCHAR(128) NOT NULL  ,
   SALLEC VARCHAR(128) NOT NULL  
   , PRIMARY KEY (IDC) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CATEGORIE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CATEGORIE
 (
   IDCAT INTEGER NOT NULL  ,
   LIBELLECAT VARCHAR(128) NULL  
   , PRIMARY KEY (IDCAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PLANNING
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PLANNING
 (
   IDEMPT SMALLINT NOT NULL  ,
   IDC INTEGER NOT NULL  ,
   JOURSEMPT VARCHAR(128) NULL  
   , PRIMARY KEY (IDEMPT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PLANNING
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PLANNING_CLASSE
     ON PLANNING (IDC ASC);

# -----------------------------------------------------------------------------
#       TABLE : BILLET_DE_RETARD
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS BILLET_DE_RETARD
 (
   IDE INTEGER NOT NULL  ,
   IDB INTEGER NOT NULL  ,
   IDR INTEGER NOT NULL  
   , PRIMARY KEY (IDE,IDB,IDR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE BILLET_DE_RETARD
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_BILLET_DE_RETARD_ETUDIANT
     ON BILLET_DE_RETARD (IDE ASC);

CREATE  INDEX I_FK_BILLET_DE_RETARD_BILLET_RETARD
     ON BILLET_DE_RETARD (IDB ASC);

CREATE  INDEX I_FK_BILLET_DE_RETARD_RETARD
     ON BILLET_DE_RETARD (IDR ASC);

# -----------------------------------------------------------------------------
#       TABLE : EMPRUNTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EMPRUNTER
 (
   IDE INTEGER NOT NULL  ,
   IDM INTEGER NOT NULL  
   , PRIMARY KEY (IDE,IDM) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE EMPRUNTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_EMPRUNTER_ETUDIANT
     ON EMPRUNTER (IDE ASC);

CREATE  INDEX I_FK_EMPRUNTER_MOYEN_TRANSPORT
     ON EMPRUNTER (IDM ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE RETARD 
  ADD FOREIGN KEY FK_RETARD_INCIDENT (IDI)
      REFERENCES INCIDENT (IDI) ;


ALTER TABLE ETUDIANT 
  ADD FOREIGN KEY FK_ETUDIANT_CLASSE (IDC)
      REFERENCES CLASSE (IDC) ;


ALTER TABLE INCIDENT 
  ADD FOREIGN KEY FK_INCIDENT_FLUX_KSS (IDF)
      REFERENCES FLUX_KSS (IDF) ;


ALTER TABLE INCIDENT 
  ADD FOREIGN KEY FK_INCIDENT_MOYEN_TRANSPORT (IDM)
      REFERENCES MOYEN_TRANSPORT (IDM) ;


ALTER TABLE JOURNEE 
  ADD FOREIGN KEY FK_JOURNEE_PLANNING (IDEMPT)
      REFERENCES PLANNING (IDEMPT) ;


ALTER TABLE MOYEN_TRANSPORT 
  ADD FOREIGN KEY FK_MOYEN_TRANSPORT_EMPLOYEUR (IDE)
      REFERENCES EMPLOYEUR (IDE) ;


ALTER TABLE MOYEN_TRANSPORT 
  ADD FOREIGN KEY FK_MOYEN_TRANSPORT_CATEGORIE (IDCAT)
      REFERENCES CATEGORIE (IDCAT) ;


ALTER TABLE MESSAGE 
  ADD FOREIGN KEY FK_MESSAGE_ADMINISTRATEUR (IDA)
      REFERENCES ADMINISTRATEUR (IDA) ;


ALTER TABLE MESSAGE 
  ADD FOREIGN KEY FK_MESSAGE_ETUDIANT (IDE)
      REFERENCES ETUDIANT (IDE) ;


ALTER TABLE PLANNING 
  ADD FOREIGN KEY FK_PLANNING_CLASSE (IDC)
      REFERENCES CLASSE (IDC) ;


ALTER TABLE BILLET_DE_RETARD 
  ADD FOREIGN KEY FK_BILLET_DE_RETARD_ETUDIANT (IDE)
      REFERENCES ETUDIANT (IDE) ;


ALTER TABLE BILLET_DE_RETARD 
  ADD FOREIGN KEY FK_BILLET_DE_RETARD_BILLET_RETARD (IDB)
      REFERENCES BILLET_RETARD (IDB) ;


ALTER TABLE BILLET_DE_RETARD 
  ADD FOREIGN KEY FK_BILLET_DE_RETARD_RETARD (IDR)
      REFERENCES RETARD (IDR) ;


ALTER TABLE EMPRUNTER 
  ADD FOREIGN KEY FK_EMPRUNTER_ETUDIANT (IDE)
      REFERENCES ETUDIANT (IDE) ;


ALTER TABLE EMPRUNTER 
  ADD FOREIGN KEY FK_EMPRUNTER_MOYEN_TRANSPORT (IDM)
      REFERENCES MOYEN_TRANSPORT (IDM) ;

