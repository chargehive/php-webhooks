<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

/**
 * Counts related to a transaction
 */
class AttemptDetail extends WebhookFoundation
{
  /**
   * Number of transactions performed against the charge
   *
   * @var number
   */
  public $chargeTransactionNumber;

  /**
   * Number of scheduled attempts
   *
   * @var number
   */
  public $chargeAttemptNumber;

  /**
   * Number of transactions performed within the current attempt
   *
   * @var number
   */
  public $attemptTransactionNumber;

  /**
   * level of cascade by method
   *
   * @var number
   */
  public $attemptMethodCascade;

  /**
   * level of cascade by connector
   *
   * @var number
   */
  public $attemptConnectorCascade;

  /**
   * Was the primary method
   *
   * @var boolean
   */
  public $isPrimaryMethod;

}
