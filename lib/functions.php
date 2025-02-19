<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

/**
 * include the right page following the page name in the url
 */
function getContent() {
	if (isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'bio' :
                require __DIR__.'/../pages/bio.php';
                break;
            case 'contact':
                require __DIR__.'/../pages/contact.php';
                break;
            case 'home' :
                require __DIR__.'/../pages/home.php';
                break;
            case 'connection' :
                require __DIR__.'/../pages/connection.php';
                break;
            case 'connectionForm' :
                require __DIR__. '/connection-form.php';
                break;
            case 'save' :
                require __DIR__. '/save.php';
                break;
            default :
                require __DIR__.'/../pages/home.php';
        }
	} else {
        require __DIR__.'/../pages/home.php';
    }
}

/**
 * include the page based on the given name
 * @param $name
 */
function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

/**
 * print the user data from user.json
 */
function getUserData() {
    $content = file_get_contents('../data/user.json');
    $content = json_decode($content);

    foreach ($content as $key => $value) {
        echo $key . " : ";

        if (is_array($value)) {

            foreach ($value as $item) {
                $item = json_encode($item);

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

