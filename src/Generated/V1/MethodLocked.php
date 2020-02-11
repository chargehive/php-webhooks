<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodLocked extends WebhookFoundation
{
  /**
   * The ID of the payment method that has been locked
   *
   * @var string
   */
  public $methodID;

  /**
   * Time when the lock will end, output as the number of seconds since unix epoch
   *
   * @var number
   */
  public $lockTimestamp;

}
