SELECT
journal.journal_name,
image.image_name,
entry.page_date, 
entry.image_id, 
entry.entry_date, 
entry.entry_text
FROM entry
INNER JOIN image
ON entry.image_id = image.image_id
INNER JOIN journal
ON entry.journal_id = journal.journal_id;

SELECT
journal.journal_name,
image.image_name,
entry.page_date, 
entry.image_id, 
entry.entry_date, 
entry.entry_text
FROM entry
INNER JOIN image
ON entry.image_id = image.image_id
INNER JOIN journal
ON entry.journal_id = journal.journal_id
ORDER BY entry.entry_id DESC
LIMIT 1;

UPDATE journal
SET journal_name = '1989'
WHERE journal_id = 12;

INSERT INTO entry (journal_id, page_date, image_id, entry_date, entry_text)
VALUES (1, '1946-01-01', 1, '1946-01-01', 'content');


SELECT
journal.journal_name,
image.image_name,
entry.page_date, 
entry.image_id, 
entry.entry_date, 
entry.entry_text
FROM entry
INNER JOIN image
ON entry.image_id = image.image_id
INNER JOIN journal
ON entry.journal_id = journal.journal_id
WHERE image.image_name = '1946-1950-01-01.jpg'
ORDER BY image.image_id ASC
LIMIT 5;