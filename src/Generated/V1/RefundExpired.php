<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class RefundExpired extends WebhookFoundation
{
  /**
   * Unique ID of the parent charge of the refund that has been expired
   *
   * @var string
   */
  public $chargeUuid;

  /**
   * Unique parent ID for the refund that has expired
   *
   * @var string
   */
  public $sourceTransactionID;

}
