<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodModified extends WebhookFoundation
{
  /**
   * @var Method
   */
  public $method;

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
