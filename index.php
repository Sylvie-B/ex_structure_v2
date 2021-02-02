<!-- inclusion du header se trouvant dans le fichier _partails/header.php -->
<?php
$title = "Mon super index";
include $_SERVER['DOCUMENT_ROOT'] . '/page/_partials/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/page/_partials/menu.php';
?>

    <!-- page content -->
    <main>
        <!-- section 1 -->
        <section>
            Mon contenu en section 1
        </section>
        <!-- section 2 -->
        <section>
            Mon contenu en section 2
        </section>
    </main>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/page/_partials/footer.php';
