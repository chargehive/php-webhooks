<?php
namespace ChargeHive\Webhooks\Types;

class ChargeTransaction
{
  //Generated at 2019-08-07 15:37:06

  /**
   * Unique ID for the charge that has been transacted
   *
   * @var string
   */
  public $chargeUuid;

  /**
   * Unique transaction ID for this transaction
   *
   * @var string
   */
  public $transactionId;

  const PAYMENTMETHODTYPE_CARD = "CARD";
  const PAYMENTMETHODTYPE_PAYPAL = "PAYPAL";
  public $paymentMethodType;

  /**
   * Payment Scheme, e.g. Visa, MasterCard, PayPal Business
   *
   * @var string
   */
  public $paymentScheme;

  const TRANSACTIONTYPE_AUTHORIZE = "AUTHORIZE";
  const TRANSACTIONTYPE_CAPTURE = "CAPTURE";
  const TRANSACTIONTYPE_REFUND = "REFUND";
  const TRANSACTIONTYPE_CANCEL = "CANCEL";
  const TRANSACTIONTYPE_DISPUTE = "DISPUTE";
  public $transactionType;

  /**
   * ChargeHive Response Code
   *
   * @var string
   */
  public $responseCode;

  /**
   * Response message designed to display to the consumer
   *
   * @var string
   */
  public $consumerMessage;

  const TRANSACTIONRESULT_SUCCESS = "SUCCESS";
  const TRANSACTIONRESULT_DECLINED = "DECLINED";
  const TRANSACTIONRESULT_VERIFY = "VERIFY";
  const TRANSACTIONRESULT_PENDING = "PENDING";
  const TRANSACTIONRESULT_PENDING_SUCCESS = "PENDING_SUCCESS";
  const TRANSACTIONRESULT_RETRY = "RETRY";
  public $transactionResult;
}
