

CREATE DATABASE  IF NOT EXISTS capstoneproj;
use capstoneproj;

CREATE TABLE role (
  role_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(255) NOT NULL,
  access_lvl int NOT NULL
);

CREATE TABLE users (
  user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstName varchar(255) NOT NULL,
  lastName varchar(255) NOT NULL,
  email varchar(255),
  phone varchar(255),
  password varchar(255),
  DOB date,
  role int,

  FOREIGN KEY (role)
    REFERENCES role(role_id)
    ON DELETE CASCADE
);

CREATE TABLE inventory (
  product_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name varchar(255),
  product_desc varchar(255),
  quanity int,
  product_cost decimal(10,2),
  product_price decimal(10,2),
  in_stock BOOLEAN,
)

CREATE TABLE cart (

  user_id int,
  FOREIGN KEY (user_id)
    REFERENCES users(user_id)
    ON DELETE CASCADE
)
