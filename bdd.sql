DROP TABLE  languages cascade; 
DROP TABLE  isCoded cascade; 
DROP TABLE  projects cascade; 
DROP TABLE  authors cascade; 
DROP TABLE  createBy cascade ; 
DROP TABLE  skill ; 


CREATE TABLE skill(
sk_id serial primary key,
sk_name varchar(40)
);





CREATE TABLE languages(
	languages_id serial primary key, 
	languages_name varchar(30)
); 

CREATE TABLE projects(
	projects_id serial primary key, 
	projects_title varchar(20),
	projects_intr varchar(30),  
	projects_description text, 
	projects_creationDate date
); 

CREATE TABLE isCoded(
	languages_id integer references languages(languages_id), 
	projects_id integer references projects(projects_id)
); 


CREATE TABLE authors(
	authors_id serial primary key, 
	authors_name varchar(50), 
	authors_contact varchar(70)
); 


CREATE TABLE createBy(
	projects_id integer references projects(projects_id), 
	authors_id integer references authors(authors_id)
); 


insert into languages values (default, 'Php'); 
insert into languages values (default, 'Html'); 
insert into languages values (default, 'Css'); 
insert into languages values (default, 'Sass'); 
insert into languages values (default, 'NodeJs'); 
insert into languages values (default, 'Java'); 
insert into languages values (default, 'Python'); 
insert into languages values (default, 'Postgresql');
insert into languages values (default, 'JavaScript'); 
insert into languages values (default, 'Scala');


insert into authors values (default, 'A.Ilian','https://iazz.fr/');
insert into authors values (default, 'Saint-Fleurant Jonathan','https://jonathanstf.site');
insert into authors values (default, 'Saidoun Ferhat','https://www.linkedin.com/in/ferhat-saidoun-84ab84149/');
insert into authors values (default, 'Aissiou Haris','https://www.linkedin.com/in/haris-aissiou-88978118a/');
insert into authors values (default, 'Joy Matthew','https://www.linkedin.com/in/matthew-joy-76808719b/');


insert into projects values (default, 'Threes Game','Reletable to 2048' ,
' This game is reletable to 2048. On a grid, your goal is to fuse tiles and get the better score. This was my very first project. 
I coded this in my first semester of College. In this project we added some features like a menu, a game saver and other. ' ,'12-20-2019');

insert into projects values (default, 'Resiconnect','API Rest' ,'This is one of my reletable project. This project was created for a start-up called Looraki. Resiconnect is an applciation that helps to manage the water consumption of residences. The main goal was to make an API REST in NodeJs. With our team we fisrt built the database in Postgresql (6NF) and then we made the API. We also created a front-end wich was not required.','01-10-2021');
insert into projects values (default, 'Portfolio','This website' ,'This website allowed me to increase my PHP skills. In fact, 
I used the MVC Architecture, a connection with a PSQL database, JavaScript. An admin interface is in development, this will allowed me 
to add, delete and edit my projects. ' ,'01-02-2021');
insert into projects values (default, 'Estate Agency','Java Application' ,'This is a self made project. This project is an applcation
	that allow an estate agency to manage their clients and products. This application is in progress. It is coded in Java with the 
	MVC architecture and it is connected with a database. The graphic interface is not ready yet.' ,'02-01-2021');
insert into projects values (default, 'MMORPG','Simple Java Game' ,'This was my first project in Java. This is why this project is not good as 
the others...It was made by myself.','06-08-2020') ;


insert into createBy values(1,5);
insert into createBy values(2,1);
insert into createBy values(2,2);
insert into createBy values(2,3);
insert into createBy values(2,4);
insert into createBy values(4,2);




insert into isCoded values(7,1);
insert into isCoded values(5,2);
insert into isCoded values(8,2);
insert into isCoded values(1,3);
insert into isCoded values(2,3);
insert into isCoded values(3,3);
insert into isCoded values(8,3);
insert into isCoded values(6,4);
insert into isCoded values(8,4);
insert into isCoded values(6,5);
insert into isCoded values(9,2);
insert into isCoded values(9,3);
	

insert into skill values(default,'Python');
insert into skill values(default,'Java');
insert into skill values(default,'Html');
insert into skill values(default,'Css');
insert into skill values(default,'Php');
insert into skill values(default,'Postgresql');
insert into skill values(default,'Sass');
insert into skill values(default,'NodeJs');



/*
update languages set languages_name = 'php' where languages_id = 1 ; 
update languages set languages_name = 'html' where languages_id = 2 ; 
update languages set languages_name = 'css' where languages_id = 3 ; 
update languages set languages_name = 'sass' where languages_id = 4 ; 
update languages set languages_name = 'nodejs' where languages_id = 5 ; 
update languages set languages_name = 'java' where languages_id = 6 ; 
update languages set languages_name = 'python' where languages_id = 7 ;
	update languages set languages_name = 'postgresql' where languages_id = 8 ; 
		update languages set languages_name = 'javascript' where languages_id = 9 ;
		update languages set languages_name = 'scala' where languages_id = 10 ;  
			*/