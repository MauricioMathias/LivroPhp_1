<?php
// interpreta o documento XML
$xml = simplexml_load_file('paises2.xml');

// alteração de propriedades
$xml->populacao = '220 milha';
$xml->religiao = 'Hinduismo';
$xml->geografia->clima = 'temperado';
// adiciona novo nodo
$xml->addChild('presidente', 'Mestre dos magos');

// exibindo o novo XML
echo $xml->asXML();
// grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());


?>