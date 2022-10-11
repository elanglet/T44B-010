<?php

class DBUtil {

    const DSN = "mysql:host=localhost;port=3306;dbname=monjournal";
    const USER = "monjournal";
    const PWD = "password";

    public static function connexion(): ?PDO {

        $cnx = new PDO(self::DSN, self::USER, self::PWD);
        // Paramétrer l'objet PDO pour qu'il lève des exceptions en cas de problème.
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $cnx;
    }
}
