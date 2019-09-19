<?php

/**
 * Class AlleNieuwsController
 *
 * Deze handelt de logica van de alleNieuws af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class AlleNieuwsController {

	function allenieuws(){

		include __DIR__ . '/../models/allenieuwsModel.php';
		$other_news = get_other_news();
		include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/allenieuws.php';
				include __DIR__ . '/../views/footer.php';

	}

}
