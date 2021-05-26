<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class FraudScore extends WebhookFoundation
{
  /**
   * Numerical fraud score
   *
   * @var number
   */
  public $score;

  public const RISK_LEVEL_NOT_RATED = "NOT_RATED";
  public const RISK_LEVEL_NEGLIGIBLE = "NEGLIGIBLE";
  public const RISK_LEVEL_MINOR = "MINOR";
  public const RISK_LEVEL_MODERATE = "MODERATE";
  public const RISK_LEVEL_SIGNIFICANT = "SIGNIFICANT";
  public const RISK_LEVEL_SERVERE = "SERVERE";
  /**
   * Risk level for this score
   *
   * @var string
   */
  public $riskLevel;

  public const FACTOR_VERIFICATION = "VERIFICATION";
  public const FACTOR_VALIDATION = "VALIDATION";
  public const FACTOR_VELOCITY = "VELOCITY";
  public const FACTOR_TRUST = "TRUST";
  public const FACTOR_DURATION = "DURATION";
  public const FACTOR_OTHER = "OTHER";
  public const FACTOR_ = "";
  /**
   * The factor type
   *
   * @var string
   */
  public $factor;

  public const FACTOR_ON_ADDRESS = "ADDRESS";
  public const FACTOR_ON_BROWSER = "BROWSER";
  public const FACTOR_ON_IP = "IP";
  public const FACTOR_ON_COUNTRY = "COUNTRY";
  public const FACTOR_ON_STATE = "STATE";
  public const FACTOR_ON_CITY = "CITY";
  public const FACTOR_ON_DEVICE = "DEVICE";
  public const FACTOR_ON_EMAIL = "EMAIL";
  public const FACTOR_ON_EMAIL_DOMAIN = "EMAIL_DOMAIN";
  public const FACTOR_ON_DATE = "DATE";
  public const FACTOR_ON_MERCHANT = "MERCHANT";
  public const FACTOR_ON_ISSUER = "ISSUER";
  public const FACTOR_ON_BIN = "BIN";
  public const FACTOR_ON_METHOD = "METHOD";
  public const FACTOR_ON_CUSTOMER = "CUSTOMER";
  public const FACTOR_ON_AMOUNT = "AMOUNT";
  public const FACTOR_ON_PHONE = "PHONE";
  public const FACTOR_ON_LANGUAGE = "LANGUAGE";
  public const FACTOR_ON_DISTANCE_TO_BILLING = "DISTANCE_TO_BILLING";
  public const FACTOR_ON_DISTANCE_TO_SHIPPING = "DISTANCE_TO_SHIPPING";
  public const FACTOR_ON_DISTANCE_TO_IP = "DISTANCE_TO_IP";
  public const FACTOR_ON_OTHER = "OTHER";
  public const FACTOR_ON_ = "";
  /**
   * What this factor is based on
   *
   * @var string
   */
  public $factorOn;

  /**
   * Summary of this score
   *
   * @var string
   */
  public $summary;

  /**
   * Keyed data related to this score
   *
   * @var object
   */
  public $data;

}
