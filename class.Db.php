<?php
class Db {
  // Se till att INTE lägga upp db.php på Github eller liknande.
  // Googla på .gitignore, så hittar du metoden för att skydda filen.
  include_once "db.php";


  public function connect() {
    try {
      $dbh = new PDO($connectString, $user, $pw);
    }
    catch(PDOException $err) {
      echo "Ojdå. Ingen kontakt med servern.<br />";
      file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
    }
    return $dbh;
  }
}
?>
