<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeTransaction extends WebhookFoundation
{
  //Generated on 2019-08-12

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
   * ID for the payment method token used
   *
   * @var string
   */
  public $paymentMethodId;

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

  /**
   * @var Money
   */
  public $requestedAmount;

  /**
   * @var Money
   */
  public $transactedAmount;

  const CONTRACTTYPE_NONE = "NONE";
  const CONTRACTTYPE_PAYMENT = "PAYMENT";
  const CONTRACTTYPE_SUBSCRIPTION_INITIAL = "SUBSCRIPTION_INITIAL";
  const CONTRACTTYPE_SUBSCRIPTION_RENEWAL = "SUBSCRIPTION_RENEWAL";
  const CONTRACTTYPE_ONECLICK = "ONECLICK";
  public $contractType;

  public $statementDescriptor;

  const FAILURETYPE_NONE = "NONE";
  const FAILURETYPE_SOFT = "SOFT";
  const FAILURETYPE_HARD = "HARD";
  public $failureType;

  const VERIFICATIONSTATUS_NOT_CHECKED = "NOT_CHECKED";
  const VERIFICATIONSTATUS_PASSED = "PASSED";
  const VERIFICATIONSTATUS_FAILED = "FAILED";
  const VERIFICATIONSTATUS_CONTINUE = "CONTINUE";
  public $verificationStatus;

  const LIABILITY_UNKNOWN = "UNKNOWN";
  const LIABILITY_MERCHANT = "MERCHANT";
  const LIABILITY_ISSUER = "ISSUER";
  public $liability;

  /**
   * @var TransactionDetail[]
   */
  public $details;

  protected function _set($property, $value)
  {
    if($property == 'requestedAmount')
    {
      $this->requestedAmount = Money::fromSource($value);
      return;
    }

    if($property == 'transactedAmount')
    {
      $this->transactedAmount = Money::fromSource($value);
      return;
    }

    if($property == 'details')
    {
      $this->details = TransactionDetail::manyFromSource($value);
      return;
    }

    parent::_set($property, $value);
  }

}
