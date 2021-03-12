INSERT INTO role (name, access_lvl)
VALUES ('admin', 1),
      ('user', 2),
      ('guest', 3);

INSERT INTO users (firstName, lastName, email, phone, password, DOB, role)
VALUES ('Admin', 'Man', 'admin@admin.com', '7171234567', 'abc123', 1999-01-01, 1),
      ('j', 'cole', 'jcole@gmail.com', '6103214567', 'unclephil', 1990-05-03, 2);

INSERT INTO inventory (product_name, product_desc, quanity, product_make_cost,
                      product_price, in_stock)
VALUES ('Red shirt', 'A red shirt.', 1000, 1.00, 10.00, TRUE),
      ('Blue pants', 'Also known as jeans.', 1000, 3.00, 15.00, TRUE),
      ('Orange hat', 'Can be used for hunting.', 0, 1.60, 9.00, FALSE),
      ('Green socks', 'Ran through the grass before sold', 1000, 2.00, 12.00, TRUE);
