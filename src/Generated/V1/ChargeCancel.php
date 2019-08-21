<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeCancel extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been cancelled
   *
   * @var string
   */
  public $chargeUuid;

}
