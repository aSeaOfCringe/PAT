<?php

class Router {

    function __construct($db) {
        $pageURL = explode('/', $_SERVER['REQUEST_URI']);
        
        print($this->createPage($pageURL,$db));  
    }

    function createPage($pageURL,$db){
        switch ($pageURL[1]) {
            case 'news':
                require_once("models/NewsPage.php");
                $Page = new NewsPage("Jaunumi");
                $Page->getData($db);
                break;

            case 'advertisment':
                require_once("models/AdvertismentPage.php");
                $Page = new AdvertismentPage("Sludinajums");
                $Page->fetchData($db);
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
                
                if(isset($_POST["btnLogin"])){
                    $Page->login($db);
                }

                break;

            case 'register':
                require_once("models/RegisterPage.php");
                $Page = new RegisterPage("Registracija");
                
                if(isset($_POST["btnRegister"])){
                    $Page->registerNewProfile($db);
                }
                break;

            case 'restorePassword':
                require_once("models/RestorePasswordPage.php");
                $Page = new RestorePasswordPage("Atjaunot paroli");

                if(isset($_POST["btnRestorePsw"])){
                    $Page->restorePassword($db);
                }
                break;


            case 'shelter':
                require_once("models/ShelterPage.php");
                $Page = new ShelterPage("Patversme, Nosaukums"); // TODO or not
                $Page->fetchShelters($db);
                break;

            case 'shelters':
                require_once("models/SheltersPage.php");
                $Page = new SheltersPage("Patversmes"); // TODO or not
                $shelters = $Page->fetchShelters($db);
                break;

            case 'shops':
                require_once("models/ShopPage.php");
                $Page = new ShopPage("Veikali"); // TODO or not
                $Page->fetchShops($db);
                break;
            
            default:
                require_once("models/MainPage.php");
                $Page = new MainPage("Paws and Tails");             
              break;
          }
        return $Page->getPage();
    }
}


class AuthRouter extends Router{

    function createPage($pageURL,$db){
        switch ($pageURL[1]) {
            case 'news':
                require_once("models/NewsPage.php");
                $Page = new NewsPage("Jaunumi");
                $Page->getData($db);
                // $Page->fetchAdoption($db);
                break;
                
            case 'advertismentAdd':
                require_once("models/AdvertismentAddPage.php");
                $Page = new AdvertismentAddPage("Jauns sludinajums");
                break;

            case 'advertisment':
                require_once("models/AdvertismentPage.php");
                $Page = new AdvertismentPage("Sludinajums");
                $Page->fetchData($db);
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

            case 'unlogin':
                require_once("models/LoginPage.php");
                $Page = new LoginPage("Ielogoties");
                $Page->logout($db);
                break;

            case 'profileChange':
                require_once("models/ProfileChangePage.php");
                $Page = new ProfileChangePage("Izmainit profili");
                break;

            case 'profile':
                require_once("models/ProfilePage.php");
                $Page = new ProfilePage("Profilis");
                $Page->getProfileData($db);
                break;

            case 'shelter':
                require_once("models/ShelterPage.php");
                $Page = new ShelterPage("Patversme, Nosaukums");
                $Page->fetchShelters($db);
                break;

            case 'shelters':
                require_once("models/SheltersPage.php");
                $Page = new SheltersPage("Patversmes");
                $shelters = $Page->fetchShelters($db);
                break;

            case 'shops':
                require_once("models/ShopPage.php");
                $Page = new ShopPage("Veikali");
                $Page->fetchShops($db);
                break;
            
            default:
                require_once("models/MainPage.php");
                $Page = new MainPage("Paws and Tails");             
              break;
          }
        return $Page->getPage();
    }

}
?>