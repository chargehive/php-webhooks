<?php
namespace ChargeHive\Webhooks\Types;

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

  protected function _set($property, $value)
  {
    if($property == 'method')
    {
      $this->method = Method::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
