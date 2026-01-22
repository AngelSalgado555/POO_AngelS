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
    id int PRIMARY KEY auto_increment,
    brand varchar(50),
    drive varchar(50),
    fuel varchar(50),
    available boolean,
    model varchar(50),
    year int, 
    price float
);

-- ALTER TABLE cars 
-- RENAME COLUMN name TO brand;

-- ALTER TABLE cars.cars
-- ADD COLUMN model varchar(50) AFTER available,
-- ADD COLUMN year int AFTER model, 
-- ADD COLUMN price DOUBLE AFTER year;