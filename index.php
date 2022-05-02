






<?php

/* 

Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/

//phpinfo();

$text= 'Ho un cucciolo di Shiba Inu di nome Yuki e oggi fa 4 mesi!';

$lenghtText = strlen($text);




$censored = $_GET['censored'];



$textCensored = str_replace($censored, '***', $text);



$lenghtCensoredText = strlen($textCensored);

?>


<h1><?php echo $text ?></h1>


<h3>La lunghezza del testo è di <?php echo $lenghtText ?> caratteri</h3>



<h2>La frase modificata:</h2>
<p>
    <?php echo $textCensored?>
</p>
<p>
    La lunghezza del testo modificato è di: <?php echo $lenghtCensoredText ?> caratteri

</p>