
<?php
session_start();
$base_url = 'http://localhost/project/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'helper/specialcharacter.php';
include 'helper/ErrorHelper.php';
include 'helper/RouteHelper.php';




if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'controller/logincontroller.php';
            break;
        case 'lost':
                $_SESSION['active_url'] = 'lost';
                include 'controller/lostcontroller.php';
                break;
         case 'newreg':
                    $_SESSION['active_url'] = 'newreg';
                    include 'controller/userregistrationcontroller.php';
                    break;
         case 'sendcourier':
                        $_SESSION['active_url'] = 'sendcourier';
                        include 'controller/sendcouriercontroller.php';
                        break;
         case 'track':
                            $_SESSION['active_url'] = 'track';
                            include 'controller/trackcontroller.php';
                            break;
         case 'logout':
                                $_SESSION['active_url'] = 'logout';
                                include 'controller/logoutcontroller.php';
                                break;
          case 'site':
                                    $_SESSION['active_url'] = 'site' ;
                                    include 'controller/userhomecontroller.php';
                                    break;
    
        default :
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/homecontroller.php';
}
