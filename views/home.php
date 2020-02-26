<div class="create-notice">
    <div class="form">
        <form action="<?php echo BASE_URL ?>" method="POST">
            <label for="title-notice">Título da notícia:</label><br>
            <input type="text" name="title-notice" id="title-notice"><br>
            <label for="about">Sobre oque é a notícia:</label><br>
            <select name="about" id="about">
            <?php
                foreach ($viewData as $id=>$data) {
                    echo "<option value='$id'>$data</option>";
                }
            ?>
            </select><br>
            <label for="notice">A notícia:</label><br/>
            <textarea name="notice" id="notice" cols="30" rows="10"></textarea><br>
            <input class="btn-register" type="submit" value="Registrar">
        </form>
    </div>
</div>