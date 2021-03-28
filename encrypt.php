<?php 

    $s_message = "Ceci est un message secret ";

    $chiffrement = "AES-128-CTR";
    $options = 0;
    $crytage_vecteur_initialisation = '1234567891011121';

    $cle_cryptage = "HtI3d8k0KZxz";


    $crytage = openssl_encrypt($s_message, $chiffrement, $cle_cryptage, $options, $crytage_vecteur_initialisation );

    ECHO "Le message après chiffrement est : " . $crytage . "\n";
   ?>