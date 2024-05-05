<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class ContentBlocksSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'parent' => 'global',
                'label' => 'Website Title',
                'description' => 'Shown on the home page, as well as any tabs in the users browser.',
                'slug' => 'website-title',
                'type' => 'text',
                'value' => 'TASTY BITES KITCHEN',
            ],
            [
                'parent' => 'global',
                'label' => 'Logo',
                'description' => 'Shown in the top corner of all pages.',
                'slug' => 'logo',
                'type' => 'image',
            ],
            [
                'parent' => 'global',
                'label' => 'Copyright Message',
                'description' => 'Copyright information shown at the bottom of all pages.',
                'slug' => 'copyright-message',
                'type' => 'text',
                'value' => 'Tasty Bites Kitchen. All rights reserved.',
            ],
            [
                'parent' => 'home',
                'label' => 'Heading',
                'description' => 'The text shown under the website title.',
                'slug' => 'heading',
                'type' => 'text',
                'value' => 'Enjoy the taste of home from our kitchen',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us Heading 1',
                'description' => 'The text shown under "about us".',
                'slug' => 'about-us-heading-1'  ,
                'type' => 'text',
                'value' => 'Our Story',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us Heading 2',
                'description' => 'The text shown under "about us".',
                'slug' => 'about-us-heading-2'  ,
                'type' => 'text',
                'value' => 'Our Mission',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us Heading 3',
                'description' => 'The text shown under "about us".',
                'slug' => 'about-us-heading-3'  ,
                'type' => 'text',
                'value' => 'Why Choose Us?',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us text 1',
                'description' => 'The text shown under "About Us Heading 1".',
                'slug' => 'about-us-text-1'  ,
                'type' => 'html',
                'value' => '<p>
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
                    </p>',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us text 2',
                'description' => 'The text shown under "About Us Heading 2".',
                'slug' => 'about-us-text-2'  ,
                'type' => 'html',
                'value' => '<p>
                        At Tasty Bites Kitchen, we are driven by one purpose - to offer a unique experience that seamlessly blends gourmet cuisines with a warm and inviting atmosphere.<br><br>

                        We believe that dining is more than satisfying one’s hunger but to indulge in the experience and atmosphere that blend to the memories of comfort. That’s why, at Tasty Bites Kitchen, we prioritise excellence so our guests can create meaningful memories with every bite.<br><br>

                        With weekly rotations of your favourite homemade foods, we ensure that every visit is a journey of discovery, with new flavours and delights waiting to be savoured. We strive to always promise our purpose to be the main ingredient to our culinary creations.
                    </p>',
            ],
            [
                'parent' => 'home',
                'label' => 'About Us text 3',
                'description' => 'The text shown under "About Us Heading 3".',
                'slug' => 'about-us-text-3'  ,
                'type' => 'html',
                'value' => '<h4>Weekly Rotations</h4>
                    <p>
                        At Tasty Bites Kitchen, we believe in keeping your dining experience fresh and exciting. That\'s why we offer weekly rotations of your favourite homemade foods, ensuring that there\'s always something new and enticing to discover on our menu. From seasonal specials to fan favourites, we promise to keep your options fresh and exciting.<br><br>
                    </p>

                    <h4>Innovation through Fusion</h4>
                    <p>
                        We believe in going past our boundaries of culinary creativity and providing dishes that explore a variety of flavours from a range of different cuisines. We enjoy bringing our creations to life while maintaining authenticity.<br><br>
                    </p>

                    <h4>Dedication for Perfection</h4>
                    <p>
                        At Tasty Bites Kitchen, excellence is our standard. We approach every dish with a vision and execute it with our touch of dedication to mould every meal to perfection, promising a worthwhile experience with every bite.
                    </p>',
            ],
            [
                'parent' => 'global',
                    'label' => 'Email',
                'description' => 'The text shown under "Contact Us Now".',
                'slug' => 'email'  ,
                'type' => 'text',
                'value' => 'Email: contact@tastybites.com',
            ],
            [
                'parent' => 'global',
                'label' => 'Phone',
                'description' => 'The text shown under "Contact Us Now".',
                'slug' => 'phone'  ,
                'type' => 'text',
                    'value' => 'Phone: 040123456789',
            ],
            [
                'parent' => 'global',
                'label' => 'Address',
                'description' => 'The text shown under "Contact Us Now".',
                'slug' => 'address'  ,
                'type' => 'text',
                'value' => 'Address: 123 Flavor Street, Melbourne VIC 3000',
            ],

        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}
