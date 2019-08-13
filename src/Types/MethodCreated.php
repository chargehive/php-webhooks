<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class MethodCreated extends WebhookFoundation
{
  //Generated on 2019-08-13

  /**
   * Unique ID for the method that has been created
   *
   * @var string
   */
  public $methodId;

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
