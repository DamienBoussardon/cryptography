<?php 

    $s_message_chiffre = "RKiCqwFSPVuy0Yh7joaIZ810uQ";

    $chiffrement = "AES-128-CTR";
    $options = 0;
    $crytage_vecteur_initialisation = '1234567891011121';

    $cle_cryptage = "HtI3d8k0KZxz";


    $decrytage = openssl_decrypt($s_message_chiffre, $chiffrement, $cle_cryptage, $options, $crytage_vecteur_initialisation );

    ECHO "Le message chiffré était : " . $decrytage . "\n";
?>