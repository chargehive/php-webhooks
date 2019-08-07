<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeCancel extends WebhookFoundation
{
  //Generated at 2019-08-07 16:11:58

  /**
   * Unique ID for the charge that has been cancelled
   *
   * @var string
   */
  public $chargeUuid;
}
