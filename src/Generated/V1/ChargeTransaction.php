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
  const PAYMENT_METHOD_TYPE_DIGITALWALLET = "DIGITALWALLET";
  const PAYMENT_METHOD_TYPE_DIRECTDEBIT = "DIRECTDEBIT";
  const PAYMENT_METHOD_TYPE_CRYPTOCURRENCY = "CRYPTOCURRENCY";
  public $paymentMethodType;

  const PAYMENT_METHOD_PROVIDER_FORM_USER = "FORM_USER";
  const PAYMENT_METHOD_PROVIDER_FORM_AGENT = "FORM_AGENT";
  const PAYMENT_METHOD_PROVIDER_PAYPAL = "PAYPAL";
  const PAYMENT_METHOD_PROVIDER_APPLEPAY = "APPLEPAY";
  const PAYMENT_METHOD_PROVIDER_GOOGLEPAY = "GOOGLEPAY";
  const PAYMENT_METHOD_PROVIDER_AMAZONPAY = "AMAZONPAY";
  public $paymentMethodProvider;

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
  const TRANSACTION_TYPE_VERIFY = "VERIFY";
  const TRANSACTION_TYPE_EXPIRED = "EXPIRED";
  const TRANSACTION_TYPE_INTERNAL = "INTERNAL";
  public $transactionType;

  const TRANSACTION_SUB_TYPE_IDENTIFY = "IDENTIFY";
  const TRANSACTION_SUB_TYPE_CHALLENGE = "CHALLENGE";
  const TRANSACTION_SUB_TYPE_CAPTURE_AUTH = "CAPTURE_AUTH";
  public $transactionSubType;

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
  const TRANSACTION_RESULT_EXPIRED = "EXPIRED";
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
  const FAILURE_TYPE_RETRY = "RETRY";
  const FAILURE_TYPE_INTERNAL = "INTERNAL";
  public $failureType;

  const VERIFICATION_TYPE_INVALID = "INVALID";
  const VERIFICATION_TYPE_IDENTIFY = "IDENTIFY";
  const VERIFICATION_TYPE_CHALLENGE = "CHALLENGE";
  public $verificationType;

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
   * @var AttemptDetail
   */
  public $attemptDetail;

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

  /**
   * Transaction ID for the source transaction e.g. Original Transaction for a refund, or captureAuth
   *
   * @var string
   */
  public $sourceTransactionId;

  /**
   * Your ID for the connector used
   *
   * @var string
   */
  public $connectorId;

  /**
   * connector library ID used to process this transaction
   *
   * @var string
   */
  public $connectorLibrary;

  /**
   * Address Verification result
   *
   * @var string
   */
  public $addressVerificationResult;

  /**
   * Card Verification result
   *
   * @var string
   */
  public $cvvVerificationResult;

  /**
   * Unique reference for this charge, as defined by the merchant
   *
   * @var string
   */
  public $merchantReference;

  /**
   * @var ResponseDetail
   */
  public $responseDetail;

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

    if($property == 'attemptDetail')
    {
      $this->attemptDetail = AttemptDetail::fromSource($value);
      return;
    }

    if($property == 'responseDetail')
    {
      $this->responseDetail = ResponseDetail::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
