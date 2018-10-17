DROP TABLE w05_grp_scripture, w05_grp_book, w05_grp_volume;

CREATE TABLE w05_grp_volume (
	volume_id serial primary key,
	volume_name varchar(30)
);

INSERT INTO w05_grp_volume(volume_name) VALUES
('Old Testament'),
('New Testament'),
('Book of Mormon'),
('Doctrine and Covenants'),
('Pearl of Great Price');

CREATE TABLE w05_grp_book (
	book_id serial primary key,
	book_name varchar(30),
	volume_name int references w05_grp_volume(volume_id)
);

INSERT INTO w05_grp_book(book_name, volume_name) VALUES
('Genesis',1),
('Exodus',1),
('Leviticus',1),
('Numbers',1),
('Deuteronomy',1),
('Joshua',1),
('Judges',1),
('Ruth',1),
('1 Samuel',1),
('2 Samuel',1),
('1 Kings',1),
('2 Kings',1),
('1 Chronicles',1),
('2 Chronicles',1),
('Ezra',1),
('Nehemiah',1),
('Esther',1),
('Job',1),
('Psalms',1),
('Proverbs',1),
('Ecclesiastes',1),
('Song of Solomon',1),
('Isaiah',1),
('Jeremiah',1),
('Lamentations',1),
('Ezekiel',1),
('Daniel',1),
('Hosea',1),
('Joel',1),
('Amos',1),
('Obadiah',1),
('Jonah',1),
('Micah',1),
('Nahum',1),
('Habakkuk',1),
('Zephaniah',1),
('Haggai',1),
('Zechariah',1),
('Malachi',1),
('Matthew',2),
('Mark',2),
('Luke',2),
('John',2),
('Acts',2),
('Romans',2),
('1 Corinthians',2),
('2 Corinthians',2),
('Galatians',2),
('Ephesians',2),
('Philippians',2),
('Colossians',2),
('1 Thessalonians',2),
('2 Thessalonians',2),
('1 Timothy',2),
('2 Timothy',2),
('Titus',2),
('Philemon',2),
('Hebrews',2),
('James',2),
('1 Peter',2),
('2 Peter',2),
('1 John',2),
('2 John',2),
('3 John',2),
('Jude',2),
('Revelation',2),
('1 Nephi',3),
('2 Nephi',3),
('Jacob',3),
('Enos',3),
('Jarom',3),
('Omni',3),
('Words of Mormon',3),
('Mosiah',3),
('Alma',3),
('Helaman',3),
('3 Nephi',3),
('4 Nephi',3),
('Mormon',3),
('Ether',3),
('Moroni',3),
('D&C',4),
('Moses',5),
('Abraham',5),
('Joseph Smith—Matthew',5),
('Joseph Smith—History',5),
('Articles of Faith',5);

CREATE TABLE w05_grp_scripture (
  scripture_id serial primary key,
  volume_name int references w05_grp_volume(volume_id),
  book_name int references w05_grp_book(book_id),
  chapter int not null,
  verse int not null,
  content text not null);

INSERT INTO w05_grp_scripture 
(volume_name, book_name, chapter, verse, content) VALUES
(1,43,1,5,'And the light shineth in darkness; and the darkness comprehended it not.'),
(4,82,88,49,'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
(4,82,93,28,'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
(3,74,16,9,'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

--SELECTION

SELECT * FROM w05_grp_volume;
SELECT * FROM w05_grp_book;
SELECT * FROM w05_grp_scripture;
SELECT * FROM w05_grp_volume;

SELECT w05_grp_book.book_name, w05_grp_volume.volume_name 
FROM w05_grp_book 
INNER JOIN w05_grp_volume 
ON w05_grp_volume.volume_id = w05_grp_book.volume_name;
