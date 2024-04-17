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
                <h1>TASTY BITES KITCHEN</h1>
                <h2>Enjoy the taste of home from our kitchen</h2>
                <button onclick="location.href='/items'">Order Now</button>
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
                    <p>
                        During the rising uncertainty amidst the pandemic, a spark ignited within us - a passion for culinary excellence and fusion of homemade meals.<br>
                        It was from this humble beginning that our journey with Tasty Bites Kitchen began.<br><br>

                        What started as a simple passion project bloomed into something far greater.<br>
                        Driven by our love for homemade food and the joy it brings in crafting each and every meal, we strived on a mission to warm the soul with our creations.<br><br>

                        From experimenting in our home kitchen to sharing our creations with friends and family, every step of the way, we were dedicated to bringing the feel of comfort to Melbourne homes.<br>
                        Our visions and dreams became a shared reality over the past few years.<br><br>

                        With each meal prepared to perfection, we remain committed to providing exceptional flavours and service.<br>
                        We have always remained true to our core values, where great food has the ability to bring people together.<br>
                        Each guest that we share our creations with, provides us another reason to continue to grow and learn.<br><br>

                        Join us as we continue to write our cookbook of memories, one delicious chapter at a time.<br>
                    </p>

                </div>
                <div class="about-item">
                    <h3>Our Mission</h3>
                    <p>
                        At Tasty Bites Kitchen, we are driven by one purpose - to offer a unique experience that seamlessly blends gourmet cuisines with a warm and inviting atmosphere.<br><br>

                        We believe that dining is more than satisfying one’s hunger but to indulge in the experience and atmosphere that blend to the memories of comfort. That’s why, at Tasty Bites Kitchen, we prioritise excellence so our guests can create meaningful memories with every bite.<br><br>

                        With weekly rotations of your favourite homemade foods, we ensure that every visit is a journey of discovery, with new flavours and delights waiting to be savoured. We strive to always promise our purpose to be the main ingredient to our culinary creations.
                    </p>

                </div>
                <div class="about-item">
                    <h3>Why Choose Us?</h3>
                    <h4>Weekly Rotations</h4>
                    <p>
                        At Tasty Bites Kitchen, we believe in keeping your dining experience fresh and exciting. That's why we offer weekly rotations of your favourite homemade foods, ensuring that there's always something new and enticing to discover on our menu. From seasonal specials to fan favourites, we promise to keep your options fresh and exciting.<br><br>
                    </p>

                    <h4>Innovation through Fusion</h4>
                    <p>
                        We believe in going past our boundaries of culinary creativity and providing dishes that explore a variety of flavours from a range of different cuisines. We enjoy bringing our creations to life while maintaining authenticity.<br><br>
                    </p>

                    <h4>Dedication for Perfection</h4>
                    <p>
                        At Tasty Bites Kitchen, excellence is our standard. We approach every dish with a vision and execute it with our touch of dedication to mould every meal to perfection, promising a worthwhile experience with every bite.
                    </p>

                </div>
            </div>
        </section>
    </body>
    </html>

