<?php

class MainController {

    //je crée ma method home qui va afficher ma page d'accueil
    public function home() {

        //je crée un nouvel objet puis applique la method qui va me sortir tous les personnages
        $characterObject = new Characters();
        $charactersArray = $characterObject->findAll();

        $params['charactersArray'] = $charactersArray;

        $this->show('home', $params);
    }

    public function err404() {

        $this->show('err404');
    }

    public function hirokazu() {

        $this->show('hirokazu-yasuhara');
    }

    public function yuji() {

        $this->show('yuji-naka');
    }

    public function naoto() {

        $this->show('naoto-oshima');
    }

    //je crée ma method show qui affiche header + page courante + footer
    public function show($viewName, $viewData = []) {

        $footerCharactersObject = new Characters();
        $footerCharactersArray = $footerCharactersObject->findAllForFooter();

        //je crée un extract pour extraire les données de mon viewData
        extract($viewData);

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}