drop database Mairie;
create database Mairie;
use Mairie;

create table cantine
(idC int(3) not null,
ville varchar(50),
codePostal char(5),
prix float,
primary key(idC)
);
	create table privee
	(idC int(3) not null,
	ville varchar(50),
	codePostal char(5),
	prix float,
	bourse varchar(50),
	primary key(idC)
	);
	create table publique
	(idC int(3) not null,
	ville varchar(50),
	codePostal char(5),
	prix float,
	reduction float,
	primary key(idC)
	);

create table loisir
(idL int(3) not null auto_increment,
libelle varchar(50),
lieu varchar(50),
primary key(idL)
);
create table personne
(idP int(3) not null auto_increment,
pseudo varchar(20) unique,
mdp varchar(50),
nom varchar(20),
prenom varchar(20),
adresse varchar(50),
tel varchar(20),
cp char(5),
email varchar(20),
datenaiss date,
sexe enum("homme","femme"),
fonction varchar(50),
primary key(idP)
);
create table Bon
(idB int(3) not null auto_increment,
primary key(idB)
);
create table evenement
(idEV int(3) not null,
lieu varchar(50),
libelle varchar(50),
dateEV date,
primary key(idEV)
);
	create table interieur
	(idEV int(3) not null,
	lieu varchar(50),
	libelle varchar(50),
	dateEV date,
	superficie float,
	primary key(idEV)
	);
	
	create table exterieur
	(idEV int(3) not null,
	lieu varchar(50),
	libelle varchar(50),
	dateEV date,
	meteo varchar(20),
	primary key(idEV)
	);
	
create table association
(idA int(3) not null auto_increment,
libelleA varchar(50),
adresse varchar(50),
tel char(10),
codeP int,
dateA date,
primary key(idA)
);
create table enfants
(idE int(3) not null auto_increment,
idP int(3) not null,
idC int(3) not null,
nomE varchar(20),
prenomE varchar(20),
sexe enum("fille","garçon"),
primary key(idE),
foreign key(idP) references personne(idP),
foreign key(idC) references cantine(idC)
);
create table actes
(idF int(3) not null auto_increment,
idP int(3) not null,
mariage varchar(20),
naissance varchar(20),
deces varchar(20),
primary key(idF),
foreign key(idP) references personne(idP)
);
create table participer
(idL int(3) not null,
idP int(3) not null,
datePL date,
primary key(idL,idP),
foreign key(idL) references loisir(idL),
foreign key(idP) references personne(idP)
);
create table inscription
(idA int(3) not null,
idP int(3) not null,
dateIns date,
montant float,
primary key(idA,idP, dateIns),
foreign key(idA) references association(idA),
foreign key(idP) references personne(idP) 
);
create table assister
(idP int(3) not null,
idEV int(3) not null,
dateEV date,
primary key(idP,idEV, dateEV),
foreign key(idEV) references evenement(idEV),
foreign key(idP) references personne(idP)
);
create table mariage
(idP1 int(3) not null,
idP2 int(3) not null,
dateMariage date not null,
datedivorce date,
primary key(idP1,idP2,dateMariage),
foreign key(idP1) references personne(idP),
foreign key(idP2) references personne(idP)
);

create table admin
(numA int not null,
pseudo varchar(20),
mdp varchar(20) not null,
primary key(numA)
);

create view Vstat (lieu, nb_Evenement)
as select lieu, count(idEV)
from evenement
group by lieu;

create view Vassister (libelle, nbAssistants)
as select e.libelle, count(a.idP)
from evenement e, assister a
where e.idEV=a.idEV
group by e.libelle;

create table archivePrivee as select*from privee where 2=0; 
create table archivePublique as select*from publique where 2=0; 
create table archiveLoisir as select*from loisir where 2=0; 
create table archivePersonne as select*from personne where 2=0;
create table archiveBon as select*from bon where 2=0;
create table archiveExterieur as select*from exterieur where 2=0;
create table archiveInterieur as select*from interieur where 2=0;  
create table archiveEnfants as select*from enfants where 2=0;
create table archiveActes as select*from actes where 2=0;
create table archiveParticiper as select*from participer where 2=0;
create table archiveInscription as select*from inscription where 2=0;
create table archiveAssister as select*from assister where 2=0;
create table archiveMariage as select*from mariage where 2=0;        
create table archiveAsso as select*from association where 2=0; 


