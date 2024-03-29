CREATE TABLE films (
films_id SERIAL PRIMARY KEY,
films_date date, 
films_nom varchar(40) ,
films_realisateur varchar(30));


INSERT INTO films ( films_date, films_nom, films_realisateur) VALUES
('2008-04-30', 'Iron Man', 'Jon Favreau'),
('2008-07-23', 'L''Incroyable Hulk', 'Louis Leterrier'),
( '2010-04-28', 'Iron Man 2', 'Jon Favreau'),
( '2011-04-27', 'Thor', 'Kenneth Branagh'),
( '2011-08-17', 'Captain America First Avengers', 'Joe Johnston'),
( '2012-04-25', 'Avengers', 'Joss Whedon'),
( '2013-04-24', 'Iron Man 3', 'Shane Black'),
('2013-10-30', 'Thor le Mondedes ténebres', 'Alan Taylor'),
('2014-03-26', 'Captain America le soldat de l''hiver', 'Anthony et Joe Russo'), 
('2014-08-13', 'Les gardiens de la galaxie', 'James Gunn'),
( '2015-04-22', 'Avengers l''ère d''Ultron', 'Joss Whedon'),
('2015-07-14', 'Ant Man', 'Peyton Reed'),
( '2016-04-27', 'Captain America Civil War', 'Anthony et Joe Russo'), 
( '2016-10-26', 'Doctor Strange', 'Scott Derrickson'),
( '2017-04-26', 'Les gardiens de la galaxie volume 2', 'James Gunn'),
( '2017-12-07', 'Spider Man Homecoming', 'Jon Watts'),
( '2017-10-25', 'Thor Ragnarok', 'Taika Waititi'),
( '2018-02-14', 'Black Panther', 'Ryan Coogler'),
( '2018-04-25', 'Avengers Infinity War', 'Anthony et Joe Russo'),
( '2018-07-18', 'Ant Man et la Guêpe', 'Peyton Reed');

CREATE TABLE acteurs (
acteurs_id SERIAL PRIMARY KEY,
acteurs_nom varchar(40) ,
acteurs_sexe varchar(1) );

INSERT INTO acteurs ( acteurs_nom, acteurs_sexe) VALUES
( 'Samuel L. Jackson', 'M'),
( 'Robert Downey Jr', 'M'),
( 'Edward Norton', 'M'),
( 'Chris Hemsworth', 'M'),
( 'Nathalie Portman',  'F'),
( 'Tom Hiddleston', 'M'),
( 'Anthony Hopkins', 'M'),
( 'Chris Evans', 'M'),
( 'Hayley Atwell', 'F'),
( 'Sebastian Stan', 'M'),
( 'Mark Ruffalo', 'M'),
( 'Scarlett Johansson', 'F'),
( 'Jeremy Renner', 'M'),
( 'Gwyneth Paltrow', 'F'),
( 'Terrence Howard', 'M'),
( 'Liv Tyler', 'M'),
( 'Don Cheadle', 'M'),
( 'Ben Kigsley', 'M'),
( 'Idris Elba', 'M'),
( 'Anthony Mackie', 'M'),
( 'Emily VanCamp', 'F'),
( 'Chris Pratt', 'M'),
( 'Zoe Saldana', 'F'),
( 'David Bautista', 'M'),
( 'Michael Roker', 'M'),
( 'Karen Gillan', 'F'),
( 'Aaron Taylor-Johnson', 'M'),
('Elizabeth Olsen', 'F'),
( 'Paul Rudd', 'M'),
('Michael Douglas', 'M'),
( 'Evangeline Lilly', 'F'),
( 'Chadwick Boseman', 'M'),
( 'Paul Bettany', 'M'),
( 'Tom Holland', 'M'),
( 'Benedict Cumberbatch', 'M'),
('Benedict Wong', 'M'),
( 'Pom Klementieff', 'F'),
( 'Michael Keaton', 'M'),
( 'Cate Blanchett', 'F'),
( 'Tessa Thompson', 'F'),
( 'Lupita Nyong''o', 'F'),
( 'Danai Gurira', 'F'),
( 'Michael B. Jordan', 'M'),
( 'Martin Freeman', 'M'),
( 'Daniel Kaluuya', 'M'),
( 'Letita Wright', 'F'),
('Winston Duke', 'M'),
( 'Peter Dinklage', 'M'),
( 'Ross Marquand', 'M'),
( 'Benicio del Toro', 'M'),
( 'Josh Brolin', 'M'),
( 'Vin Diesel', 'M'),
( 'Bradley Cooper', 'M');

