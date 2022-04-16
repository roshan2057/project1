
<?php
session_start();
$base_url = 'http://localhost/project/admin/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'helper/specialcharacter.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';


if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'home':
            $_SESSION['active_url'] = 'home';
            include 'controller/homeController.php';
            break;
        case 'addperson':
                $_SESSION['active_url'] = 'addperson';
                include 'controller/addcontroller.php';
                break;
         case 'staff':
                    $_SESSION['active_url'] = 'staff';
                    include 'controller/staffcontroller.php';
                    break;
         case 'user':
                        $_SESSION['active_url'] = 'user';
                        include 'controller/usercontroller.php';
                        break;
         case 'request':
                            $_SESSION['active_url'] = 'request';
                            include 'controller/requestcontroller.php';
                            break;
         case 'notification':
                                $_SESSION['active_url'] = 'notification';
                                include 'controller/logoutcontroller.php';
                                break;                
          case 'logout':
                                        $_SESSION['active_url'] = 'logout';
                                        include 'controller/logoutcontroller.php';
                                        break;
        default :
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/homecontroller.php';
}