insert into loisir values(null, "concert", "Quincy");

INSERT INTO personne (idP,pseudo,mdp,nom,prenom,adresse,Tel,cp,email,datenaiss,sexe,fonction) 
VALUES (null,"kev", 123,"Henry","Kevin", "28 rue delacarte","0102030405",75000,"kevin@henry.fr","1996/01/04","homme","PDG"),
	   (null,"aud", 42,"Puechmaille","Audran","perpete les oies","0504030201",7500,"audran@puecmaille.fr","1996/02/02","femme","esclave");

insert into assister values
(1,1,"2021/02/02"),
(1,2,"2021/03/03"),
(2,1,"2021/02/02");

insert into loisir 
values(null,"libelle","lieu"),
	  (null,"cinema","brunoy");

insert into mariage(idP1,idP2,dateMariage,datedivorce) values (1,2,'2018/09/01','2019/01/01');

/*insert into evenement(idEV, lieu, libelle, dateEV) values (null, 'defense', 'fete', '2007/02/04');
	insert into interieur(idEV, lieu, libelle, dateEV, superficie) values (null, 'Bamaco', 'feteInterieur', '2008/03/05', 100);
	insert into exterieur(idEV, lieu, libelle, dateEV, meteo) values (null, 'defense', 'fete', '2007/02/04', "beau");*/

insert into association (idA,libelleA,adresse,tel,codeP, dateA) values 
(null, 'association1', 'adresse association', 0102030405, 75000, '2008/05/06'),
(null, 'association2', 'adresse 2', 0102030405, 75000, '2008/05/06'),
(null, 'une association', 'rue saint nicolas', 0102030405, 75000, '2008/05/06');

insert into actes (idF, idP, mariage, naissance, deces) values (null, 1, '2018/09/01','1997/01/04',null);

insert into enfants (idE, idP, idC, nomE, prenomE, sexe) values (null, 1, 1, 'ben', 'ocka', 'garçon');

insert into admin values (1,'kevin',123);

/*insert into evenement(idEV, lieu, libelle, DateEV) 
values (null, 'defense', 'fete', "2019-02-10"),
	   (null, 'E-sport', 'competition', "2019-02-10"),
	   (null, 'Paris 17', 'Concours de programmation', "2019-01-10"),
	   (null, 'Evry', 'Sprint 200m', "2019-01-10"),
	   (null, 'Antibes', 'Beach party', "2019-01-10"),
	   (null, 'Monaco', 'Piscine geante', "2019-03-10"),
	   (null, 'Normandie', 'Peche au gros', "2019-03-10"),
	   (null, 'Saint-Germain-en-Laye', 'Foot en salle', "2019-03-10"),
	   (null, 'Bercy', 'Concert', "2019-02-10");*/

	   




/* début de l'héritage de l'evenement */

drop trigger if exists interieurBeforeInsert;
delimiter //

create trigger interieurBeforeInsert
before insert on interieur
for each row
begin

	declare x, y, z int;

	set new.idEV = ifnull(new.idEV,1);

	select max(idEV) into x
	from interieur;
	if x =0 
	then 
		set new.idEV=x+1;
	end if ;
	if x>=new.idEV
	then
		set new.idEV=x+1;
	end if ;
	select count(*) into y from evenement where idEV = new.idEV ;
	if y = 0
	then
		insert into evenement values (new.idEV, new.lieu, new.libelle, new.dateEV);
	end if ;

	if y > 0
	then
		select max(idEV) into z from evenement;
		set new.idEV = z + 1;
		insert into evenement values (new.idEV, new.lieu, new.libelle, new.dateEV);
	end if ;
end //
delimiter ;




drop trigger if exists exterieurBeforeInsert;
delimiter //

