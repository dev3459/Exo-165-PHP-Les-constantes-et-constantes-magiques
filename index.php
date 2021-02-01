<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.
const nbr12 = 12;
const nbr2 = 2;

echo nbr12 * nbr2."<br>";

const phrase = "C'est cool PHP";
echo (nbr12 + nbr2) * strlen(phrase);

/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.

//Affiche le chemin du ficher et son nom
echo 'Chemin complet du fichier : ' .__FILE__. '<br>';

//Affiche le nom du dossier qui contient le fichier
echo 'Dossier contenant le fichier : ' .__DIR__. '<br>';