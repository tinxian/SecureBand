<?php

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class OverOnsController {

	function overons(){

		include __DIR__ . '/../models/overonsModel.php';
		$overons = get_overons();
		include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/overons.php';
				include __DIR__ . '/../views/footer.php';

	}

}
