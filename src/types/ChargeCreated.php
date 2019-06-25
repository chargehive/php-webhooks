<?php
namespace ChargeHive\Webhooks\Types;

class ChargeCreated
{
  //Generated at 2019-06-25 11:32:37

  /**
   * Unique ID for the charge that has been created
   *
   * @var string
   */
  public $chargeUuid;

  const CHARGEINTENT_PROFILE_CREATE = "PROFILE_CREATE";
  const CHARGEINTENT_METHOD_ADD = "METHOD_ADD";
  const CHARGEINTENT_METHOD_REFRESH = "METHOD_REFRESH";
  const CHARGEINTENT_CAPTURE = "CAPTURE";
  const CHARGEINTENT_REFUND = "REFUND";
  /**
   * The intent of this charge
   *
   * @var string
   */
  public $chargeIntent;

  const CONTRACT_NONE = "NONE";
  const CONTRACT_PAYMENT = "PAYMENT";
  const CONTRACT_SUBSCRIPTION_INITIAL = "SUBSCRIPTION_INITIAL";
  const CONTRACT_SUBSCRIPTION_RENEWAL = "SUBSCRIPTION_RENEWAL";
  const CONTRACT_ONECLICK = "ONECLICK";
  public $contract;

  /**
   * @var Money
   */
  public $amount;
}
