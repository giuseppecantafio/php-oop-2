<?php
require_once __DIR__.'/Classes/Users.php';
require_once __DIR__.'/Classes/LoggedUsers.php';

# utenti non registrati
$utente1 = new Users('Gianna', 'Neri', 'Via Santa Monica 12, Roma');
try {
 $utente1->setEmail('g.neri@gmail.com');
} catch (Exception $e) {
 echo 'Errore: ' . $e->getMessage();
}
try {
 $utente1->setScadenzaCarta('2023/10');
} catch (Exception $e) {
 echo 'Errore: ' . $e->getMessage();
}
#utenti registrati
$utente2 = new LoggedUsers('Marco', 'Rossi', 'Via Po 13, Milano');
try {
 $utente2->setEmail('m.rossi@gmail.com');
} catch (Exception $e) {
 echo 'Errore: ' . $e->getMessage();
}
try {
 $utente2->setScadenzaCarta('2023/02');
} catch (Exception $e) {
 echo 'Errore: ' . $e->getMessage();
}

var_dump($utente1, $utente2);
?>