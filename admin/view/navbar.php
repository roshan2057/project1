<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="resources/style.css">
</head>

<body>


<!--check session -->
<?php
            if (empty($_SESSION['admin']['login'])) 
            {
                $lin = $_SESSION['base_url'] . "?r=login";
                           header('location:' . $lin);
                          
                        } else {
                          
                        }
                        ?>



    <div class="navbar">
        <div class="navbar-koseli">
            <h1>Koseli
                <ion-icon name="bicycle"></ion-icon>
            </h1>
            <div class="navbar-menu">
                <ul>
                    <li>
                        <a href="<?= $base_url ?>?r=home"><span class="icon">
                                <ion-icon name="home-sharp"></ion-icon>
                            </span>
                            <span>Home</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=request"><span class="icon">
                                <ion-icon name="git-pull-request-sharp"></ion-icon>
                            </span>
                            <span>User Request</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=addperson"><span class="icon">
                                <ion-icon name="person-add-sharp"></ion-icon>
                            </span>
                            <span>Add Delivery Person</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=staff"><span class="icon">
                                <ion-icon name="people-sharp"></ion-icon>
                            </span>
                            <span>Staff</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=user"><span class="icon">
                                <ion-icon name="people-sharp"></ion-icon>
                            </span>
                            <span>Users</span></a>
                    </li>
                 
                    <li>
                        <a href="<?= $base_url ?>?r=notification"><span class="icon">
                                <ion-icon name="notifications-circle-sharp"></ion-icon>
                            </span>
                            <span>Notification</span></a>
                    </li>
                    <li>
                        <a href="<?= $base_url ?>?r=logout"><span class="icon">
                                <ion-icon name="log-out-sharp"></ion-icon>
                            </span>
                            <span>logout</span></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>








   