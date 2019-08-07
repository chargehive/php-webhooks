<?php
namespace ChargeHive\Webhooks;

use function array_keys;
use function get_object_vars;

abstract class WebhookFoundation
{
  public static function fromSource(object $source)
  {
    $hook = new static();
    foreach(array_keys(get_object_vars($hook)) as $var)
    {
      if(isset($source->{$var}))
      {
        $hook->_set($var, $source->{$var});
      }
    }
    return $hook;
  }

  protected function _set($property, $value)
  {
    $this->{$property} = $value;
  }
}
