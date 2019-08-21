<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ThreeDSResult extends WebhookFoundation
{
  /**
   * 3Ds Result - ECI
   *
   * @var string
   */
  public $eci;

  /**
   * 3Ds Result - CAVV
   *
   * @var string
   */
  public $cavv;

  /**
   * 3Ds Result - XID
   *
   * @var string
   */
  public $xid;

  /**
   * 3Ds Result - Enrollment
   *
   * @var string
   */
  public $enrollment;

  /**
   * 3Ds Result - Result
   *
   * @var string
   */
  public $result;

}
