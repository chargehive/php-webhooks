<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodSuspended extends WebhookFoundation
{
  /**
   * The ID of the method
   *
   * @var string
   */
  public $token;

  /**
   * If the method was updated
   *
   * @var boolean
   */
  public $success;

}