CREATE TABLE role (
role_id SERIAL  PRIMARY KEY ,
role_nom varchar(80),
acteurs_id int,
FOREIGN KEY (acteurs_id) REFERENCES acteurs(acteurs_id),
films_id int,
FOREIGN KEY (films_id) REFERENCES films(films_id) );

INSERT INTO role ( role_nom, acteurs_id, films_id) VALUES
( 'Nick Fury', '1', '1'),
( 'Tony Stark / Iron Man', '2', '1'),
( 'Pepper Pots', '14', '1'),
( 'James Rhodey Rhodes', '15', '1'),
( 'Bruce Banner / Hulk', '3', '2'), 
( 'Elizabeth "Betty" Ross', '16', '2'),
( 'Nick Fury', '1', '3'),
( 'Tony Stark / Iron Man', '2', '3'), 
( 'Pepper Potts', '14', '3'),
( 'James Rhodey Rhodes', '17', '3'),
( 'Natasha Romanoff / Black Widow', '12', '3'),
('Nick Fury', '1', '4'),
( 'Thor', '4', '4'), 
( 'Jane Foster', '5', '4'),
( 'Loki', '6', '4'),
( 'Odin', '7', '4'),
( 'Nick Fury', '1', '5'),
( 'Steve Rogers / Captain America', '8', '5'), 
( 'Peggy Carter', '9', '5'),
('James Bucky Barnes', '10', '5'),
('Nick Fury', '1', '6'),
('Ton Stark / Iron Man', '2', '6'), 
('Steve Rogers / Captain America', '8', '6'), 
('Bruce Banner / Hulk', '11', '6'),
('Thor', '4', '6'),
('Natasha Romanoff / Black Widow', '12', '6'),
('Clint Barton / Hawkeye', '13', '6'),
('Loki', '6', '6'),
('Pepper Potts', '14', '6'),
('Tony Stark / Iron Man', '2', '7'), 
('Pepper Potts', '14', '7'),
('James Rhodey Rhodes / War Machine / Iron Patriot', '17', '7'),
('Trevor Slattery / le Mandarin', '18', '7'),
('Thor', '4', '8'), 
('Loki', '6', '8'),
('Odin', '7', '8'),
('Heimdall', '19', '8'),
('Jane Foster', '5', '8'),
('Nick Fury', '1', '9'),
( 'Steve Rogers / Captain America', '8', '9'), 
( 'Natasha Romanoff / Black Widow', '12', '9'),
( 'James Bucky Barnes / le Soldat de l''hiver', '10', '9'),
( 'Sam Wilson / le Faucon', '20', '9'),
( 'Sharon Carter', '21', '9'), 
( 'Peter Jason Quill / Star-Lord', '22', '10'), 
( 'Gamora', '23', '10'),
( 'Drax le Destructeur', '24', '10'),
( 'Groot', '52', '10'),
( 'Rocket Raccoon', '53', '10'),
( 'Yondu Udonta', '25', '10'),
( 'Nébula', '26', '10'), 
('Nick Fury', '1', '11'),
( 'Tony Stark / Iron Man', '2', '11'), 
( 'Steve Rogers / Captain America', '8', '11'),
( 'Bruce Banner / Hulk', '11', '11'),
( 'Thor', '4', '11'),
( 'Natasha Romanoff / Black Widow', '12', '11'),
( 'Clint Barton / Hawkeye', '13', '11'),
( 'James Rhodey Rhodes / War Machine', '17', '11'),
( 'Pietro Maximoff', '27', '11'),
( 'Vision', '33', '11'),
( 'Jarvis', '33', '11'), 
( 'Sam Wilson / le Faucon', '20', '11'),
( 'Peggy Carter', '9', '11'),
( 'Heimdall', '19', '11'),
( 'Scott Lang / Ant-Man', '29', '12'), 
('Dr Henry Hank Pym', '30', '12'),
( 'Hope Van Dyne', '31', '12'),
( 'Steve Rogers / Captain America', '8', '13'), 
('Tony Stark / Iron Man', '2', '13'),
( 'Natasha Romanoff / Black Widow', '12', '13'),
( 'Bucky Barnes / le Soldat de l''hiver', '10', '13'),
( 'Sam Wilson / le Faucon', '20', '13'),
( 'James Rhodey Rhodes / War Machine', '17', '13'),
( 'Clint Barton / Hawkeye', '13', '13'),
( 'T''Challa / Black Panther', '32', '13'),
( 'Vision', '33', '13'),
('Wanda Maximoff', '28', '13'),
( 'Scott Lang / Ant-Man', '29', '13'),
( 'Sharon Carter', '21', '13'),
( 'Peter Parker / Spider-Man', '34', '13'),
('Stephen Strange / Doctor Strange', '35', '14'), 
('Wong', '36', '14'),
( 'Peter Jason Quill', '22', '15'),
( 'Gamora', '23', '15'),
( 'Drax le Destructeur', '24', '15'),
( 'Groot', '52', '15'),
( 'Rocket Raccoon', '53', '15'),
( 'Yondu Udonta', '25', '15'),
( 'Nébula', '26', '15'),
( 'Mantis', '37', '15'),
( 'Peter Parker / Spider-Man', '34', '16'), 
( 'Adrian Toomes / le Vautour', '38', '16'),
( 'Tony Stark / Iron Man', '2', '16'),
( 'Thor', '4', '17'),
( 'Bruce Banner / Hulk', '11', '17'),
( 'Loki', '6', '17'),
( 'Hela', '39', '17'),
( 'Heimdall', '19', '17'),
( 'la Valkyrie', '40', '17'),
( 'Odin', '7', '17'),
( 'T''Challa / Black Panther', '32', '18'), 
( 'Nakia', '41', '18'),
('Okoye', '42', '18'),
( 'N''Jadaka / Erik Killmonger', '43', '18'),
( 'Everett K. Ross', '44', '18'),
( 'W''Kabi', '45', '18'),
( 'Shuri', '46', '18'),
( 'M''Baku', '47', '18'),
( 'Nick Fury', '1', '19'),
( 'Tony Stark / Iron Man', '2', '19'), 
( 'Wanda Maximoff', '28', '19'),
( 'Steve Rogers / Captain America', '8', '19'),
( 'Bruce Banner / Hulk', '11', '19'),
( 'Thor', '4', '19'),
( 'Natasha Romanoff / Black Widow', '12', '19'),
( 'Peter Jason Quill / Star-Lord', '22', '19'),
( 'Stephen Strange / Doctor Strange', '35', '19'),
( 'T''Challa / Black Panther', '32', '19'),
( 'Peter Parker / Spider-Man', '34', '19'),
( 'Gamora', '23', '19'),
( 'Drax le Destructeur', '24', '19'),
( 'Rocket Raccoon', '53', '19'),
( 'Groot', '52', '19'),
( 'Vision', '33', '19'),
( 'James Rhodey Rhodes / War Machine', '17', '19'),
( 'Jame Bucky Barnes', '10', '19'),
( 'Sam Wilson / le Faucon', '20', '19'),
( 'Nébula', '26', '19'),
( 'Okoye', '42', '19'),
( 'Shuri', '46', '19'),
( 'Wong', '36', '19'),
( 'Mantis', '37', '19'),
( 'Loki', '6', '19'),
( 'le nain Eitri', '48', '19'),
( 'M''Baku', '47', '19'),
( 'Pepper Potts', '14', '19'),
( 'Crâne Rouge', '49', '19'),
( 'Heimdall', '19', '19'),
( 'Taneleer Tivan / le Collectionneur', '50', '19'),
( 'Thanos', '51', '19'),
( 'Scott Lang / Ant-Man', '29', '20'), 
( 'Hope Van Dyne / la Guêpe', '31', '20');
