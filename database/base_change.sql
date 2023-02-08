drop database e_change;
create database e_change;
use e_change;


create table user(
    id_user int primary key auto_increment,
     user_name varchar(30),
     user_email varchar(30),
     user_pwd varchar(30),
     est_admin boolean
);

create table categorie(
     id_categorie int primary key auto_increment,
     nom_categorie varchar(30)
);

create table objet(
     id_objet int primary key auto_increment,
     id_user int,
     id_categorie int,
     description_text varchar(1000),
     prix float ,

    foreign key (id_user) references user(id_user),
    foreign key (id_categorie) references categorie(id_categorie) 
);

create table photo(
     id_photo int primary key auto_increment,
     id_objet int,
     nom_photo varchar(30),

    foreign key (id_objet) references objet(id_objet)
);



create table echange(
     id_echange int primary key auto_increment,
     id_objet_choix int ,
     id_objet_echange int,
     date_envoie datetime,
     date_acceptation datetime,
     id_etat int,
     foreign key (id_objet_choix) references objet(id_objet),
     foreign key (id_objet_echange) references objet(id_objet),
     foreign key (id_etat) references etat(id_etat)
);

create table etat(
     id_etat int primary key auto_increment,
     valeur int,
     signe varchar(30)
);



create table confirmation(
     id_confirmation int primary key auto_increment,
     id_echange int,
     id_etat int,
     foreign key (id_echange) references echange(id_echange),
     foreign key(id_etat) references etat(id_etat)
);

insert into etat values(null,0,'refuse');
insert into etat values(null,10,'attente');
insert into etat values(null,20,'accepte');

insert into 
insert into photo values(null,1,'image1.jpg');
insert into photo values(null,1,'image2.jpg');
insert into photo values(null,1,'image3.jpg');
insert into photo values(null,2,'image1.jpg');
insert into photo values(null,8,'image2.jpg');

insert into user values(null,'Megane','megane@gmail.com','meg',true);
insert into user values(null,'Mitantsoa','mmitantsoa@gmail.com','mita',true);
insert into user values(null,'Antonio','antonio@gmail.com','okey',false);
insert into user values(null,'Tsiresy','tsiresy@gmail.com','tsix',false);

insert into categorie values(null,'vetement');
insert into categorie values(null,'mobilier');
insert into categorie values(null,'electro');
insert into categorie values(null,'piece_meca');

insert into objet values(null,4,1,'chaussure nike(air force)',55.2);
insert into objet values(null,3,2,'table manger(un table et 4 sieges avec des coussin)',122.0);
insert into objet values(null,2,3,'smartphone samsung(galaxy s7)',105.7);
insert into objet values(null,1,4,'filtre a essence(Bmw x5)',57.4);
insert into objet values(null,1,1,'blouson adidas(couleur noir et de bande blanche)',43.9);
insert into objet values(null,2,2,'ciment(2 ciment holcim)',76.1);
insert into objet values(null,3,3,'USB(lenovo 64GB)',25.2);
insert into objet values(null,4,4,'echapment (v8 4T)',43.8);

insert into photo values(null,1,'../assets/Camera Roll/kitro.jpg');
insert into photo values(null,2,'../assets/Camera Roll/table.jpg');
insert into photo values(null,3,'../assets/Camera Roll/galaxy.jpg');
insert into photo values(null,4,'../assets/Camera Roll/filtre.jpg');
insert into photo values(null,5,'../assets/Camera Roll/blouson.jpg');
insert into photo values(null,6,'../assets/Camera Roll/ciment.jpg');
insert into photo values(null,7,'../assets/Camera Roll/usb.jpg');
insert into photo values(null,8,'../assets/Camera Roll/echppe.jpg');
insert into 
-- TENA IZYYYYYYYYY
create or replace view photo_par_user as
select objet.id_user,photo.nom_photo
from photo
join objet
on photo.id_objet=objet.id_objet;


where id_user=4;



-- fvghbnjmk
create or replace view liste_objet as

select objet.id_objet,objet.id_user,categorie.id_categorie,categorie.nom_categorie,photo.nom_photo,objet.description_text,objet.prix
from photo
join objet
on photo.id_objet=objet.id_objet
join categorie
on objet.id_categorie=categorie.id_categorie
where id_user=3
group by categorie.id_categorie;
-- dfghjn





create or replace view liste_objet as
select objet.id_objet,objet.id_user,categorie.id_categorie,categorie.nom_categorie,objet.description_text,objet.prix
from photo
join objet
on photo.id_objet=objet.id_objet
join categorie
on objet.id_categorie=categorie.id_categorie
where id_user=1
group by categorie.id_categorie;


-- LISTE DES OBJETS PAS A MOI

select*
from objet
join photo 
on objet.id_objet=photo.id_objet
group by objet.id_user,objet.id_categorie;


create or replace view notMyObject as


select objet.id_objet,objet.id_user,categorie.nom_categorie,categorie.id_categorie,objet.description_text,objet.prix,photo.nom_photo from objet join photo on objet.id_objet=photo.id_objet join categorie on objet.id_categorie=categorie.id_categorie where id_user != %d group by objet.id_user,categorie.id_categorie,categorie.nom_categorie;


select*from notMyObject where id_user != 4;