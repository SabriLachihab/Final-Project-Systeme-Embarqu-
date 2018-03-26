<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Main page</title>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="http://192.168.3.3:8081">Live Streaming</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Bonswar</h1>
        <p class="lead">Images from live streaming</p>

<?php

$nb_fichier = 0;

echo '<ul>';

if($dossier = opendir('./webcam_files'))
{
  while(false !== ($fichier = readdir($dossier)))

  {
  if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
  {
	//Only keep .jpg files
	$ext= pathinfo($fichier, PATHINFO_EXTENSION);
	if($ext == "jpg")
	{
	  $nb_fichier++;
	  echo '<li><a href="./webcam_files/' . $fichier . '">' . $fichier . '</a></li>';
	}
    }

  }

echo '</ul><br />';

echo 'Il y a <strong>' . $nb_fichier .'</strong> images(s) dans le dossier';



closedir($dossier);
}

else
{

     echo 'Le dossier n\' a pas pu être ouvert';
}
?>



        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Show predictions</a>


        </p>
      </main>
    </div>

  </body>
</html>
