
<?php

require('DBScript/bdd.php');
require('controller.php');
require('Views/ArticleView.php');



if (isset($_GET['action'])) {
    if ($_GET['action'] == 'addArticle') {
        addArticle();
    }

    if ($_GET['action'] == 'listeArticle') {
        ListeArticle();
    }

    if ($_GET['action'] == 'validerArticle') {
        validateArticle();
    }
}

?>