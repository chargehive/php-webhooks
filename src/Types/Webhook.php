<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class Webhook extends WebhookFoundation
{
  //Generated at 2019-08-07 16:11:58

  /**
   * UUID for the notification
   *
   * @var string
   */
  public $uuid;

  const TYPE_CHARGECREATED = "chargeCreated";
  const TYPE_CHARGEMODIFIED = "chargeModified";
  const TYPE_CHARGETRANSACTION = "chargeTransaction";
  const TYPE_CHARGECANCEL = "chargeCancel";
  const TYPE_CHARGECOMPLETE = "chargeComplete";
  const TYPE_METHODCREATED = "methodCreated";
  const TYPE_METHODMODIFIED = "methodModified";
  const TYPE_METHODREFRESHED = "methodRefreshed";
  const TYPE_METHODARCHIVED = "methodArchived";
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
