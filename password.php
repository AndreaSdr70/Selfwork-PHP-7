<?php


//Regole
// 1. la password sia lunga almeno 8 caratteri;
// 2. la password contenga almeno un numero;
// 3. la password contenga almeno un carattere MAIUSCOLO;
// 4. la password contenga almeno un carattere speciale

$password = readline('Inserisci qui la password: ');

echo " Password inserita: " . $password . "\n";

//1. la password sia lunga almeno 8 caratteri;
// if (strlen($password) >= 8){
//     echo "La password è lunga almeno 8 caratteri";
// }else{
//     echo " La password DEVE essere più lunga di 8 caratteri";
// }

// Funzione Regola 1
function checkLenght($pwd){

    if (strlen($pwd) >= 8){

        echo "La password è lunga almeno 8 caratteri\n";
        return true;
        
    }else{
        echo " La password DEVE essere più lunga di 8 caratteri\n";
        return false;
    }
}

// Funzione regola 2
function checkNumber($pwd){
    for ($i=0; $i < strlen($pwd); $i++){
        if(is_numeric($pwd[$i])){
    
            echo "la tua password contiene un numero. Bravo!\n";
            // break; //Mi permette di uscire dalla condizione e cicli
            return true;
        }
    }
}

// 2. la password contenga almeno un numero;
// // // echo $password[2];
// for ($i=0; $i < strlen($password); $i++){
//     if(is_numeric($password[$i])){

//         echo "la tua password contiene un numero. Bravo!\n";
//         break; //Mi permette di uscire dalla condizione e cicli

//     }
// }


// Funzione regola 3
function checkUppercase($pwd){
    for ($i=0; $i < strlen($pwd); $i++){ 
    
        if (ctype_upper($pwd[$i])){
            echo "la password contiene una maiuscola\n";
            return true;
        }
    }
}

// 3. la password contenga almeno un carattere MAIUSCOLO;

// for ($i=0; $i < strlen($password); $i++) { 
    
//     if (ctype_upper($password[$i])) {
//         echo "la password contiene una maiuscola\n";
//         break;
//     }
// }

// Funzione regola 4
const SPECIAL_CHARS = ["!", "@", "#", "$"];

function checkSpecialChar($pwd){

       for ($i=0; $i < strlen($pwd); $i++ ){

        if(in_array($pwd[$i], SPECIAL_CHARS)){
            echo "La password contiene un carattere speciale \n";
        return true;
        }
         
    }
}



//Funzione Password TOTALE delle funzioni
function checkPassword($pwd){

$first_rule = checkLenght ($pwd); //Single Responsability - Responsabilità ssingola
$second_rule = checkNumber ($pwd);
$third_rule = checkUppercase($pwd);
$fouth_rule = checkSpecialChar($pwd);

if($first_rule && $second_rule && $third_rule && $fouth_rule){
    
        echo "Password accettata\n";
}else{

    echo "Questa password non è stata accettata "
}


}

checkPassword($password);
















// 4. la password contenga almeno un carattere speciale
// in_array(mixed $needle, array $haystack, bool $strict = false) : bool

// $special_chars = ["1", "@", "#", "$"];

//     for ($i=0; $i < strlen($password); $i++ ){

//         if(in_array($password[$i], $special_chars));

//         echo "La password contiene un carattere speciale \n";
//         break;

//     }





// Cicli annidati NON SI FANNO! ANCHE SE NON SONO ERRATI!!
    // foreach ($special_chars as $char){
    //     if($char == $password[$i]){
    //         echo "La password continene un carattere speciale \n";

    //     }
    // }
?>