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
        <link rel="icon" type="image/x-icon" href= "logo.png">
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('home') ?>

    </head>
    <body>
 
    <main>
        <section class="header-section" style="background-image: url('/img/homepage.jpg');">
            <div class="text-content">
                <h1>HEADING</h1>
                <h2>Subheading</h2>
                <button onclick="location.href='/menu'">Order Now</button>
            </div>
        </section>
        <!-- About Us Section -->
        <section class="about-us">
            <div class="about-header">
                <h2>About Us</h2>
            </div>
            <div class="about-container">
                <div class="about-item">
                    <h3>Our Story</h3>
                    <p>From our humble beginnings to our current position as a beacon of fine dining, we’ve stayed true to our core values of providing exceptional flavors and unrivaled hospitality.</p>
                </div>
                <div class="about-item">
                    <h3>Our Mission</h3>
                    <p>At Tasty Bites Kitchen, our mission is to offer a unique experience that combines gourmet cuisine with a warm and friendly atmosphere.</p>
                </div>
                <div class="about-item">
                    <h3>Why Choose Us?</h3>
                    <p>Our dedication to culinary excellence and sustainability, coupled with our passion for innovation, makes us the perfect choice for food connoisseurs.</p>
                </div>
            </div>
        </section>
    </body>
    </html>

