
CREATE TABLE entries (
  entry_id int primary key,
  journal_id int references journals(journal_id),
  page_date date,
  image_id int references images(image_id),
  entry_date date,
  entry_data varchar(999)
);

CREATE TABLE journals(
	journal_id int primary key,
	journal_name varchar(20)
);

CREATE TABLE images(
	image_id int primary key,
	image_name varchar(45),
	page_date date
);