use cars;
CREATE TABLE IF NOT EXISTS cars.users(
    id int PRIMARY KEY auto_increment,
    name varchar(255), 
    surname varchar(255), 
    dni varchar(255) NOT NULL, 
    carnet boolean, 
    password varchar(255),
    email varchar(255)
);

CREATE TABLE IF NOT EXISTS cars.cars( 
	name varchar(255), 
	typeDrive varchar(50),
	fuel varchar(50), 
	id int PRIMARY KEY,
	available boolean
);

ALTER TABLE cars 
RENAME COLUMN name TO brand;

ALTER TABLE cars 
ADD COLUMN model varchar(50) AFTER available,
ADD COLUMN year int(4) AFTER model, 
ADD COLUMN price DOUBLE AFTER year;