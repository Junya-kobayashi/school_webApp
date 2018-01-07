CREATE TABLE users (
    id  serial,
    login_name varchar UNIQUE NOT NULL,
    pwd varchar NOT NULL,
    byear int,
    PRIMARY KEY (id)
);