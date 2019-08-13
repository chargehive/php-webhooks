<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeCancel extends WebhookFoundation
{
  //Generated on 2019-08-13

  /**
   * Unique ID for the charge that has been cancelled
   *
   * @var string
   */
  public $chargeUuid;
}
