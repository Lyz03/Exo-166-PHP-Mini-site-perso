<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "home") {

        include __DIR__.'/../pages/home.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData() {
    $content = file_get_contents('../data/user.json');
    $content = json_decode($content);

    foreach ($content as $key => $value) {
        echo $key . " : ";

        if (is_array($value)) {

            foreach ($value as $item) {
                $item = json_encode($item);

                //echo $item . '<br>';

                // get rid of { and }
                $item = trim($item, '{}');

                $item = explode(',', $item);

                foreach ($item as $experience) {
                    // get rid of "
                    $experience = trim($experience, '"');
                    $experience = str_replace('"', ' ', $experience);

                    echo $experience . '<br>';
                }
            }
        } else {
            echo $value . '<br>';
        }

    }
}

