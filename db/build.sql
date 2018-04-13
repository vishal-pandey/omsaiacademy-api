


CREATE TABLE faculty (id int primary key auto_increment, name varchar(150), quali text, mobile varchar(20), about text , img text );



CREATE TABLE batch (id int primary key auto_increment, batch text, btime text, day text);

insert into batch (batch, btime, day) values ("11th", "11 AM", "Sunday");