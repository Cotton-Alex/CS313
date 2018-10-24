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