<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class TransactionDetail extends WebhookFoundation
{
  /**
   * ID for the actor, such as the connector name e.g. sandbox
   *
   * @var string
   */
  public $actorId;

  /**
   * Version of the actor library, e.g. API Version
   *
   * @var string
   */
  public $actorVersion;

  public const ACTOR_TYPE_CONSUMER = "CONSUMER";
  public const ACTOR_TYPE_MERCHANT = "MERCHANT";
  public const ACTOR_TYPE_CHARGEHIVE = "CHARGEHIVE";
  public const ACTOR_TYPE_WALLET = "WALLET";
  public const ACTOR_TYPE_CONNECTOR = "CONNECTOR";
  public const ACTOR_TYPE_PAYMENT_PROCESSOR = "PAYMENT_PROCESSOR";
  public const ACTOR_TYPE_PAYMENT_NETWORK = "PAYMENT_NETWORK";
  public const ACTOR_TYPE_ACQUIRING_BANK = "ACQUIRING_BANK";
  public const ACTOR_TYPE_ISSUING_BANK = "ISSUING_BANK";
  public const ACTOR_TYPE_RECOVERY_AGENT = "RECOVERY_AGENT";
  public const ACTOR_TYPE_EXCHANGE = "EXCHANGE";
  public const ACTOR_TYPE_POLICY = "POLICY";
  /**
   * Role of the party in the transaction
   *
   */
  public $actorType;

  public const FAILURE_TYPE_NONE = "NONE";
  public const FAILURE_TYPE_SOFT = "SOFT";
  public const FAILURE_TYPE_HARD = "HARD";
  public const FAILURE_TYPE_RETRY = "RETRY";
  public const FAILURE_TYPE_INTERNAL = "INTERNAL";
  public $failureType;

  /**
   * Response code for this actor
   *
   * @var string
   */
  public $responseCode;

  /**
   * Success / Failure message
   *
   * @var string
   */
  public $responseMessage;

  /**
   * @var Money
   */
  public $requestedAmount;

  /**
   * @var Money
   */
  public $processedAmount;

  /**
   * @var Money
   */
  public $feeAmount;

  /**
   * True if the transaction was a succeess
   *
   * @var boolean
   */
  public $wasSuccessful;

  /**
   * Transaction ID for this actor
   *
   * @var string
   */
  public $transactionId;

  public const LIABILITY_UNKNOWN = "UNKNOWN";
  public const LIABILITY_MERCHANT = "MERCHANT";
  public const LIABILITY_ISSUER = "ISSUER";
  public $liability;

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
   * Representation of the fraud result, if one has been carried out
   *
   * @var string
   */
  public $fraudResult;

  /**
   * @var ThreeDSResult
   */
  public $threeDsResult;

  /**
   * Start time of this actor process
   *
   * @var string
   */
  public $transactionTime;

  /**
   * @var ResponseDetail
   */
  public $responseDetail;

  protected function _set($property, $value)
  {
    if($property === 'requestedAmount')
    {
      $this->requestedAmount = Money::fromSource($value);
      return;
    }

    if($property === 'processedAmount')
    {
      $this->processedAmount = Money::fromSource($value);
      return;
    }

    if($property === 'feeAmount')
    {
      $this->feeAmount = Money::fromSource($value);
      return;
    }

    if($property === 'threeDsResult')
    {
      $this->threeDsResult = ThreeDSResult::fromSource($value);
      return;
    }

    if($property === 'responseDetail')
    {
      $this->responseDetail = ResponseDetail::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
