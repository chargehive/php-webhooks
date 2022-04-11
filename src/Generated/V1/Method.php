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

  public const TYPE_CARD = "CARD";
  public const TYPE_DIGITALWALLET = "DIGITALWALLET";
  public const TYPE_DIRECTDEBIT = "DIRECTDEBIT";
  public const TYPE_CRYPTOCURRENCY = "CRYPTOCURRENCY";
  /**
   * Payment method type
   *
   */
  public $type;

  public const PROVIDER_FORM = "FORM";
  public const PROVIDER_PAYPAL = "PAYPAL";
  public const PROVIDER_APPLEPAY = "APPLEPAY";
  public const PROVIDER_GOOGLEPAY = "GOOGLEPAY";
  public const PROVIDER_AMAZONPAY = "AMAZONPAY";
  /**
   * Payment method type
   *
   */
  public $provider;

  public const INPUT_TYPE_PHYSICAL = "PHYSICAL";
  public const INPUT_TYPE_VIRTUAL = "VIRTUAL";
  public const INPUT_TYPE_PROXY = "PROXY";
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

  public const STATUS_ACTIVE = "ACTIVE";
  public const STATUS_PENDING = "PENDING";
  public const STATUS_CANCELLED = "CANCELLED";
  public const STATUS_SUSPENDED = "SUSPENDED";
  /**
   * Status of payment method
   *
   */
  public $status;

  /**
   * Unique ID for the payments underlying token
   *
   * @var string
   */
  public $tokenID;

  /**
   * ID for the billing profile
   *
   * @var string
   */
  public $billingProfileID;

  /**
   * Unique Fingerprint for the method across all methods by this profile
   *
   * @var string
   */
  public $profileFingerprint;

  /**
   * Unique Fingerprint for the method across the merchant
   *
   * @var string
   */
  public $merchantFingerprint;

  /**
   * The expiry date of the underlying token
   *
   * @var number
   */
  public $tokenExpiry;

}
