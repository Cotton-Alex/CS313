SELECT
journal.journal_name,
entry.page_date, 
entry.image_id, 
entry.entry_date, 
entry.entry_text
FROM entry
INNER JOIN journal
ON entry.journal_id = journal.journal_id;