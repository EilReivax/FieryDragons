<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Bites Kitchen</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>
    <link rel="icon" type="image/x-icon" href="<?= $this->Url->image('logo.png') ?>">
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('home') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
<header class="navbar">
    <div class="brand-container">
        <?= $this->Html->image('logo.png', ['alt' => 'Tasty Bites Kitchen', 'class' => 'brand-logo']) ?>
    </div>
    <nav class="nav-menu">
        <ul>
            <li><a href="/" style="font-size: larger">Home</a></li>
            <li><a href="/items" style="font-size: larger">Menu</a></li>
            <li><a href="/orders" style="font-size: larger">Orders</a></li>
            <li><a href="/users" style="font-size: larger">Users</a></li>
        </ul>
    </nav>
    <div class="icons">
<!--        <a href="/img/ShoppingBasketIcon.jpg">
            <?php /*= $this->Html->image('ShoppingBasketIcon.jpg', ['alt' => 'Icon 1', 'url' => ['controller' => 'ControllerName', 'action' => 'actionForIcon1']]) */?>
        </a>
        <a href="/img/profileIcon.png">
            <?php /*= $this->Html->image('profileIcon.png', ['alt' => 'Icon 2', 'url' => ['controller' => 'ControllerName', 'action' => 'actionForIcon2']]) */?>
        </a>-->
        <?php
        if (!$this->Identity->isLoggedIn()) {
            echo $this->Html->link(
                'Log in',
                ['controller' => 'Auth', 'action' => 'login'],
                ['class' => 'button button-outline']);
        }

        if ($this->Identity->isLoggedIn()) {
            echo $this->Html->link('Logout', ['controller' => 'Auth', 'action' => 'logout']);
        }
        ?>
    </div>
</header>
<?= $this->fetch('content') ?>

<footer>
    <p>&copy; <?= date('Y') ?> Tasty Bites Kitchen. All rights reserved.</p>
</footer>

<!-- Contact Us Now Section -->
<section class="contact-us-now">
    <h2>Contact Us Now</h2>
    <p>Email: contact@tastybites.com</p>
    <p>Phone: 0400xxxxxxx</p>
    <p>Address: 123 Flavor Street, Foodville, FK 12345</p>
</section>

</body>
</html>
