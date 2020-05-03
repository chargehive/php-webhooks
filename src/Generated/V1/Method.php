<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class Method extends WebhookFoundation
{
  /**
   * Unique ID for the payment method
   *
   * @var string
   */
  public $id;

  /**
   * Version assigned to the payment method
   *
   * @var string
   */
  public $version;

  /**
   * Name assigned to the method, either provided or calculated
   *
   * @var string
   */
  public $name;

  const TYPE_CARD = "CARD";
  const TYPE_DIGITALWALLET = "DIGITALWALLET";
  const TYPE_DIRECTDEBIT = "DIRECTDEBIT";
  const TYPE_CRYPTOCURRENCY = "CRYPTOCURRENCY";
  /**
   * Payment method type
   *
   */
  public $type;

  const PROVIDER_FORM = "FORM";
  const PROVIDER_PAYPAL = "PAYPAL";
  const PROVIDER_APPLEPAY = "APPLEPAY";
  const PROVIDER_GOOGLEPAY = "GOOGLEPAY";
  const PROVIDER_AMAZONPAY = "AMAZONPAY";
  /**
   * Payment method type
   *
   */
  public $provider;

  const INPUT_TYPE_PHYSICAL = "PHYSICAL";
  const INPUT_TYPE_VIRTUAL = "VIRTUAL";
  const INPUT_TYPE_PROXY = "PROXY";
  public $inputType;

  /**
   * Payment Scheme for the method, e.g. card_visa, paypal_business
   *
   * @var string
   */
  public $paymentScheme;

  /**
   * Unix timestamp of the valid from date for this merthod
   *
   * @var number
   */
  public $validFrom;

  /**
   * Unix timestamp of the expiry date for this merthod
   *
   * @var number
   */
  public $expiry;

  /**
   * Additional information about this payment method
   *
   * @var object
   */
  public $info;

}
