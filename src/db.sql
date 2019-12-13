create database testdb;

use testdb;

create table if not exists datagram (id int(2) primary key auto_increment, value int(2), last_updated datetime default current_timestamp);



insert into datagram (value) values
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);