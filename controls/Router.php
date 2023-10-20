<?php

class Router {
    function __construct() {
        $pageURL = explode('/', $_SERVER['REQUEST_URI']);
        
        
        switch ($pageURL[1]) {
            case 'news':
                require_once("models/NewsPage.php");
                $Page = new NewsPage("Jaunumi");
                break;
                
            case 'advertismentAdd':
                require_once("models/AdvertismentAddPage.php");
                $Page = new AdvertismentAddPage("Jauns sludinajums");
                break;

            case 'advertisment':
                require_once("models/AdvertismentPage.php");
                $Page = new AdvertismentPage("Sludinajums");
                break;

            case 'advertismentChange':
                require_once("models/AdvertismentPageChange.php");
                $Page = new AdvertismentPageChange("Izmainit sludinajumu");
                break;
            
            case 'contacts':
                require_once("models/ContactPage.php");
                $Page = new ContactPage("Kontakti");
                break;

            case 'donate':
                require_once("models/DonatePage.php");
                $Page = new DonatePage("Ziedot");
                break;

            case 'login':
                require_once("models/LoginPage.php");
                $Page = new LoginPage("Ielogoties");
                break;

            case 'profileChange':
                require_once("models/ProfileChangePage.php");
                $Page = new ProfileChangePage("Izmainit profili");
                break;

            case 'profile':
                require_once("models/ProfilePage.php");
                $Page = new ProfilePage("Profilis, Vards Uzvards"); //TODO or not
                break;


            case 'register':
                require_once("models/RegisterPage.php");
                $Page = new RegisterPage("Registracija");
                break;

            case 'restorePassword':
                require_once("models/RestorePasswordPage.php");
                $Page = new RestorePasswordPage("Atjaunot paroli");
                break;


            case 'shelter':
                require_once("models/ShelterPage.php");
                $Page = new ShelterPage("Patversme, Nosaukums"); // TODO or not
                break;

            case 'shelters':
                require_once("models/SheltersPage.php");
                $Page = new SheltersPage("Patversmes"); // TODO or not
                break;

            case 'shops':
                require_once("models/ShopPage.php");
                $Page = new ShopPage("Veikali"); // TODO or not
                break;
            
            default:
                require_once("models/MainPage.php");
                $Page = new MainPage("Paws and Tails");             
              break;
          }

          print($Page->getPage());  
    }
}

?>