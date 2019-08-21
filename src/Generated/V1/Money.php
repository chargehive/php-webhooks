<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

/**
 * Representation of a financial amount
 */
class Money extends WebhookFoundation
{
  /**
   * Amount of money, stored in lowest unit e.g. cents, penies, satoshi
   *
   * @var number
   */
  public $amount;

  /**
   * Currency this amount is for, e.g. GBP, USD, BTC, CREDITS
   *
   * @var string
   */
  public $currency;

}
