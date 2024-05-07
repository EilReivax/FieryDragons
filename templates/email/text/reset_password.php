<?php
/**
 * Reset Password text email template
 *
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string $given_name email recipient's first name
 * @var string $family_name email recipient's last name
 * @var string $email email recipient's email address
 * @var string $nonce nonce used to reset the password
 */
?>
Reset your account password
==========

Hi <?= h($given_name) ?>,

Thank you for your request to reset the password of your account on Cake CMS/Auth Sample.

To reset your account password, use the button below to access the reset password page:
<?= $this->Url->build(['controller' => 'Users', 'action' => 'resetPassword', $nonce], ['fullBase' => true]) ?>


==========
This email is addressed to <?= $given_name ?>  <?= $family_name ?> <<?= $email ?>>
Please discard this email if it not meant for you

Copyright (c) <?= date("Y"); ?> Monash FIT Industry Experience
