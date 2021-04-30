    <?php
    foreach ($notes as $note) {
    ?>
        <div class="note">
            <h3><?= $note['title'] ?></h3>
            <!-- <form class="update_note" action="<?php echo site_url("/note/update/{$note['id']}"); ?>" method="post">
                <textarea name="note"><?= $note['description'] ?></textarea>
                <input type="submit" value="Update">
            </form> -->
            <form class="remove_note" action="<?php echo site_url("/note/remove/{$note['id']}"); ?>" method="post">
                <input type="submit" class="remove" value="Remove">
            </form>
        </div>
    <?php
    } ?>