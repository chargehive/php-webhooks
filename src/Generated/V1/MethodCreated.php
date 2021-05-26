<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodCreated extends WebhookFoundation
{
  /**
   * Full method ID to use in future calls to chargeHive
   *
   * @var string
   */
  public $token;

  /**
   * @var Method
   */
  public $method;

  /**
   * References for this transaction
   *
   * @var object
   */
  public $references;

  protected function _set($property, $value)
  {
    if($property === 'method')
    {
      $this->method = Method::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
