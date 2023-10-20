<?php
$title = 'Kontakt';
$activePage = 'contact';
require_once './include/functions.php';
?>
<!doctype html>
<html lang="pl">
<?php
require_once './include/head.php';
?>
<body>
<div class="container-fluid p-0">
    <?php
    require_once './include/nav.php'
    ?>
    <div class="container py-5">
        <?php
        echo renderHeader($title, 1);
        ?>
        <form id="contact-form" method="post" action="./include/formHandler.php">
            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Wiadomość</label>
                <textarea name="message" id="message" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Wyślij</button>
        </form>
    </div>
    <?php
    require_once './include/footer.php'
    ?>
</div>
<!--<script src="./public/js/preventContact.js"></script>-->
</body>
</html>
