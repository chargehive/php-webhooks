<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class Webhook extends WebhookFoundation
{
  /**
   * UUID for the notification
   *
   * @var string
   */
  public $uuid;

  public const TYPE_CHARGE_CREATED = "chargeCreated";
  public const TYPE_CHARGE_MODIFIED = "chargeModified";
  public const TYPE_CHARGE_TRANSACTION = "chargeTransaction";
  public const TYPE_CHARGE_CANCEL = "chargeCancel";
  public const TYPE_CHARGE_EXPIRED = "chargeExpired";
  public const TYPE_REFUND_EXPIRED = "refundExpired";
  public const TYPE_METHOD_CREATED = "methodCreated";
  public const TYPE_METHOD_MODIFIED = "methodModified";
  public const TYPE_METHOD_REFRESHED = "methodRefreshed";
  public const TYPE_METHOD_ARCHIVED = "methodArchived";
  public const TYPE_METHOD_LOCKED = "methodLocked";
  public const TYPE_METHOD_UNLOCKED = "methodUnlocked";
  public const TYPE_FRAUD_SCAN = "fraudScan";
  public const TYPE_VERIFY = "verify";
  public const TYPE_TRANSACTION_STOPPED = "transactionStopped";
  /**
   * Notification type
   *
   * @var string
   */
  public $type;

  /**
   * Data relating to the notification type
   *
   * @var object
   */
  public $data;

  /**
   * sha1 checksum of the payload
   *
   * @var string
   */
  public $checksum;

  /**
   * sha1 of the checksum + verificationKey
   *
   * @var string
   */
  public $verification;

  /**
   * Timestamp of when the webhook was created, measured in seconds since the Unix epoch
   *
   * @var number
   */
  public $created;

  /**
   * The version of webhook notifications used to render this information
   *
   * @var string
   */
  public $webhookVersion;

  /**
   * The ID of the project this webhook originated from
   *
   * @var string
   */
  public $projectId;

}
