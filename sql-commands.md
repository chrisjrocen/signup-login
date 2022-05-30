# SQL COMMANDS USED IN THE PROJECT

## 1. SQL CODE CREATE THE USER TABLE

```sql

CREATE TABLE users(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(15) not null,
    surname varchar(15) not null,
    email varchar(25) not null,
    pwd varchar(25) not null
);

```
## 2. SQL CODE TO CREATE THE PROFILE IMAGE TABLE

```SQL

CREATE TABLE profileimg (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT, userid int(11) not null, status int(11) not null 
);

```