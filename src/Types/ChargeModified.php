<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeModified extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been modified
   *
   * @var string
   */
  public $chargeUuid;

}
