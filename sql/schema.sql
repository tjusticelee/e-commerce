
DROP TABLE IF EXISTS role;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS inventory;
DROP TABLE IF EXISTS cart;
DROP TABLE IF EXISTS cartitems;
DROP TABLE IF EXISTS wishlist;

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
  product_make_cost decimal(10,2),
  product_price decimal(10,2),
  in_stock BOOLEAN
);

CREATE TABLE cart (
  cart_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int,
  product_id int,
  product_name varchar(255),
  product_price decimal(10,2)
);

CREATE TABLE cartitems (
  product_id int NOT NULL REFERENCES inventory(product_id) ON DELETE CASCADE,
  cart_id int NOT NULL REFERENCES cart(cart_id) ON DELETE CASCADE
);

CREATE TABLE wishlist (
  list_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int,
  product_id int,
  product_name varchar(255),
  product_price decimal(10,2)
);

CREATE TABLE wishitems (
  product_id int NOT NULL REFERENCES inventory(product_id) ON DELETE CASCADE,
  cart_id int NOT NULL REFERENCES cart(cart_id) ON DELETE CASCADE
);
