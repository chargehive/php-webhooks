<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodArchived extends WebhookFoundation
{
  /**
   * The ID of the method
   *
   * @var string
   */
  public $methodID;

  /**
   * If the method was updated
   *
   * @var boolean
   */
  public $success;

}
