<?php
setcookie("nom", '', time() - 3600);
setcookie("prenom", '', time() - 3600);
setcookie("groupe", '', time() - 3600);
setcookie("destination", '', time() - 3600);
setcookie("poste", '', time()-3600);
setcookie("numero", '', time()-3600);
header ('location: ./inscription_etudiant.php');
sleep(2);
?>
