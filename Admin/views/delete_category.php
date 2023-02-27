<?php include('./views/edit_categories.php');
$categories = Category::ViewCategory();
?>

<fieldset>
    <legend>Delete Category!</legend>
    <form method="post">
        <input type="hidden" name="action" value="delete_category">
        <label for="category">Category:</label>
        <select name="category_id" id="category">
            <?php for ($i = 0; $i < count($categories); $i++) { ?>
                <option value="<?= $categories[$i]->get_category_id(); ?>"><?= $categories[$i]->get_title(); ?></option>
            <?php } ?>
        </select>
        <br>
        <button>Submit</button>
    </form>
</fieldset>



