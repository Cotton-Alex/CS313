<!--list dates with entries for reading--> 
<div>
    <ul>
    <h4 id="generic_aside">Journal Pages:</h4>
        <?php foreach ($image_names as $image_name) : ?>
        <li>
            <a href="?action=load_transcribe&amp;image_id=<?php echo $image_name['imageID']; ?>">
                <?php echo $image_name['imageName']; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
