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
   * Billing Profile ID of the charge
   *
   * @var string
   */
  public $billingProfileId;

  /**
   * Unique transaction ID for this transaction
   *
   * @var string
   */
  public $transactionId;

  public const PAYMENT_METHOD_TYPE_CARD = "CARD";
  public const PAYMENT_METHOD_TYPE_DIGITALWALLET = "DIGITALWALLET";
  public const PAYMENT_METHOD_TYPE_DIRECTDEBIT = "DIRECTDEBIT";
  public const PAYMENT_METHOD_TYPE_CRYPTOCURRENCY = "CRYPTOCURRENCY";
  public $paymentMethodType;

  public const PAYMENT_METHOD_PROVIDER_FORM = "FORM";
  public const PAYMENT_METHOD_PROVIDER_PAYPAL = "PAYPAL";
  public const PAYMENT_METHOD_PROVIDER_APPLEPAY = "APPLEPAY";
  public const PAYMENT_METHOD_PROVIDER_GOOGLEPAY = "GOOGLEPAY";
  public const PAYMENT_METHOD_PROVIDER_AMAZONPAY = "AMAZONPAY";
  public $paymentMethodProvider;

  public const PAYMENT_METHOD_INPUT_TYPE_PHYSICAL = "PHYSICAL";
  public const PAYMENT_METHOD_INPUT_TYPE_VIRTUAL = "VIRTUAL";
  public const PAYMENT_METHOD_INPUT_TYPE_PROXY = "PROXY";
  public $paymentMethodInputType;

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

  public const TRANSACTION_TYPE_AUTHORIZE = "AUTHORIZE";
  public const TRANSACTION_TYPE_CAPTURE = "CAPTURE";
  public const TRANSACTION_TYPE_REFUND = "REFUND";
  public const TRANSACTION_TYPE_CANCEL = "CANCEL";
  public const TRANSACTION_TYPE_DISPUTE = "DISPUTE";
  public const TRANSACTION_TYPE_VERIFY = "VERIFY";
  public const TRANSACTION_TYPE_EXPIRED = "EXPIRED";
  public const TRANSACTION_TYPE_INTERNAL = "INTERNAL";
  public $transactionType;

  public const TRANSACTION_SUB_TYPE_IDENTIFY = "IDENTIFY";
  public const TRANSACTION_SUB_TYPE_CHALLENGE = "CHALLENGE";
  public const TRANSACTION_SUB_TYPE_CAPTURE_AUTH = "CAPTURE_AUTH";
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

  public const TRANSACTION_RESULT_SUCCESS = "SUCCESS";
  public const TRANSACTION_RESULT_DECLINED = "DECLINED";
  public const TRANSACTION_RESULT_VERIFY = "VERIFY";
  public const TRANSACTION_RESULT_PENDING = "PENDING";
  public const TRANSACTION_RESULT_PENDING_SUCCESS = "PENDING_SUCCESS";
  public const TRANSACTION_RESULT_RETRY = "RETRY";
  public const TRANSACTION_RESULT_EXPIRED = "EXPIRED";
  public $transactionResult;

  /**
   * @var Money
   */
  public $requestedAmount;

  /**
   * @var Money
   */
  public $transactedAmount;

  public const CONTRACT_TYPE_NONE = "NONE";
  public const CONTRACT_TYPE_PAYMENT = "PAYMENT";
  public const CONTRACT_TYPE_SUBSCRIPTION_INITIAL = "SUBSCRIPTION_INITIAL";
  public const CONTRACT_TYPE_SUBSCRIPTION_RENEWAL = "SUBSCRIPTION_RENEWAL";
  public const CONTRACT_TYPE_ONECLICK = "ONECLICK";
  public $contractType;

  public $statementDescriptor;

  public const FAILURE_TYPE_NONE = "NONE";
  public const FAILURE_TYPE_SOFT = "SOFT";
  public const FAILURE_TYPE_HARD = "HARD";
  public const FAILURE_TYPE_RETRY = "RETRY";
  public const FAILURE_TYPE_INTERNAL = "INTERNAL";
  public $failureType;

  public const VERIFICATION_TYPE_INVALID = "INVALID";
  public const VERIFICATION_TYPE_IDENTIFY = "IDENTIFY";
  public const VERIFICATION_TYPE_CHALLENGE = "CHALLENGE";
  public $verificationType;

  public const VERIFICATION_STATUS_NOT_CHECKED = "NOT_CHECKED";
  public const VERIFICATION_STATUS_PASSED = "PASSED";
  public const VERIFICATION_STATUS_FAILED = "FAILED";
  public const VERIFICATION_STATUS_CONTINUE = "CONTINUE";
  public $verificationStatus;

  public const LIABILITY_UNKNOWN = "UNKNOWN";
  public const LIABILITY_MERCHANT = "MERCHANT";
  public const LIABILITY_ISSUER = "ISSUER";
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

  /**
   * This is the authorization code returned by the issuing bank.
   *
   * @var string
   */
  public $authCode;

  /**
   * Acquirer Reference Number
   *
   * @var string
   */
  public $arn;

  /**
   * @var FraudScan[]
   */
  public $fraudScanResults;

  protected function _set($property, $value)
  {
    if($property === 'requestedAmount')
    {
      $this->requestedAmount = Money::fromSource($value);
      return;
    }

    if($property === 'transactedAmount')
    {
      $this->transactedAmount = Money::fromSource($value);
      return;
    }

    if($property === 'details')
    {
      $this->details = TransactionDetail::manyFromSource($value);
      return;
    }

    if($property === 'attemptDetail')
    {
      $this->attemptDetail = AttemptDetail::fromSource($value);
      return;
    }

    if($property === 'responseDetail')
    {
      $this->responseDetail = ResponseDetail::fromSource($value);
      return;
    }

    if($property === 'fraudScanResults')
    {
      $this->fraudScanResults = FraudScan::manyFromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
