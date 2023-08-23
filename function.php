<?php 

function generaStringaCasuale($lunghezza) {
    $numeri = '0123456789';
    $lettereMaiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lettereMinuscole = 'abcdefghijklmnopqrstuvwxyz';
    $caratteriSpeciali = '!@#$%^&*()_-+=<>?';

    $caratteri = $numeri . $lettereMaiuscole . $lettereMinuscole . $caratteriSpeciali;
    $lunghezzaCaratteri = strlen($caratteri);
    $stringaCasuale = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);
        $stringaCasuale .= $caratteri[$indiceCasuale];
    }

    return $stringaCasuale;
}

?>