create trigger exterieurBeforeInsert
before insert on exterieur
for each row
begin

	declare x, y, z int;

	set new.idEV = ifnull(new.idEV,1);

	select max(idEV) into x
	from exterieur;
	if x =0 
	then 
		set new.idEV=x+1;
	end if ;
	if x>=new.idEV
	then
		set new.idEV=x+1;
	end if ;
	select count(*) into y from evenement where idEV = new.idEV ;
	if y = 0
	then
		insert into evenement values (new.idEV, new.lieu, new.libelle, new.dateEV);
	end if ;


	if y > 0
	then
		select max(idEV) into z from evenement;
		set new.idEV = z + 1;
		insert into evenement values (new.idEV, new.lieu, new.libelle, new.dateEV);
	end if ;
end //
delimiter ;


drop trigger if exists evenementBeforeDelete;
delimiter //

create trigger evenementBeforeDelete
before delete on evenement
for each row
begin

	delete from interieur where idEV = old.idEV;
	delete from exterieur where idEV = old.idEV;

end //
delimiter ;


/* fin de l'héritage sur evenement */


insert into interieur values 
(null,'bowling', 'bonneuil', '1996-12-12', 10),
(null,'jouer','nice', '1997-11-11', 20 );
insert into exterieur values
(null, 'cinema', 'jura', '1998-10-10', 'bonne');



/* début de l'héritage sur cantine */

/* privee */

drop trigger if exists priveeBeforeInsert;
delimiter //

create trigger priveeBeforeInsert
before insert on privee
for each row
begin
	
	declare x, y, z int;

	set new.idC = ifnull(new.idC,1);

	select max(idC) into x
	from privee;
	if x =0 
	then 
		set new.idC=x+1;
	end if ;
	if x>=new.idC
	then
		set new.idC=x+1;
	end if ;
	select count(*) into y from cantine where idC = new.idC ;
	if y = 0
	then
		insert into cantine values (new.idC, new.ville, new.codePostal, new.prix);
	end if ;

	if y > 0
	then
		select max(idC) into z from cantine;
		set new.idC = z + 1;
		insert into cantine values (new.idC, new.ville, new.codePostal, new.prix);
	end if ;

end //

delimiter ;

drop trigger if exists priveeBeforeUpdate;
delimiter //

create trigger priveeBeforeUpdate
before update on privee
for each row
begin

	update cantine
	set ville = ifnull(new.ville, ville),
		codePostal = ifnull(new.codePostal, codePostal),
		prix = ifnull(new.prix, prix)
	where idC = new.idC;
	
end //

delimiter ;


/* publique */

drop trigger if exists publiqueBeforeInsert;
delimiter //

create trigger publiqueBeforeInsert
before insert on publique
for each row
begin
	
	declare x, y, z int;

	set new.idC = ifnull(new.idC,1);

	select max(idC) into x
	from publique;
	if x =0 
	then 
		set new.idC=x+1;
	end if ;
	if x>=new.idC
	then
		set new.idC=x+1;
	end if ;
	select count(*) into y from cantine where idC = new.idC ;
	if y = 0
	then
		insert into cantine values (new.idC, new.ville, new.codePostal, new.prix);
	end if ;

	if y > 0
	then
		select max(idC) into z from cantine;
		set new.idC = z + 1;
		insert into cantine values (new.idC, new.ville, new.codePostal, new.prix);
	end if ;
	

end //

delimiter ;

/* delete */

drop trigger if exists cantineBeforeDelete;
delimiter //

create trigger cantineBeforeDelete
before delete on cantine
for each row
begin

	delete from privee where idC = old.idC;
	delete from publique where idC = old.idC;

end //
delimiter ;



drop trigger if exists publiqueBeforeUpdate;
delimiter //

create trigger publiqueBeforeUpdate
before update on publique
for each row
begin

	update cantine
	set ville = ifnull(new.ville, ville),
		codePostal = ifnull(new.codePostal, codePostal),
		prix = ifnull(new.prix, prix)
	where idC = new.idC;
	
end //

delimiter ;


/* fin de l'héritage sur cantine */


insert into privee values 
(null, 'quincy', 80200, 17, "Oui"),
(null, 'brunoy', 91500, 20, "Non");
insert into publique values
(null, 'montgeron', 77300, 30, 20);

/* faire un trigger sur les dates */

