
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
	author_id INT,
	summary TEXT,
	FOREIGN KEY (author_id) REFERENCES project1.author(id)
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


CREATE TABLE project1.books_genres
(
	id SERIAL PRIMARY KEY,
	title_id INT, 
	genre_id INT,
	FOREIGN KEY (title_id) REFERENCES project1.library(id),
	FOREIGN KEY (genre_id) REFERENCES project1.genre(id)
);


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

INSERT INTO project1.library (title, author_id, summary) VALUES
('A Game of Thrones', 1, 'Game of Thrones is roughly based on the storylines of A Song of Ice and Fire, set in the fictional Seven Kingdoms of Westeros and the continent of Essos. The series chronicles the violent dynastic struggles among the realms noble families for the Iron Throne, while other families fight for independence from it.')  ,
('The Lord of the Rings', 2,'The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins, who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.')  ,
('The Name of the Wind', 3,'The Name of the Wind is an epic fantasy by Patrick Rothfuss in which the legendary hero Kvothe, now in hiding as Waystone Inn owner Kote, recounts his past experiences to Chronicler, a story collector. The book forms the first of the three parts of Rothfusss Kingkiller Chronicle.' ),
('The Chronicles of Narnia', 4, 'During the World War II bombings of London, four English siblings are sent to a country house where they will be safe. One day Lucy  finds a wardrobe that transports her to a magical world called Narnia. After coming back, she soon returns to Narnia with her brothers, Peter  and Edmund , and her sister, Susan . There they join the magical lion, Aslan, in the fight against the evil White Witch, Jadis.' ),
('The Eye of the World', 5, 'The book begins in the region of the Two Rivers, which has been virtually cut off from most of the rest of the world for over a thousand years. It is spring festival, Bel Tine. On the way from his fathers isolated farm, Rand notices a strange man watching him.' ),
('The Way of Kings', 6, 'an epic fantasy novel by Brandon Sanderson. It is the first volume in a planned ten volume series called The Stormlight Archive.'),
('The Final Empire', 6, 'At the beginning of the novel, the reader is introduced to Vin, a street urchin who is recruited by Kelsiers crew after Kelsier realizes that she is a Mistborn. ... Once in control, he hopes to overthrow the Final Empire by stealing the Lord Rulers atium hoard, which is the cornerstone of the Final Empires economy.') ;
-- (8, 'His Dark Materials', 7  )  ,
-- (9, 'Eragon', 8 ),
-- (10, 'Assassins Apprentice', 9 ), 
-- (11, 'Wizards First Rule', 10  ) ,
-- (12, 'The Gunslinger', 11  ),
-- (13, 'The Lies of Locke Lamora', 12 ),  
-- (14, 'The Silmarillion', 2   ),
-- (15, 'The Blade Itself' , 13 ),
-- (16, 'Gardens of the Moon', 14)  , 
-- (17, 'The Princess Bride', 15)  ,
-- (18, 'The Belgariad', 16  ),
-- (19, 'The Mists of Avalon',17),  
-- (20, 'Magician: Apprentice', 18) ;

INSERT INTO project1.user (username, password, display_name) VALUES
('Steven Anderson', 'password', 'MisterANDER50N'),
('Katherine Anderson', 'avatar', 'Kate Lynn');


INSERT INTO project1.rating (user_id, book_id, rating, review) VALUES
(1, 5, 5, 'This is one of my favorite books, not because the book itself is that unique, but because it sets the stage and creates characters you learn to love'),
(2, 5, 4, 'Really good book, but a little too much like Lord of the Rings'),
(1, 2, 5, 'This is one of the greates books ever written, if only because of its originallity in the world');

INSERT INTO project1.books_genres (title_id, genre_id) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2);