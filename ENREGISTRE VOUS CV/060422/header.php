header
<nav>
<!-- tous les liens renvoient toujours à index.php
parce que c'est bien cette page qui sera toujours affichée.
Mais on transmet une variable dans le lien, d'ailleurs on l'a appelé "lien".
Elle sera donc transmise en GET.
-->
	<a href="index.php?lien=cvNouveau">créer cv</a>
	<a href="index.php?lien=cvConsulter">consulter cv</a>
	<a href="index.php?lien=cvModifier">modifier cv</a>
	<a href="index.php?lien=cvSupprimer">supprimer cv</a>
</nav>