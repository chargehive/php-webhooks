<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

/**
 * Representation of a financial amount
 */
class Money extends WebhookFoundation
{
  //Generated at 2019-08-07 16:11:58

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
