USE admindoc;

CREATE TABLE roles (
    id int(32) NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE user (
    id int(32) NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    hash varchar(255) NOT NULL,
    ip varchar(32) unsigned NOT NULL default '0',
    nicname varchar(255),
    roleId int(2) NOT NULL,
    PRIMARY KEY (id)
);

#ALTER TABLE user ADD COLUMN ip int(10) unsigned NOT NULL default '0';
#ALTER TABLE user ADD COLUMN hash VARCHAR(32) NOT NULL;
INSERT INTO user (email, password, nicname, roleId) values('vladimir.plotvinov@gmail.com', 'qwerty', 'vplotvinov', 1);