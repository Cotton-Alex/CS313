DROP TABLE entry, journal, image;

CREATE TABLE journal (
	journal_id int primary key,
	journal_name varchar(20)
);

CREATE TABLE image (
	image_id int primary key,
	image_name varchar(45),
	page_date date
);

CREATE TABLE entry (
  entry_id int primary key,
  journal_id int references journal(journal_id),
  page_date date,
  image_id int references image(image_id),
  entry_date date,
  entry_data varchar(999)
);