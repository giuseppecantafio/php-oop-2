<?php
require_once __DIR__.'/Classes/Users.php';
require_once __DIR__.'/Classes/LoggedUsers.php';

# utenti non registrati
$utente1 = new Users('Gianna', 'Neri', 'giannina@gmail.com', 'Via Santa Monica 12, Roma');

#utenti registrati
$utente2 = new LoggedUsers('Marco', 'Rossi', 'm.rossi@gmail.com', 'Via Po 13, Milano');

#controllo mail da sistemare
try {
 $utente1->setEmail();
} catch (Exception $e) {
 echo 'Errore: ' . $e->getMessage();
}
var_dump($utente1, $utente2);
?>