drop trigger if exists personneBeforeInsert;
delimiter //

create trigger personneBeforeInsert
before insert on personne
for each row 
begin

if datediff(curdate(), new.datenaiss) < 0
then
	
	signal sqlstate '45000'

	set message_text='veuillez vérifier la date';

end if ;


end //

delimiter ;

/* triggers pour les archives *********************************************************************************************************************************************************************************************/

drop trigger if exists priveeBeforeDelete;
delimiter //

create trigger priveeBeforeDelete
before delete on privee
for each row 
begin
	insert into archivePrivee values (old.idC, old.ville, old.codePostal, old.prix);
end //

delimiter ;

drop trigger if exists publiqueBeforeDelete;
delimiter //

create trigger publiqueBeforeDelete
before delete on publique
for each row 
begin
	insert into archivePublique values (old.idC, old.ville, old.codePostal, old.reduction);
end //

delimiter ;

drop trigger if exists loisirBeforeDelete;
delimiter //

create trigger loisirBeforeDelete
before delete on loisir
for each row 
begin
	insert into archiveLoisir values (old.idL, old.libelle, old.lieu);
end //

delimiter ;

drop trigger if exists personneBeforeDelete;
delimiter //

create trigger personneBeforeDelete
before delete on personne
for each row 
begin
	insert into archivePersonne values (old.idP, old.pseudo, old.mdp, old.nom, old.prenom, old.adresse, old.tel, old.tel, old.cp, old.email, old.datenaiss, old.sexe, old.fonction);
end //

delimiter ;

drop trigger if exists bonBeforeDelete;
delimiter //

create trigger bonBeforeDelete
before delete on bon
for each row 
begin
	insert into archiveBon values (old.idB);
end //

delimiter ;

drop trigger if exists interieurBeforeDelete;
delimiter //

create trigger interieurBeforeDelete
before delete on interieur
for each row 
begin
	insert into archiveInterieur values (old.idEV, old.lieu, old.libelle, old.dateEV, old.superficie);
end //

delimiter ;

drop trigger if exists exterieurBeforeDelete;
delimiter //

create trigger exterieurBeforeDelete
before delete on exterieur
for each row 
begin
	insert into archiveExterieur values (old.idEV, old.lieu, old.libelle, old.dateEV, old.meteo);
end //

delimiter ;

drop trigger if exists associationBeforeDelete;
delimiter //

create trigger associationBeforeDelete
before delete on association
for each row 
begin
	insert into archiveAsso values (old.idA, old.libelleA, old.adresse, old.tel, old.codeP, old.dateA);
end //

delimiter ;

drop trigger if exists enfantsBeforeDelete;
delimiter //

create trigger enfantsBeforeDelete
before delete on enfants
for each row 
begin
	insert into archiveEnfants values (old.idE, old.idP, old.idC, old.nomE, old.prenomE, old.sexe);
end //

delimiter ;

drop trigger if exists actesBeforeDelete;
delimiter //

create trigger actesBeforeDelete
before delete on actes
for each row 
begin
	insert into archiveActes values (old.idF, old.idP, old.mariage, old.naissance, old.deces);
end //

delimiter ;

drop trigger if exists participerBeforeDelete;
delimiter //

create trigger participerBeforeDelete
before delete on participer
for each row 
begin
	insert into archiveParticiper values (old.idL, old.idP, old.datePL);
end //

delimiter ;

drop trigger if exists inscriptionBeforeDelete;
delimiter //

create trigger inscriptionBeforeDelete
before delete on inscription
for each row 
begin
	insert into archiveInscription values (old.idA, old.idP, old.dateIns, old.montant);
end //

delimiter ;

drop trigger if exists assisterBeforeDelete;
delimiter //

create trigger assisterBeforeDelete
before delete on assister
for each row 
begin
	insert into archiveAssister values (old.idP, old.idEV, old.dateEV);
end //

delimiter ;

drop trigger if exists mariageBeforeDelete;
delimiter //

create trigger mariageBeforeDelete
before delete on mariage
for each row 
begin
	insert into archiveMariage values (old.idP1, old.idP2, old.dateMariage, old.datedivorce);
end //

delimiter ;



