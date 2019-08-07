<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodRefreshed extends WebhookFoundation
{
  //Generated at 2019-08-07 16:11:58

  /**
   * Unique ID for the method that has been refreshed
   *
   * @var string
   */
  public $chargeUuid;
}
