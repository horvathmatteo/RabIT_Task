CREATE DATABASE testdb;

CREATE TABLE users (
    ID int  not null AUTO_INCREMENT,
    m_name varchar(255) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE advertisements (
    ID int not null AUTO_INCREMENT,
    userid int not null,
    title varchar(255),
    PRIMARY KEY (ID),
    FOREIGN KEY (userid) REFERENCES users(ID) 
);

INSERT INTO users (ID, m_name) VALUES
(1, 'András'),
(2, 'Péter'),
(3, 'Zoltán'),
(4, 'Ágnes');

INSERT INTO advertisements (ID, userid, title) VALUES
(1, 4, 'Kerékkulcs'),
(2, 1, 'Processzor'),
(3, 3, 'Lépésszámláló'),
(4, 2, 'Fogkefe');


