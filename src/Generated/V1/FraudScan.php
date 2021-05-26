<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class FraudScan extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been created
   *
   * @var string
   */
  public $chargeUuid;

  /**
   * Unique reference for this fraud scan
   *
   * @var string
   */
  public $fraudScanId;

  public const SUGGESTED_ACTION_NO_SUGGESTION = "NO_SUGGESTION";
  public const SUGGESTED_ACTION_REVIEW = "REVIEW";
  public const SUGGESTED_ACTION_ALLOW = "ALLOW";
  public const SUGGESTED_ACTION_DENY = "DENY";
  /**
   * Recommendation from the fraud scan
   *
   * @var string
   */
  public $suggestedAction;

  /**
   * Time the scan was performed, output as the number of seconds since unix epoch
   *
   * @var number
   */
  public $scanTime;

  /**
   * @var FraudScore
   */
  public $overallScore;

  /**
   * @var FraudScore[]
   */
  public $subScores;

  protected function _set($property, $value)
  {
    if($property === 'overallScore')
    {
      $this->overallScore = FraudScore::fromSource($value);
      return;
    }

    if($property === 'subScores')
    {
      $this->subScores = FraudScore::manyFromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
