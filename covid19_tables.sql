
CREATE TABLE Members(

		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(50),
		last_name VARCHAR(50),
		username VARCHAR(50),
		password VARCHAR(50),
		email VARCHAR(50)
	);

CREATE TABLE Users(
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(50),
		password VARCHAR(50),
		email VARCHAR(20)
	);

CREATE TABLE Questions(

		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		question VARCHAR(100),
		facteur DECIMAL
	)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;

CREATE TABLE Diagnostics(

		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		id_user INT UNSIGNED,
		question VARCHAR(100),
		responce VARCHAR(4),
		facteur DECIMAL,
		FOREIGN KEY(id_user) REFERENCES Users(id),
		FOREIGN KEY(facteur) REFERENCES Questions(facteur),
		FOREIGN KEY(question) REFERENCES Questions(question)

	)ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE CovidChart(
		country_affected INT,
		people_infected INT,
		death_people INT,
		overcomed_people INT
	);


CREATE TABLE Contacts(

	id INT UNSIGNED PRIMARY KEY,
	id_user INT UNSIGNED,
	full_name VARCHAR(50),
	mail VARCHAR(50),
	message VARCHAR(1000),
	FOREIGN KEY(id_user) REFERENCES Users(id)

	);

CREATE TABLE Sugestions(

	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_user INT UNSIGNED,
	subject VARCHAR(100),
    FOREIGN KEY(id_user) REFERENCES Users(id)

	);

