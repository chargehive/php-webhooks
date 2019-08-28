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

  const RISK_LEVEL_NOT_RATED = "NOT_RATED";
  const RISK_LEVEL_NEGLIGIBLE = "NEGLIGIBLE";
  const RISK_LEVEL_MINOR = "MINOR";
  const RISK_LEVEL_MODERATE = "MODERATE";
  const RISK_LEVEL_SIGNIFICANT = "SIGNIFICANT";
  const RISK_LEVEL_SERVERE = "SERVERE";
  /**
   * Risk level for this score
   *
   * @var string
   */
  public $riskLevel;

  const FACTOR_VERIFICATION = "VERIFICATION";
  const FACTOR_VALIDATION = "VALIDATION";
  const FACTOR_VELOCITY = "VELOCITY";
  const FACTOR_TRUST = "TRUST";
  const FACTOR_DURATION = "DURATION";
  const FACTOR_OTHER = "OTHER";
  const FACTOR_ = "";
  /**
   * The factor type
   *
   * @var string
   */
  public $factor;

  const FACTOR_ON_ADDRESS = "ADDRESS";
  const FACTOR_ON_BROWSER = "BROWSER";
  const FACTOR_ON_IP = "IP";
  const FACTOR_ON_COUNTRY = "COUNTRY";
  const FACTOR_ON_STATE = "STATE";
  const FACTOR_ON_CITY = "CITY";
  const FACTOR_ON_DEVICE = "DEVICE";
  const FACTOR_ON_EMAIL = "EMAIL";
  const FACTOR_ON_EMAIL_DOMAIN = "EMAIL_DOMAIN";
  const FACTOR_ON_DATE = "DATE";
  const FACTOR_ON_MERCHANT = "MERCHANT";
  const FACTOR_ON_ISSUER = "ISSUER";
  const FACTOR_ON_BIN = "BIN";
  const FACTOR_ON_METHOD = "METHOD";
  const FACTOR_ON_CUSTOMER = "CUSTOMER";
  const FACTOR_ON_AMOUNT = "AMOUNT";
  const FACTOR_ON_PHONE = "PHONE";
  const FACTOR_ON_LANGUAGE = "LANGUAGE";
  const FACTOR_ON_DISTANCE_TO_BILLING = "DISTANCE_TO_BILLING";
  const FACTOR_ON_DISTANCE_TO_SHIPPING = "DISTANCE_TO_SHIPPING";
  const FACTOR_ON_DISTANCE_TO_IP = "DISTANCE_TO_IP";
  const FACTOR_ON_OTHER = "OTHER";
  const FACTOR_ON_ = "";
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
