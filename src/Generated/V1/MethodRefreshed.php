<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodRefreshed extends WebhookFoundation
{
  /**
   * @var Method
   */
  public $method;

  /**
   * Additional response information
   *
   * @var object
   */
  public $meta;

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
