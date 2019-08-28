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

  const TYPE_CHARGE_CREATED = "chargeCreated";
  const TYPE_CHARGE_MODIFIED = "chargeModified";
  const TYPE_CHARGE_TRANSACTION = "chargeTransaction";
  const TYPE_CHARGE_CANCEL = "chargeCancel";
  const TYPE_CHARGE_COMPLETE = "chargeComplete";
  const TYPE_METHOD_CREATED = "methodCreated";
  const TYPE_METHOD_MODIFIED = "methodModified";
  const TYPE_METHOD_REFRESHED = "methodRefreshed";
  const TYPE_METHOD_ARCHIVED = "methodArchived";
  const TYPE_FRAUD_SCAN = "fraudScan";
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
