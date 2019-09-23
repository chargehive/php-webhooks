<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

/**
 * A verification webhook for testing the complete processing link
 */
class Verify extends WebhookFoundation
{
  /**
   * Request ID for this verification request
   *
   * @var string
   */
  public $requestId;

  /**
   * Unique key for the verification
   *
   * @var string
   */
  public $verificationKey;

  /**
   * @var ResponseDetail
   */
  public $response;

  protected function _set($property, $value)
  {
    if($property == 'response')
    {
      $this->response = ResponseDetail::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
