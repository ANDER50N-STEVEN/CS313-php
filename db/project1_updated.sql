
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
('The Final Empire', 6, 'At the beginning of the novel, the reader is introduced to Vin, a street urchin who is recruited by Kelsiers crew after Kelsier realizes that she is a Mistborn. ... Once in control, he hopes to overthrow the Final Empire by stealing the Lord Rulers atium hoard, which is the cornerstone of the Final Empires economy.'),
('His Dark Materials', 7 , 'Iorek kills Iofur and takes his place as the rightful king. Lyra, Iorek, and Roger travel to Svalbard, where Asriel has continued his Dust research in exile. He tells Lyra that the Church believes Dust is the basis of sin, and plans to visit the other universes and destroy its source.' )  ,
('Eragon', 8, 'The 15 year old resident of Carvahall, Eragon, starts the book by finding a strange blue stone while traversing The Spine, a mountainous area outside his home. The world in which this novel takes place is known as Alagaësia, under the control of Galbatorix, a fallen Dragon Rider, now evil' ),
('Assassins Apprentice', 9 , 'King Shrewd interferes with their plot because he sees how Fitz can be put to use. He trains him as a squire would be trained for the knighthood, then makes him apprentice to Chade, the Kings assassin. His job will be to maim or murder to protect the King and the secrets of the realm.'), 
('Wizards First Rule', 10 , ' quest story of young Richard Cypher, who must find three magic boxes mentioned in a secret book of his fathers. If he does not, the evil lord Darken Rahl will gain power over the living and the underworld, plunging the world into a reign of terror.' ) ,
('The Gunslinger', 11 , 'The book opens by introducing the gunslinger, Roland Deschain, who is on a journey to find the Man in Black. As he ventures across the desert with his mule, he meets a farmer who goes by the name of Brown with his crow, Zoltan. The gunslinger begins to tell of the time he spent in the town of Tull.' ),
('The Lies of Locke Lamora', 12 , 'A group of swashbuckling thieves, eventually led by Locke Lamora, are in a turf fight for the city with a mysterious figure attempting to take over the world of organized crime.'),  
('The Silmarillion', 2  , 'the story of creation and war between good and evil. This companion to The Lord of the Rings begins with Ea, the world, and the Valar, who pave the way for the arrival of the children of Iluvatar. Together, they fight against Melkor, the force of evil in the world.' ),
('The Blade Itself' , 13 , 'The First Law 1. Jezal dan Luther, a soldier in the Kingdom known as the Union, is drawn into a magical conflict with the rival Empire of Gurhkul alongside a barbarian named Logen, a wizard named Bayaz, a torturer named Glokta and a former slave named Ferro.'),
('Gardens of the Moon', 14, 'The novel opens in the 96th year of the Malazan Empire, during the final year of the rule of Emperor Kellanved. A young boy, aged 12, named Ganoes Paran witnesses the sacking of the Mouse Quarter of Malaz City. Paran wants to be a soldier when he grows older, though the veteran soldier Whiskeyjack disapproves.')  , 
('The Princess Bride', 15, 'A fairy tale adventure about a beautiful young woman and her one true love. He must find her after a long separation and save her. They must battle the evils of the mythical kingdom of Florin to be reunited with each other. ')  ,
('The Belgariad', 16 , 'The First in the Belgariad series. Garion is a young boy living on a farm with his Aunt Pol. Life is going well until one evening, the old storyteller arrives and turns Garions world upside down. He finds himself in a life he never knew exixted.' ),
('The Mists of Avalon',17, 'a generations-spanning retelling of the Arthurian legend that brings it back to its Brythonic Celtic roots (see Matter of Britain). The plot tells the story of the women who influence King Arthur, High King of Britain, and those around him.'),  
('Magician: Apprentice', 18, ' At Crydee, Pug, an orphan boy is apprenticed to a master magician. Suddenly the Kingdom is aswarm with alien invaders, destroying the peace of the kingdom. Pug and his friend Tomas are swept up into the conflict, with Pugs destiny leading him through a rift to a new world.') ;


-- INSERT INTO project1.rating (user_id, book_id, rating, review) VALUES
-- (1, 5, 5, 'This is one of my favorite books, not because the book itself is that unique, but because it sets the stage and creates characters you learn to love'),
-- (2, 5, 4, 'Really good book, but a little too much like Lord of the Rings'),
-- (1, 2, 5, 'This is one of the greates books ever written, if only because of its originallity in the world');

INSERT INTO project1.books_genres (title_id, genre_id) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2);