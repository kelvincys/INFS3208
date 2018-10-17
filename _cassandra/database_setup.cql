// Table Creation

CREATE TABLE seasonal (
season text, 
title text,
author text,
date timestamp,
image text
PRIMARY KEY (season, title, author, date)
) WITH COMPACT STORAGE;

CREATE TABLE clothing (
clothing_type text, 
title text,
author text,
date timestamp,
image text,
PRIMARY KEY (clothing_type, title, author, date)
) WITH COMPACT STORAGE;

CREATE TABLE colour (
colour text, 
title text,
author text,
date timestamp,
image text,
PRIMARY KEY (colour, title, author, date)
) WITH COMPACT STORAGE;

CREATE TABLE data (
date timestamp,
title text, 
author text,
description text,
link text,
image text,
PRIMARY KEY (date, title, author)
);

CREATE TABLE date_statistics (
date timestamp,
counts int,
PRIMARY KEY (date),
) WITH COMPACT STORAGE;

CREATE TABLE season_statistics (
season text,
counts int,
PRIMARY KEY (season),
) WITH COMPACT STORAGE;

CREATE TABLE style_statistics (
clothing_style text,
counts int,
PRIMARY KEY (clothing_style),
) WITH COMPACT STORAGE;

CREATE TABLE colour_statistics (
colour text,
counts int,
PRIMARY KEY (colour),
) WITH COMPACT STORAGE;

// Table inserts
//SEASONAL
insert into seasonal(season, title, author, date, image) values ('Autumn', 'How to wear good in your friend birthday party?', 'Sam Yuen', '2017-05-24', '/images/1.jpg');
insert into seasonal(season, title, author, date, image) values ('Autumn', 'A good cap that you may want', 'Kelvin Yeung', '2017-10-29', '/images/2.jpg');
insert into seasonal(season, title, author, date, image) values ('Summer', 'Not a nerd again', 'Alexander Kyle', '2016-03-17', '/images/3.jpg');
insert into seasonal(season, title, author, date, image) values ('Summer', 'Get more red pocket in your chinese new year', 'Sam Yuen', '2018-01-30', '/images/4.jpg');
insert into seasonal(season, title, author, date, image) values ('Spring', 'Wear like a japanese in Spring', 'Sam Yuen', '2018-03-17', '/images/5.jpg');
insert into seasonal(season, title, author, date, image) values ('Winter', 'How to wear good in your own birthday party?', ' Laurus Lau', '2018-06-08', '/images/6.jpg');
insert into seasonal(season, title, author, date, image) values ('Spring', 'A good cap that you may want in winter', 'Kiu Siu', '2017-11-29', '/images/7.jpg');
insert into seasonal(season, title, author, date, image) values ('Winter', 'Not a nerd again and again', 'Alexander Kyle', '2017-03-17', '/images/8.jpg');
insert into seasonal(season, title, author, date, image) values ('Summer', 'Not a nerd again and again', 'Alexander Kyle', '2017-03-17', '/images/8.jpg');
insert into seasonal(season, title, author, date, image) values ('Winter', 'Get more red pocket in your chinese new year this year', 'Kiu Siu', '2017-01-30', '/images/9.jpg');
insert into seasonal(season, title, author, date, image) values ('Summer', 'Wear like a japanese in summer', 'Sam Yuen', '2018-06-17', '/images/10.jpg');

//CLOTHING
insert into clothing(clothing_type, title, author, date, image) values ('Suit', 'How to wear good in your friend birthday party?', 'Sam Yuen', '2017-05-24', '/images/1.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Hat', 'A good cap that you may want', 'Kelvin Yeung', '2017-10-29', '/images/2.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Casual', 'Not a nerd again', 'Alexander Kyle', '2016-03-17', '/images/3.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Suit', 'Get more red pocket in your chinese new year', 'Sam Yuen', '2018-01-30', '/images/4.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Suit', 'Wear like a japanese in Spring', 'Sam Yuen', '2018-03-17', '/images/5.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Casual', 'How to wear good in your own birthday party?', ' Laurus Lau', '2018-06-08', '/images/6.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Hat', 'A good cap that you may want in winter', 'Kiu Siu', '2017-11-29', '/images/7.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Casual', 'Not a nerd again and again', 'Alexander Kyle', '2017-03-17', '/images/8.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Suit', 'Get more red pocket in your chinese new year this year', 'Kiu Siu', '2017-01-30', '/images/9.jpg');
insert into clothing(clothing_type, title, author, date, image) values ('Suit', 'Wear like a japanese in summer', 'Sam Yuen', '2018-06-17', '/images/10.jpg');

