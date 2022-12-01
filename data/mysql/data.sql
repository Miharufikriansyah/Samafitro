CREATE TABLE item (
    item_id INT NOT NULL AUTO_INCREMENT,
    product VARCHAR(100),
    price INT,
    quantity INT,
    PRIMARY KEY (item_id)
);

CREATE TABLE hps (
    hps_id INT NOT NULL AUTO_INCREMENT,
    item_id INT,    
    trade VARCHAR(50),
    PRIMARY KEY (hps_id),
    FOREIGN KEY (item_id) REFERENCES item(item_id)
);

CREATE TABLE tkdn (
    tkdn_id INT NOT NULL AUTO_INCREMENT,
    item_id INT,
    img VARCHAR(100),
    PRIMARY KEY (tkdn_id),
    FOREIGN KEY (item_id) REFERENCES item(item_id)
);

INSERT INTO item (
    item_id,
    product,
    price,
    quantity
) VALUES (
    1,
    "Axioo Axioo Mybook",
    14000000,
    1
);

INSERT INTO item (
    item_id,
    product,
    price,
    quantity
) VALUES (
    2,
    "Axioo Axioo Mybook",
    499500000,
    1
);

INSERT INTO item (
    item_id,
    product,
    price,
    quantity
) VALUES (
    3,
    "Axioo Axioo Mybook",
    91020000,
    1
);

INSERT INTO item (
    item_id,
    product,
    price,
    quantity
) VALUES (
    4,
    "Axioo Axioo Mybook",
    27056250,
    1
);

INSERT INTO tkdn (
    tkdn_id,
    item_id,
    img
) VALUES (
    1,
    1,
    "image/content/Axioo.png"
);

INSERT INTO tkdn (
    tkdn_id,
    item_id,
    img
) VALUES (
    2,
    2,
    "image/content/Axioo.png"
);

INSERT INTO tkdn (
    tkdn_id,
    item_id,
    img
) VALUES (
    3,
    3,
    "image/content/Axioo.png"
);

INSERT INTO tkdn (
    tkdn_id,
    item_id,
    img
) VALUES (
    4,
    4,
    "image/content/Axioo.png"
);

INSERT INTO tkdn (
    tkdn_id,
    item_id,
    img
) VALUES (
    5,
    5,
    "image/content/Axioo.png"
);