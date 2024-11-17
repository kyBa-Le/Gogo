create table if not exists cultural_location (
	id int AUTO_INCREMENT PRIMARY KEY,
	name nvarchar(255),
    region varchar(255),
    image_url varchar(255),
    description text
);
create table if not exists cuisines (
	id int AUTO_INCREMENT PRIMARY KEY,
    name nvarchar(255),
    description text,
    image_url nvarchar(255),
    location_id int,
    CONSTRAINT fk_cuisines_location FOREIGN KEY (location_id) REFERENCES cultural_location(id)
);
create table if not exists events (
	id int AUTO_INCREMENT PRIMARY KEY,
    name nvarchar(255),
    event_date Date,
    description text,
    location_id int,
    CONSTRAINT fk_events_location FOREIGN KEY (location_id)  REFERENCES cultural_location(id)

);
 create table if not exists dishes (
     id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     image_url nvarchar(255),
     cuisines_id int,
     CONSTRAINT fk_dishes_cuisines FOREIGN KEY (cuisines_id) REFERENCES cuisines(id)
 );

 create table if not exists tour (
 	id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     started_date date,
     completed_date date,
     price int,
     image_url nvarchar(255),
     location_id int,
     CONSTRAINT fk_tour_location FOREIGN KEY (location_id) REFERENCES cultural_location(id)
 );
 create table if not exists users (
     id int AUTO_INCREMENT PRIMARY KEY,
     email nvarchar(255),
     username nvarchar(50),
     password nvarchar(255),
     fullname nvarchar(50),
     phone varchar(15),
     created_date date DEFAULT CURDATE()
 );
 create table if not exists reviews (
     id int AUTO_INCREMENT PRIMARY KEY,
     detail text,
     rating int(5),
     review_date date DEFAULT CURRENT_DATE(),
     user_id int,
     CONSTRAINT fk_reviews_users FOREIGN KEY (user_id) REFERENCES users(id)
 );
