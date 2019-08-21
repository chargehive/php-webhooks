<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeTransaction extends WebhookFoundation
{
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

  const PAYMENT_METHOD_TYPE_CARD = "CARD";
  const PAYMENT_METHOD_TYPE_PAYPAL = "PAYPAL";
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

  const TRANSACTION_TYPE_AUTHORIZE = "AUTHORIZE";
  const TRANSACTION_TYPE_CAPTURE = "CAPTURE";
  const TRANSACTION_TYPE_REFUND = "REFUND";
  const TRANSACTION_TYPE_CANCEL = "CANCEL";
  const TRANSACTION_TYPE_DISPUTE = "DISPUTE";
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

  const TRANSACTION_RESULT_SUCCESS = "SUCCESS";
  const TRANSACTION_RESULT_DECLINED = "DECLINED";
  const TRANSACTION_RESULT_VERIFY = "VERIFY";
  const TRANSACTION_RESULT_PENDING = "PENDING";
  const TRANSACTION_RESULT_PENDING_SUCCESS = "PENDING_SUCCESS";
  const TRANSACTION_RESULT_RETRY = "RETRY";
  public $transactionResult;

  /**
   * @var Money
   */
  public $requestedAmount;

  /**
   * @var Money
   */
  public $transactedAmount;

  const CONTRACT_TYPE_NONE = "NONE";
  const CONTRACT_TYPE_PAYMENT = "PAYMENT";
  const CONTRACT_TYPE_SUBSCRIPTION_INITIAL = "SUBSCRIPTION_INITIAL";
  const CONTRACT_TYPE_SUBSCRIPTION_RENEWAL = "SUBSCRIPTION_RENEWAL";
  const CONTRACT_TYPE_ONECLICK = "ONECLICK";
  public $contractType;

  public $statementDescriptor;

  const FAILURE_TYPE_NONE = "NONE";
  const FAILURE_TYPE_SOFT = "SOFT";
  const FAILURE_TYPE_HARD = "HARD";
  public $failureType;

  const VERIFICATION_STATUS_NOT_CHECKED = "NOT_CHECKED";
  const VERIFICATION_STATUS_PASSED = "PASSED";
  const VERIFICATION_STATUS_FAILED = "FAILED";
  const VERIFICATION_STATUS_CONTINUE = "CONTINUE";
  public $verificationStatus;

  const LIABILITY_UNKNOWN = "UNKNOWN";
  const LIABILITY_MERCHANT = "MERCHANT";
  const LIABILITY_ISSUER = "ISSUER";
  public $liability;

  /**
   * @var TransactionDetail[]
   */
  public $details;

  /**
   * Number of transactions processed against this charge (including this one)
   *
   * @var number
   */
  public $transactionNumber;

  /**
   * Number of attempts to perform this transaction
   *
   * @var number
   */
  public $attemptNumber;

  /**
   * Retries within the current attempt
   *
   * @var number
   */
  public $cascadeLevel;

  /**
   * Renewal number for the subscription
   *
   * @var number
   */
  public $renewalNumber;

  /**
   * References for this transaction
   *
   * @var object
   */
  public $references;

  /**
   * Transaction time, measured in seconds since the Unix epoch
   *
   * @var number
   */
  public $transactionTime;

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
