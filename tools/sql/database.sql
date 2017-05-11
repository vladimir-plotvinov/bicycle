USE admindoc;

CREATE TABLE roles (
    id int(32) NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE user (
    id int(32) NOT NULL AUTO_INCREMENT,
    email varchar(255),
    password varchar(255),
    nicname varchar(255),
    roleId int(2) NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO user (email, password, nicname, roleId) values('vladimir.plotvinov@gmail.com', 'qwerty', 'vplotvinov', 1);