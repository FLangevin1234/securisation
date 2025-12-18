<?php

$crayon = \App\Models\Crayon::inRandomOrder()->first();

echo(htmlspecialchars("$crayon->nom"));
echo(htmlspecialchars("Quantité : $crayon->quantite"));

