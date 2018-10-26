CREATE TABLE topic (
	id SERIAL PRIMARY KEY,
	name VARCHAR(100) NOT NULL UNIQUE
	);

INSERT INTO topic (name) VALUES
('FAITH'),
('SACRIFICE'),
('CHARITY');

CREATE TABLE scripture_to_topic (
	id SERIAL PRIMARY KEY,
	scripture_id INT,
	topic_id INT,
	FOREIGN KEY (scripture_id) REFERENCES scriptures(id),
	FOREIGN KEY (topic_id) REFERENCES topic(id)
	);