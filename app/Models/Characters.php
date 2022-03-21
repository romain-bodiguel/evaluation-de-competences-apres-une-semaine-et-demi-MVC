<?php

class Characters {

    //je crée une method qui récupère tous les personnages
    public function findAll() {
        
        // Je me connecte à la BDD (si c'est pas déjà fait)
        // et on récupère l'objet PDO pour nos futures requêtes
        $pdo = Database::getPDO();

        $sql = "SELECT `character`. `name`,  `character`.`description`,  `character`.`picture`, 
                type.name AS type_name 
                FROM `character`
                LEFT JOIN `type` ON `character`.`type_id` = type.id";

        //j'exécute ma requête
        $statement = $pdo->query($sql);
        $charactersList = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $charactersList;
    }

    public function findAllForFooter() {
        $pdo = Database::getPDO();
  
        $sql = "SELECT * 
                FROM `character` 
                ORDER BY `name` 
                LIMIT 5";
  
        $statement = $pdo->query($sql);
  
        // __CLASS__ signifie qu'on envoie notre classe actuelle, ici Brand
        $brandList = $statement->fetchAll(PDO::FETCH_CLASS, __CLASS__);
        return $brandList;
      }
}