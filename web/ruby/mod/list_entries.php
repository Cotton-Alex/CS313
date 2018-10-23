<!--list dates with entries for reading--> 
<div>
    <ul class="nav">
        <?php foreach ($entry_dates as $entry_date) : ?>
            <li>
                <a href="?action=change_date&amp;image_id=<?php echo $entry_date['imageID']; ?>&amp;journal_id=<?php echo $entry_date['journalID']; ?>">
                    <?php echo $entry_date['entryDate']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
