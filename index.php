<?php

// todo
// lunghezza minima 8 caratteri
// almeno una lettere maiuscola
// almeno un numero
// almeno un carattere speciale

// $pwd = readline("Inserisci la password: ");

function checkMinLenght($password) {
    if (strlen($password) >= 8) {
        return true;
    } else {
        return false;
    }
}

// var_dump(checkMinLenght($pwd));


function checkUpperCase($password) {
    if (ctype_lower($password)) {
        return false;
    } else {
        return true;
    }
}

// var_dump(checkUpperCase($pwd));

function checkNum($password) {
    for ($i = 1; $i < strlen($password); $i++) { 
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;
};

// var_dump(checkNum($pwd));

$specialChars =  ['!', '#', '@', '-', '_', '&', '$'];

function checkSpecialChar($password, $chars) {
    for ($i = 0; $i < strlen($password); $i++) { 
        if (in_array($password[$i], $chars)) {
            return true;
        }
    }
    return false;
};

// var_dump(checkSpecialChar($pwd, $specialChars));


// var_dump(checkPassword($pwd));

do {
    
    $pwd = readline("Inserisci la password: ");

    if (checkMinLenght($pwd) == false) {
        echo "password troppo corta\n";
    };

    if (checkNum($pwd) == false) {
        echo "passowrd senza numeri\n";
    };

    if (checkUpperCase($pwd) == false) {
        echo "password senza maiuscole\n";
    };

    if (checkSpecialChar($pwd, $specialChars) == false) {
        echo "password senza caratteri speciali\n";
    };
    
} while (!(checkMinLenght($pwd) && checkUpperCase($pwd) && checkNum($pwd) && checkSpecialChar($pwd, $specialChars)));



