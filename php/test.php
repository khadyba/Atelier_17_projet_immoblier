<?php
$data = array(
    'nom' => 'John Doe',
    'age' => 30,
    'ville' => 'Paris'
);

// Sérialisation du tableau
$serializedData = serialize($data);

// Désérialisation du tableau
$DeserializedData= unserialize($serializedData);

// Affichage de la représentation séquentielle
echo "Représentation séquentielle : " . $serializedData . "\n";

echo "Représentation séquentielle d'une déserialisation: ";
print_r($DeserializedData );


