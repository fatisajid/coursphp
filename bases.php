<?php
$myPage = 'base';
require 'partials/head.php'

?>


<h1>Ici ma page base !</h1>
<?php
echo '<h2>Les balises</h2>';
echo '<p class="fst-italic text-secondary">Ici je suis dans les balises PHP.</p>';
?>
<p>
    Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP
    on utilise : < ?php pour le refermer on utilise ?>.
        En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
</p>
<?php
echo '<p>echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML. </p>';
?>

<h3>Différents affichage</h3>

<?php
echo '<p>Ici c\'est un echo</p>';
print '<p>Ici c\'est un print</p>';

?>
<p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
<?php
echo '<p> valeur 1<p>', '<p>valeur 2 </p>';
print '<p>La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</P>';

?>
<h3>D'autres affichage</h3>
<ul>
    <li>print_r, affiche des informations a propos d'une variable, de maniére à ce qu'elle soit lisible.</li>
    <li>var_dump, affiche les informations structurées d'un variable, ycompris son type et sa valeur.</li>
</ul>

<?php
require 'partials/footer.php'

?>