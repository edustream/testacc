
<?php include 'header.php'; ?>
<br>
<h3>Bienvenue sur ma page en PHP !!</h3><br><br>
<p class="texte">Bon bah voilà on y est, ça c'est une page d'exemple, vous mettez entre les deux codes php le contenu habituel de votre page.</p>
<?php include 'footer.php'; ?>

// le fichier header :

<html>
<head>
<style>
p.texte { ... }
h3 { ... }
h5 { ... }
</style>
<title> ... </title>
</head>
<body>
<center><h5>Mon gros titre</h5></center><br><br>
ici mon menu

// le fichier footer :

<center>Copyrights 2003 - tous droits réservé</center>
</body>
</html>

// la page php avec les includes reçue dans le navigateur :

<html>
<head>
<style>
p.texte { ... }
h3 { ... }
h5 { ... }
</style>
<title> ... </title>
</head>
<body>
<?php  echo date('d/m/Y h:i:s A'); ?>
<center><h5>Mon gros titre</h5></center><br><br>
ici mon menu
<br>
<h3>Bienvenue sur ma page en PHP !!</h3><br><br>
<p class="texte">Bon bah voilà on y est, ça c'est une page d'exemple, vous mettez entre les deux codes php le contenu habituel de votre page.</p>
<center>Copyrights 2003 - tous droits réservé</center>
</body>
</html>