<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeModified extends WebhookFoundation
{
  //Generated on 2019-08-12

  /**
   * Unique ID for the charge that has been modified
   *
   * @var string
   */
  public $chargeUuid;
}
