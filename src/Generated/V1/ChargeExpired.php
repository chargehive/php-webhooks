<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeExpired extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been expired
   *
   * @var string
   */
  public $chargeID;

  /**
   * The amount of the charge
   *
   * @var number
   */
  public $amount;

  /**
   * The currency of the amount
   *
   * @var string
   */
  public $currency;

  /**
   * The unix timetsamp of when the charge was attempted
   *
   * @var number
   */
  public $chargeTimestamp;

  /**
   * The charge renewal number
   *
   * @var number
   */
  public $renewalNumber;

  /**
   * The charge attempt number
   *
   * @var number
   */
  public $attemptNumber;

  /**
   * The charge transaction number
   *
   * @var number
   */
  public $transactionNumber;

  /**
   * ID of the policy triggering the expiry
   *
   * @var string
   */
  public $policyID;

  /**
   * Reason for the charge expiry
   *
   * @var string
   */
  public $reason;

  /**
   * Reason code for the expiry
   *
   * @var number
   */
  public $reasonCode;

}
