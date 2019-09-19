<?php

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class HomeController {

	function homepage(){

		include __DIR__ . '/../models/homeModel.php';
		$featured_news = get_featured_news();
		$other_news = get_other_news();
		include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/home.php';
				include __DIR__ . '/../views/footer.php';

	}

}
