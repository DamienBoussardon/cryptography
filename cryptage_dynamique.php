<?php

$s_message = "Ceci est un message secret ";

$chiffrement = "BF-CBC";
$options = 0;
$longueur_vecteur_initialisation = openssl_cipher_iv_length($chiffrement);

$crytage_vecteur_initialisation = random_bytes($longueur_vecteur_initialisation);
$cle_cryptage = openssl_digest(php_uname(), 'MD5', TRUE);


$crytage = openssl_encrypt($s_message, $chiffrement, $cle_cryptage, $options, $crytage_vecteur_initialisation );

ECHO "Le message après chiffrement est : " . $crytage . "\n";
/*__________________________________________________________________________________________________________________*/

$cle_decryptage = openssl_digest(php_uname(), 'MD5', TRUE);

$decrytage = openssl_decrypt($crytage, $chiffrement, $cle_decryptage, $options, $crytage_vecteur_initialisation );

ECHO "Le message après déchiffrement est : " . $decrytage . "\n";