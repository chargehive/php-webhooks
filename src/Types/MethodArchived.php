<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodArchived extends WebhookFoundation
{
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
