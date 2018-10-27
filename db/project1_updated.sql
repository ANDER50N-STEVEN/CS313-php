
CREATE SCHEMA project1;


CREATE TABLE project1.user
(
	id SERIAL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);


CREATE TABLE project1.author
(
	id SERIAL PRIMARY KEY,
	author_name VARCHAR(100) NOT NULL UNIQUE
);


CREATE TABLE project1.genre
(
	id SERIAL PRIMARY KEY,
	genre VARCHAR(100) NOT NULL UNIQUE 
);


CREATE TABLE project1.library
(
	id SERIAL PRIMARY KEY,
	title VARCHAR(100) NOT NULL UNIQUE,
	author_id INT REFERENCES project1.author(id),
	genre_id INT REFERENCES project1.genre(id),
	summary TEXT
);


CREATE TABLE project1.rating
(
	id SERIAL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES project1.user(id),
	book_id INT NOT NULL REFERENCES project1.library(id),
	rating INT NOT NULL,
	review TEXT
);


INSERT INTO project1.genre (id, genre) VALUES
(1, 'Fantasy'),
(2, 'Fiction'),
(3, 'Sci-Fi');





INSERT INTO project1.author (author_name) VALUES
('George R.R. Martin')  ,
('J.R.R. Tolkien')  ,
('Patrick Rothfuss'),
('C.S. Lewis'),
('Robert Jordan'),
('Brandon Sanderson'),
('Philip Pullman')  ,
('Christopher Paolini'),
('Robin Hobb'), 
('Terry Goodkind') ,
('Stephen King'),
('Scott Lynch'),  
('Joe Abercrombie'),
('Steven Erikson')  , 
('William Goldman')  ,
('David Eddings' ),
('Marion Zimmer Bradley'),  
('Raymond E. Feist'); 

INSERT INTO project1.library (id, title, author_id, genre_id) VALUES
(1, 'A Game of Thrones', 1, 1)  ,
(2, 'The Lord of the Rings', 2, 1)  ,
(3, 'The Name of the Wind', 3, 1 ),
(4, 'The Chronicles of Narnia', 4, 1 ),
(5, 'The Eye of the World', 5, 1 ),
(6, 'The Way of Kings', 6, 1),
(7, 'The Final Empire', 6, 1) ,
(8, 'His Dark Materials', 7, 1)  ,
(9, 'Eragon', 8, 1 ),
(10, 'Assassins Apprentice', 9, 1), 
(11, 'Wizards First Rule', 10 , 1) ,
(12, 'The Gunslinger', 11 , 1),
(13, 'The Lies of Locke Lamora', 12 , 1),  
(14, 'The Silmarillion', 2 , 1 ),
(15, 'The Blade Itself' , 13 , 1),
(16, 'Gardens of the Moon', 14, 1)  , 
(17, 'The Princess Bride', 15, 1)  ,
(18, 'The Belgariad', 16 , 1 ),
(19, 'The Mists of Avalon',17, 1),  
(20, 'Magician: Apprentice', 18, 1) ;

INSERT INTO project1.user (username, password, display_name) VALUES
('Steven Anderson', 'password', 'MisterANDER50N'),
('Katherine Anderson', 'avatar', 'Kate Lynn');


INSERT INTO project1.rating (id, user_id, book_id, rating, review) VALUES
(1, 1, 5, 5, 'This is one of my favorite books, not because the book itself is that unique, but because it sets the stage and creates characters you learn to love'),
(2, 2, 4.5, 5, 'Really good book, but a little too much like Lord of the Rings'),
(3, 1, 2, 5, 'This is one of the greates books ever written, if only because of its originallity in the world'),
(4, 1, 12, 4.5, 'This book series is amazing, fantastic world and so deep.  It did have its weird moments though.');
