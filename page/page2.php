<!-- inclusion du header se trouvant dans le fichier _partails/header.php -->
<?php
$title = "page 2";
include $_SERVER['DOCUMENT_ROOT'] . '/page/_partials/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/page/_partials/menu.php';
?>

    <!-- page content -->
    <main>
        <div id="app-root"></div>
    </main>

<?php
include './_partials/footer.php';