//COLOUR
insert into colour(colour, title, author, date, image) values ('Black', 'How to wear good in your friend birthday party?', 'Sam Yuen', '2017-05-24', '/images/1.jpg');
insert into colour(colour, title, author, date, image) values ('White', 'A good cap that you may want', 'Kelvin Yeung', '2017-10-29', '/images/2.jpg');
insert into colour(colour, title, author, date, image) values ('Blue', 'Not a nerd again', 'Alexander Kyle', '2016-03-17', '/images/3.jpg');
insert into colour(colour, title, author, date, image) values ('Black', 'Get more red pocket in your chinese new year', 'Sam Yuen', '2018-01-30', '/images/4.jpg');
insert into colour(colour, title, author, date, image) values ('Grey', 'Wear like a japanese in Spring', 'Sam Yuen', '2018-03-17', '/images/5.jpg');
insert into colour(colour, title, author, date, image) values ('White', 'How to wear good in your own birthday party?', ' Laurus Lau', '2018-06-08', '/images/6.jpg');
insert into colour(colour, title, author, date, image) values ('Black', 'A good cap that you may want in winter', 'Kiu Siu', '2017-11-29', '/images/7.jpg');
insert into colour(colour, title, author, date, image) values ('Black', 'Not a nerd again and again', 'Alexander Kyle', '2017-03-17', '/images/8.jpg');
insert into colour(colour, title, author, date, image) values ('White', 'Get more red pocket in your chinese new year this year', 'Kiu Siu', '2017-01-30', '/images/9.jpg');
insert into colour(colour, title, author, date, image) values ('Blue', 'Wear like a japanese in summer', 'Sam Yuen', '2018-06-17', '/images/10.jpg');

//DATA
insert into data(date, title, author, description, link, image) values ('2017-05-24', 'How to wear good in your friend birthday party?', 'Sam Yuen', 'In order to wearing good in your friend birthday, you should try this new set of fashion clothes. The cutting is so good and the material is really nice. Buy one set of this and wear good in your friends birthday party.', 'http://', '/images/1.jpg');
insert into data(date, title, author, description, link, image) values ('2017-10-29', 'A good cap that you may want', 'Kelvin Yeung', 'This is a new cap produced by the company champion this autumn. Just buy a cap to be a fashion person.', 'http://', '/images/2.jpg');
insert into data(date, title, author, description, link, image) values ('2016-03-17', 'Not a nerd again', 'Alexander Kyle', 'Hate to be calling as a nerd? Buy a new set of clothes and remove that name from your life now.', 'http://', '/images/3.jpg');
insert into data(date, title, author, description, link, image) values ('2018-01-30', 'Get more red pocket in your chinese new year', 'Sam Yuen', 'Do you want to please your relative? You should get this for more red pocket in this year.', 'http://', '/images/4.jpg');
insert into data(date, title, author, description, link, image) values ('2018-03-17', 'Wear like a japanese in Spring', 'Sam Yuen', 'It is your time to wear like a japanese in this spring.', 'http://', '/images/5.jpg');
insert into data(date, title, author, description, link, image) values ('2018-06-08', 'How to wear good in your own birthday party?', 'Laurus Lau', 'In order to wearing good in your friend birthday, you should try this new set of fashion clothes. The cutting is so good and the material is really nice. Buy one set of this and wear good in your friend’s birthday party.', 'http://', '/images/6.jpg');
insert into data(date, title, author, description, link, image) values ('2017-11-29', 'A good cap that you may want in winter', 'Kiu Siu', 'This is a new cap produced by the company champion this autumn. Just buy a cap to be a fashion person.', 'http://', '/images/7.jpg');
insert into data(date, title, author, description, link, image) values ('2017-03-17', 'Not a nerd again and again', 'Alexander Kyle', 'Hate to be calling as a nerd? Buy a new set of clothes and remove that name from your life now for good.', 'http://', '/images/8.jpg');
insert into data(date, title, author, description, link, image) values ('2017-01-30', 'Get more red pocket in your chinese new year this year', 'Kiu Siu', 'Do you want to please your relative? You should get this for more red pocket in this year for sure.', 'http://', '/images/9.jpg');
insert into data(date, title, author, description, link, image) values ('2018-06-17', 'Wear like a japanese in summer', 'Sam Yuen', 'It is your time to wear like a japanese in this summer.', 'http://', '/images/10.jpg');

// Inserts for *_statistics tables will be performed by Spark