<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        ConnectionManager::get($name)->getDriver()->connect();
        // No exception means success
        $connected = true;
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
        if ($name === 'debug_kit') {
            $error = 'Try adding your current <b>top level domain</b> to the
                <a href="https://book.cakephp.org/debugkit/5/en/index.html#configuration" target="_blank">DebugKit.safeTld</a>
            config and reload.';
            if (!in_array('sqlite', \PDO::getAvailableDrivers())) {
                $error .= '<br />You need to install the PHP extension <code>pdo_sqlite</code> so DebugKit can work properly.';
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meal Details - Tasty Bites Kitchen</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('detail') ?>
</head>
<body>
<header class="navbar">
    <div class="brand-container">
        <?= $this->Html->image('logo.png', ['alt' => 'Tasty Bites Kitchen', 'class' => 'brand-logo']) ?>
    </div>
    <nav class="nav-menu">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
        </ul>
    </nav>
    <div class="icons">
        <?= $this->Html->image('ShoppingBasketIcon.jpg', ['alt' => 'Shopping Basket', 'url' => '/basket']) ?>
        <?= $this->Html->image('profileIcon.png', ['alt' => 'Profile', 'url' => '/profile']) ?>
    </div>
</header>

<main class="meal-detail-main">
    <div class="meal-detail-container">
        <div class="meal-detail-image">
            <?= $this->Html->image("menuitem1.jpg", ['alt' => "Meal Image", 'class' => 'meal-image']); ?>
        </div>
        <div class="meal-detail-info">
            <h1 class="meal-name">Meal Name</h1>
            <div class="meal-price-qty">
                <span class="meal-price">Price: $9.99</span>
                <div class="qty-control">
                    <label for="qty">QTY:</label>
                    <input type="number" id="qty" name="qty" min="1" value="1">
                </div>
            </div>
            <p class="meal-description">This is a delicious meal with ingredients and preparation description.</p>
            <div class="meal-buttons">
                <button type="button" onclick="location.href='/menu'">Return to Menu</button>
                <button type="button">Add to Basket</button>
            </div>
        </div>
    </div>
</main>

<section class="contact-us-now">
    <h2>Contact Us Now</h2>
    <p>Email: contact@tastybites.com</p>
    <p>Phone: 0400xxxxxxx</p>
    <p>Address: 123 Flavor Street, Foodville, FK 12345</p>
</section>
</main>
<footer>
    <p>&copy; <?= date('Y') ?> Tasty Bites Kitchen. All rights reserved.</p>
</footer>
</body>
</html>

