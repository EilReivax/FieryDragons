<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Payment;
use Authorization\IdentityInterface;

/**
 * Payment policy
 */
class PaymentPolicy
{
    /**
     * Check if $user can add Payment
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Payment $payment
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Payment $payment)
    {
    }

    /**
     * Check if $user can edit Payment
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Payment $payment
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Payment $payment)
    {
    }

    /**
     * Check if $user can delete Payment
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Payment $payment
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Payment $payment)
    {
    }

    /**
     * Check if $user can view Payment
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Payment $payment
     * @return bool
     */
    public function canView(IdentityInterface $user, Payment $payment)
    {
    }
}
