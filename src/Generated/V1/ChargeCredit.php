<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeCredit extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been transacted
   *
   * @var string
   */
  public $chargeUuid;

  /**
   * Billing Profile ID of the charge
   *
   * @var string
   */
  public $billingProfileId;

  /**
   * Unique transaction ID for this credit
   *
   * @var string
   */
  public $transactionId;

  /**
   * Reason for the credit
   *
   * @var string
   */
  public $reason;

  /**
   * User ID or Configuration ID responsible for the credit
   *
   * @var string
   */
  public $creditedBy;

  /**
   * @var Money
   */
  public $creditedAmount;

  protected function _set($property, $value)
  {
    if($property === 'creditedAmount')
    {
      $this->creditedAmount = Money::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
