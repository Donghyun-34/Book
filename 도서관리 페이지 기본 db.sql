create database 도서;

drop table if exists Author;
create table Author(
	author_id int(11) NOT null auto_increment,
    author_name varchar(20) NOT null,
    primary key(author_id)    
);
    

drop table if exists Current_book;
create table Current_book (
	title_id int(11) NOT NULL auto_increment,
	title varchar(100) NOT null,
    genre varchar(20) NOT null,
    author int(11) NOT null,
    note text NOT null,
    state varchar(10) NOT NULL default "대여 가능",
    primary key(title_id),
    foreign key(author) references Author (author_id)
);

select * from Author;

insert into Author(author_name) values ('First_author');
insert into Author(author_name) values ('Second_author');
insert into Author(author_name) values ('Third_author');
insert into Author(author_name) values ('Fourth_author');
insert into Author(author_name) values ('Fifth_author');
insert into Author(author_name) values ('Sixth_author');
insert into Author(author_name) values ('Seventh_author');
insert into Author(author_name) values ('Eighth_author');
insert into Author(author_name) values ('Ninth_author');
insert into Author(author_name) values ('Tenth_author');
insert into Author(author_name) values ('Eleventh_author');
insert into Author(author_name) values ('Twelfth_author');
insert into Author(author_name) values ('Thirteenth_author');
insert into Author(author_name) values ('Fourteenth_author');
insert into Author(author_name) values ('Fifteenth_author');
	
#이거 5번 실행
insert into Current_book (title, genre, author, note) values ('Seventh_book', 'romance', 6, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Seventh_book', 'romance', 6, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Eighth_book', 'romance', 7, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Ninth_book', 'romance', 8, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Tenth_book', 'romance', 9, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Eleventh_book', 'romance', 10, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Twelfth_book', 'romance', 11, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Thirteenth_book', 'romance', 12, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Fourteenth_book', 'romance', 13, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');
insert into Current_book (title, genre, author, note) values ('Fifteenth_book', 'romance', 14, 'asdfasdfasdfasdfasdfasdfasdfsadfasdfasdf');


select Current_book.title, Author.author_name from current_book join Author on author=Author.author_id;