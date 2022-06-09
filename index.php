<?php
require_once __DIR__.'/Classes/Users.php';
require_once __DIR__.'/Classes/LoggedUsers.php';
require_once __DIR__.'/Classes/Products.php';

# utente non registrato
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

# utente registrato
$utente2 = new LoggedUsers('Marco', 'Rossi', 'Via Po 13, Milano');
$utente2->setNumeroTessera(2302301);
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

# prodotti
$prodotto1 = new Products('antipulci', 'Bayer', 'cane', '85€');
$prodotto2 = new Products('antipulci', 'Bayer', 'gatto', '80€');
$prodotto3 = new Products('spazzola per cani', 'Baubau', 'cane', '15€');
$prodotto4 = new Products('fieno per cincillà', 'Animalia', 'piccoli erbivori', '10€');

// var_dump($prodotto1, $prodotto2, $prodotto3, $prodotto4);

# collego i prodotti ai rispettivi acquirenti
$utente1->setAcquisti($prodotto1);
$utente1->setAcquisti($prodotto2);
$utente2->setAcquisti($prodotto3);
$utente2->setAcquisti($prodotto4);

// var_dump($utente1, $utente2);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div>
        <h2>Scheda utente di: <?php echo $utente1->getNome().' '.$utente1->getCognome(); ?></h2>
        <h3>Tipologia utente: <?php echo $utente1->registrazione; ?></h3>
        <h3>Carrello prodotti: <?php foreach($utente1->getAcquisti() as $key => $item){ ?></h3>
            <?php var_dump($item); } ?>
    </div>
   <div>
        <h2>Scheda utente di: <?php echo $utente2->getNome().' '.$utente2->getCognome(); ?></h2>
        <h3>Tipologia utente: <?php echo $utente2->registrazione; ?></h3>
        <h3>Carrello prodotti: <?php foreach($utente2->getAcquisti() as $key => $item){ ?></h3>
            <?php var_dump($item); } ?>

   </div>
</body>
</html>