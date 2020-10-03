<?php



# Prise du temps actuel au début du script
$time_start = microtime(true);

# Variables globales du site
define('CHEMIN_VUES', 'views/');
$date = date("j/m/Y");

# Require des classes automatisé
function chargerClasse($classe)
{
    require 'models/' . $classe . '.class.php';
}

spl_autoload_register('chargerClasse');




# Ecrire ici le header de toutes pages HTML
require_once(CHEMIN_VUES . 'header.php');

# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
# Quelle action est demandée ?
switch ($action) {
    case 'homepage':
        require_once('controllers/HomepageController.php');
        $controller = new HomepageController($db);
        break;
    case 'disconnect':
        require_once('controllers/DisconnectController.php');
        $controller = new DisconnectController();
        break;
    case 'register':
        require_once('controllers/RegisterController.php');
        $controller = new RegisterController($db);
        break;
    case 'venues':
        require_once('controllers/VenuesController.php');
        $controller = new VenuesController($db);
        break;
    case 'member':
        require_once('controllers/MemberController.php');
        $controller = new MemberController($db);
        break;
    case 'admin':
        require_once('controllers/AdminController.php');
        $controller = new AdminController($db);
        break;
    case 'adminM':
        require_once('controllers/AdminMController.php');
        $controller = new AdminMController($db);
        break;
    case 'adminV':
        require_once('controllers/AdminVController.php');
        $controller = new AdminVController($db);
        break;
    case 'login':
        require_once('controllers/LoginController.php');
        $controller = new LoginController($db);
        break;
    case 'logout':
        require_once('controllers/LogoutController.php');
        $controller = new LogoutController();
        break;
    default: # Par défaut, le contrôleur de l'accueil est sélectionné
        require_once('controllers/HomepageController.php');
        $controller = new HomepageController($db);
        break;
}
# Exécution du contrôleur correspondant à l'action demandée
$controller->run();

$time_end = microtime(true);
$time = number_format(($time_end - $time_start) * 1000, 6);
# Ecrire ici le footer du site de toutes pages HTML
require_once(CHEMIN_VUES . 'footer.php');


