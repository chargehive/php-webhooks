<?php
namespace ChargeHive\Webhooks\Types;

class Webhook
{
  //Generated at 2019-06-25 11:32:37

  /**
   * UUID for the notification
   *
   * @var string
   */
  public $uuid;

  const TYPE_CHARGECREATED = "chargeCreated";
  const TYPE_CHARGEMODIFIED = "chargeModified";
  const TYPE_CHARGETRANSACTION = "chargeTransaction";
  const TYPE_CHARGECOMPLETE = "chargeComplete";
  const TYPE_PROFILECREATED = "profileCreated";
  const TYPE_PROFILEMODIFIED = "profileModified";
  const TYPE_PROFILEARCHIVED = "profileArchived";
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
   * Verification of the checksum and your verification key
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
