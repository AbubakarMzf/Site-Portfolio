<h3> Quelques tables de la base de donnée connectés à mon site. Il y en a en réalité beaucoup plus.</h3> 


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









