<?php
namespace ChargeHive\Webhooks;

use ChargeHive\Webhooks\Types\ChargeCancel;
use ChargeHive\Webhooks\Types\ChargeComplete;
use ChargeHive\Webhooks\Types\ChargeCreated;
use ChargeHive\Webhooks\Types\ChargeModified;
use ChargeHive\Webhooks\Types\ChargeTransaction;
use ChargeHive\Webhooks\Types\MethodArchived;
use ChargeHive\Webhooks\Types\MethodCreated;
use ChargeHive\Webhooks\Types\MethodModified;
use ChargeHive\Webhooks\Types\MethodRefreshed;
use ChargeHive\Webhooks\Types\Webhook;
use InvalidArgumentException;
use function is_object;
use function json_decode;
use function sha1;

class WebhookParser
{
  protected $_verificationKey;

  /**
   * WebhookParser constructor.
   *
   * @param string $verificationKey This key is available within your ChargeHive account
   */
  public function __construct(string $verificationKey)
  {
    $this->_verificationKey = $verificationKey;
  }

  public function verifyHeaders(array $headers): bool
  {
    //Payload Checksum
    $checksum = isset($headers['x-chargehive-checksum']) ? $headers['x-chargehive-checksum'] : '';

    //Verification of the checksum and the account verification key
    $verification = isset($headers['x-chargehive-verification']) ? $headers['x-chargehive-verification'] : '';

    //Verify the checksum + verification key matches the verification has
    return sha1($checksum . $this->_verificationKey) == $verification;
  }

  public function verifyWebhook(Webhook $webhook): bool
  {
    return true;
  }

  public function parse(string $rawPayload): Webhook
  {
    $decoded = json_decode($rawPayload, false, 512, JSON_THROW_ON_ERROR);
    if($decoded === null || !is_object($decoded))
    {
      throw new InvalidArgumentException("Invalid json payload provided");
    }

    $hook = Webhook::fromSource($decoded);
    switch($hook->type)
    {
      case Webhook::TYPE_CHARGECREATED:
        $hook->data = ChargeCreated::fromSource($hook->data);
        break;
      case Webhook::TYPE_CHARGEMODIFIED:
        $hook->data = ChargeModified::fromSource($hook->data);
        break;
      case Webhook::TYPE_CHARGETRANSACTION:
        $hook->data = ChargeTransaction::fromSource($hook->data);
        break;
      case Webhook::TYPE_CHARGECANCEL:
        $hook->data = ChargeCancel::fromSource($hook->data);
        break;
      case Webhook::TYPE_CHARGECOMPLETE:
        $hook->data = ChargeComplete::fromSource($hook->data);
        break;
      case Webhook::TYPE_METHODCREATED:
        $hook->data = MethodCreated::fromSource($hook->data);
        break;
      case Webhook::TYPE_METHODMODIFIED:
        $hook->data = MethodModified::fromSource($hook->data);
        break;
      case Webhook::TYPE_METHODREFRESHED:
        $hook->data = MethodRefreshed::fromSource($hook->data);
        break;
      case Webhook::TYPE_METHODARCHIVED:
        $hook->data = MethodArchived::fromSource($hook->data);
        break;
    }

    return $hook;
  }
}
