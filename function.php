<?php 

function generaStringaCasuale($lunghezza, $num, $lett, $spec) {
    $numeri = '0123456789';
    $lettereMaiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lettereMinuscole = 'abcdefghijklmnopqrstuvwxyz';
    $caratteriSpeciali = '!@#$%^&*()_-+=<>?';
    $caratteri = "";
    if($num){
        $caratteri .= $numeri;
    }
    if($lett){
        $caratteri .=  $lettereMinuscole . $lettereMaiuscole;
    }
    if($spec){
        $caratteri .= $caratteriSpeciali;
    }
    if (!$num && !$lett && !$spec){
        $caratteri .= $numeri . $lettereMinuscole . $lettereMaiuscole .$caratteriSpeciali;
    }
    $lunghezzaCaratteri = strlen($caratteri);
    $stringaCasuale = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);
        $stringaCasuale .= $caratteri[$indiceCasuale];
    }

    return $stringaCasuale;
}

?>