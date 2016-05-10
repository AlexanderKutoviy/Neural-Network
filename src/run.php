<?php

$ann = fann_create("classify.txt");


$output = fann_run($ann, generate_frequencies("ANN are slowly adjusted so as to produce the same output as in
            the examples. The hope is that when the ANN is shown a new
            X-ray images containing healthy tissues"));

var_dump($output);

$output = fann_run($ann, generate_frequencies("Voyons, Monsieur, absolument pas, les camions d’aujourd’hui ne se trainent pas, bien au contraire. Il leur arrive meme de pousser les voitures. Non, croyez moi, ce qu’il vous faut, c’est un camion !
     - Vous croyez ? Si vous le dites. Est-ce que je pourrais l’avoir en rouge ?
     - Bien entendu cher Monsieur,vos desirs sont des ordres, vous l’aurez dans quinze jours cle en main. Et la maison sera heureuse de vous offrir le porte-cle. Si vous payez comptant. Cela va sans dire, ajouta Monsieur Filou.
     - Ah, si ce "));

var_dump($output);

$output = fann_run($ann, generate_frequencies("tworzac dzielo literackie, pracuje na jezyku. To wlasnie jezyk stanowi tworzywo, dzieki ktoremu powstaje tekst. Jezyk literacki ( lub inaczej artystyczny) powstaje poprzez wybor odpowiednich srodkow i przy wykorzystaniu odpowiednich zabiegow technicznych.
            Kompozycja - jest to uklad elementow tresciowych i formalnych dziela dokonanych wedlug okreslonych zasad konstrukcyjnych.
            Ksztaltowanie tworzywa dziela literackiego jest procesem skomplikowanym i przebiegajacym na wielu poziomach.
            Sklada sie na nie:"));

var_dump($output);

?>