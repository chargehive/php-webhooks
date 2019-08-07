<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeModified extends WebhookFoundation
{
  //Generated at 2019-08-07 16:11:58

  /**
   * Unique ID for the charge that has been modified
   *
   * @var string
   */
  public $chargeUuid;
}
