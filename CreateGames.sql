CREATE TABLE IF NOT EXISTS games (
  game_id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(50),
  year INT,
  genre VARCHAR(32),
  url VARCHAR(100),
  PRIMARY KEY (game_id));
INSERT INTO games (title, year, genre, url) VALUES
('Where in the World is Carmen Sandiego',1985,'Mystery','https://archive.org/details/msdos_Where_in_the_World_is_Carmen_Sandiego_1985'),
('Indiana Jones and the Fate of Atlantis',1992,'Quest','https://archive.org/details/IndianaJones_Atlantis'),
('Doom', 1993,'First Person Shooter','https://archive.org/details/doom_dos');