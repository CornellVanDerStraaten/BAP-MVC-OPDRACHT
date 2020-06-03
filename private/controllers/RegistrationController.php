<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistrationController {

	public function registration() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register');

	}
	public function registrationProcessing(){

		$result = validate_register_form($_POST);

		if ( count($result['errors']) === 0 ) {
			

			if ( userNotRegistered($result['data']['email']) ) {
				
				createUser($result['data']['email'], $result['data']['wachtwoord']);
				
				$bedanktUrl = url('registration.thanks');
				redirect($bedanktUrl);

			} else {
				$errors['email'] = 'Dit account bestaat al';
			}
		}

		$template_engine = get_template_engine();
		echo $template_engine->render( 'register', ['errors' => $result['errors'] ] );

	}
	
	public function registrationThanks() {
		
		$template_engine = get_template_engine();
		echo $template_engine->render( 'registerThanks');
	}

}

