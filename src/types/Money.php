<?php
namespace ChargeHive\Webhooks\Types;

/**
 * Representation of a financial amount
 */
class Money
{
  //Generated at 2019-06-25 11:32:37

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
