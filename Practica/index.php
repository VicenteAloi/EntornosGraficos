<?php 
$name= "Vicente"; 
$age = 23;

$otuput = match (true) {
    $age < 18 => "You are a minor, $name.",
    $age >= 18 && $age < 65 => "You are an adult, $name.",
    $age >= 65 => "You are a senior citizen, $name.",
      default => "Age not recognized, $name."
};

define('LOGO_URL', 'https://sm.ign.com/ign_es/gallery/m/mortal-kom/mortal-kombat-legends-snow-blind-trailer-images_1m1j.jpg');

$array=["Vicente", "Sebastian", "Javier", "Santiago", "Gonzalo"];

$person = [
    "name" => "Vicemte",
    "age" => 23,
    "city" => "Rosario",
    "country" => "Argentina",
    "hobbies" => ["gaming", "reading", "coding"]
];
?>


<h1> <?= $otuput ?> </h1>
<img src="<?= LOGO_URL ?>" alt="Mortal Kombat Logo" width="200">

<ul>
   <?php foreach ($array as $key => $arrayElement) : ?>  
         <li>
            <?= $key . " " . $arrayElement ?>
         </li>
   <?php endforeach ?>
</ul>
<style>
    :root {
       color-scheme: light dark;
    }

    body{
       display: grid;
       place-content: center;
    }

    h1 {
       font-size: 3rem;
       color: var(--color-text, white);
    }

</style>