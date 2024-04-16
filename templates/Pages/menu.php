
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
    <title>Tasty Bites Kitchen</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('menu') ?>
</head>
<body>
<header class="navbar">
    <div class="brand-container">
        <?= $this->Html->image('logo.png', ['alt' => 'Tasty Bites Kitchen', 'class' => 'brand-logo']) ?>
    </div>
    <nav class="nav-menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="webroot/img/ShoppingBasketIcon.jpg">
            <?= $this->Html->image('ShoppingBasketIcon.jpg', ['alt' => 'Icon 1', 'url' => ['controller' => 'ControllerName', 'action' => 'actionForIcon1']]) ?>
        </a>
        <a href="webroot/img/profileIcon.png">
            <?= $this->Html->image('profileIcon.png', ['alt' => 'Icon 2', 'url' => ['controller' => 'ControllerName', 'action' => 'actionForIcon2']]) ?>
        </a>
    </div>
</header>

<main>
    <section class="menu-section">
        <h1 class="menu-title">Weekly Menu</h1>
<!-- First row of images -->
<div class="menu-row">
    <?php
    $menuItems = [
        ['image' => 'menuitem1.jpg', 'description' => 'Description for Item 1'],
        ['image' => 'menuitem2.jpg', 'description' => 'Description for Item 2'],
        ['image' => 'menuitem3.jpg', 'description' => 'Description for Item 3'],
        ['image' => 'menuitem4.jpg', 'description' => 'Description for Item 4']
    ];
    ?>
    <?php foreach ($menuItems as $item): ?>
        <div class="menu-item">
            <a href="/detail">
                <?= $this->Html->image($item['image'], ['alt' => "Menu Item", 'class' => 'menu-image']); ?>
            </a><!-- Closing anchor tag here -->
            <p class="menu-description"><?= h($item['description']) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<!-- Second row of images -->
<div class="menu-row">
    <?php
    $menuItems = [
        ['image' => 'menuitem5.jpg', 'description' => 'Description for Item 5'],
        ['image' => 'menuitem6.jpg', 'description' => 'Description for Item 6'],
        ['image' => 'menuitem7.jpg', 'description' => 'Description for Item 7'],
        ['image' => 'menuitem8.jpg', 'description' => 'Description for Item 8']
    ];
    ?>
    <?php foreach ($menuItems as $item): ?>
        <div class="menu-item">
            <a href="/detail">
                <?= $this->Html->image($item['image'], ['alt' => "Menu Item", 'class' => 'menu-image']); ?>
            </a><!-- Closing anchor tag here -->
            <p class="menu-description"><?= h($item['description']) ?></p>
        </div>
    <?php endforeach; ?>
</div>
    </section>
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
