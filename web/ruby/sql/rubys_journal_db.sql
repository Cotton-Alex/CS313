DROP TABLE entry, journal, image;

CREATE TABLE journal (
	journal_id serial primary key,
	journal_name varchar(20)
);

INSERT INTO journal (journal_name)
VALUES
('1946-1950'),
('1951-1955'),
('1956-1960'),
('1961-1965'),
('1966-1968'),
('1969-1973'),
('1975-1978'),
('1979-1981'),
('1982-1984'),
('1985-1987'),
('1988'),
('1989'),
('1990'),
('1991'),
('1992-1993'),
('1994');

CREATE TABLE image (
	image_id serial primary key,
        journal_name int references journal(journal_id),
	image_name varchar(45),
	page_date date
);

INSERT INTO image (journal_name, image_name, page_date)
VALUES
(1, '1946-1950-01-01.jpg', '1946-01-01'),
(1, '1946-1950-01-02.jpg', '1946-01-02'),
(1, '1946-1950-01-03.jpg', '1946-01-03'),
(1, '1946-1950-01-04.jpg', '1946-01-04'),
(1, '1946-1950-01-05.jpg', '1946-01-05'),
(1, '1946-1950-01-06.jpg', '1946-01-06'),
(1, '1946-1950-01-07.jpg', '1946-01-07'),
(1, '1946-1950-01-08.jpg', '1946-01-08'),
(1, '1946-1950-01-09.jpg', '1946-01-09'),
(1, '1946-1950-01-10.jpg', '1946-01-10'),
(1, '1946-1950-01-11.jpg', '1946-01-11'),
(1, '1946-1950-01-12.jpg', '1946-01-12'),
(1, '1946-1950-01-13.jpg', '1946-01-13'),
(1, '1946-1950-01-14.jpg', '1946-01-14'),
(1, '1946-1950-01-15.jpg', '1946-01-15'),
(1, '1946-1950-01-16.jpg', '1946-01-16'),
(1, '1946-1950-01-17.jpg', '1946-01-17');

CREATE TABLE entry (
  entry_id serial primary key,
  journal_id int references journal(journal_id),
  page_date date,
  image_id int references image(image_id),
  entry_date date,
  entry_text varchar(999)
);

INSERT INTO entry (
journal_id,
page_date,
image_id,
entry_date,
entry_text)
VALUES
(1, '1946-01-01', 1, '1946-01-01', 'The folks left here Dec 26, 1945. They were all here for Christmas but Harding (**) had thirteen here for about a week lots of people but we all had fun. Happy New Year.'),
(1, '1946-01-01', 1, '1947-01-01', 'Today we went to Monty Stoners wedding. We had dinner with Aunt Nellie, went to Enid saw Uncle Fred''s, Uncle George, are staying with Otto tonight it''s snowing.'),
(1, '1946-01-01', 1, '1948-01-01', 'Today we had Margie and Girls down here for dinner nice dinner & time I & boys went up to her house this evening for a short while.'),
(1, '1946-01-01', 1, '1949-01-01', 'Today a very busy day at cafe 350.00 lots of people last night we slept some this morning. We are getting ready for tonight.'),
(1, '1946-01-01', 1, '1950-01-01', 'Today I & the 3 children went to school then ate dinner went out to see them ice skate & listened to the radio tonight cloudy & cool all day today.'),
(1, '1946-01-02', 2, '1946-01-02', NULL),
(1, '1946-01-02', 2, '1947-01-02', 'Today it snowed all day & blowed to sure has been bad. We are here at Otto''s again tonight. We couldn''t get out to Runts. Larry Kay sure has a bad cold.'),
(1, '1946-01-02', 2, '1948-01-02', 'Today I washed almost frozen my feet & hands so cold very big washing to. Clothes didn''t dry so well either'),
(1, '1946-01-02', 2, '1949-01-02', 'Good day at cafe $272.31. We went to the show saw Red Skelton in "Southern Yankie" Mary Trujillo came to work tonight. I am glad to.'),
(1, '1946-01-02', 2, '1950-01-02', '(1950?)- Holoday today I made my Gray skirt like it pretty much & pretty cold here tonight. I cut out my dark and light blue dress have had the material for years. Larry better with cough.'),
(1, '1946-01-03', 3, '1946-01-03', NULL),
(1, '1946-01-03', 3, '1947-01-03', 'Today it was so very cold we didn''t go to the city, went to Runts was 12 below Hennessey. Coldest in history here in many years. Uncle John''s house was burned.'),
(1, '1946-01-03', 3, '1948-01-03', 'Today Better day today I ironed all day & way into the night but finished got pretty sor at Ray for not letting me where he was gone but O.K. now.'),
(1, '1946-01-03', 3, '1949-01-03', 'Today good day 190.68. Very cold here & some snow. Very cold tonight. I didn'' make pies today. Kids started back to school.'),
(1, '1946-01-03', 3, '1950-01-03', '(1950?)- Today no work at plant but I made my blue dress. The dark and light blue one. Real pretty.'),
(2, '1951-01-01', 16, '1951-01-01', 'asdljkf asdasd fjasl kf  skjdfl ka');