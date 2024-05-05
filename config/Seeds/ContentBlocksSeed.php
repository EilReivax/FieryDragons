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
                'value' => 'ugie-cake/cakephp-content-blocks-example-app',
            ],
            [
                'parent' => 'global',
                'label' => 'Logo',
                'description' => 'Shown in the centre of the home page, and also in the top corner of all administration pages.',
                'slug' => 'logo',
                'type' => 'image',
            ],
            [
                'parent' => 'global',
                'label' => 'Copyright Message',
                'description' => 'Copyright information shown at the bottom of all pages.',
                'slug' => 'copyright-message',
                'type' => 'text',
                'value' => '(c) Copyright 2023, enter copyright owner here.',
            ],
            [
                'parent' => 'home',
                'label' => 'Heading',
                'description' => 'The text shown under the website title.',
                'slug' => 'heading',
                'type' => 'text',
                'value' => 'Please enter the heading',
            ],

        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}
