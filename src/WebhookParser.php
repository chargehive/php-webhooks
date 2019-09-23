<?php
namespace ChargeHive\Webhooks;

use ChargeHive\Webhooks\Generated\V1\ChargeCancel;
use ChargeHive\Webhooks\Generated\V1\ChargeComplete;
use ChargeHive\Webhooks\Generated\V1\ChargeCreated;
use ChargeHive\Webhooks\Generated\V1\ChargeModified;
use ChargeHive\Webhooks\Generated\V1\ChargeTransaction;
use ChargeHive\Webhooks\Generated\V1\FraudScan;
use ChargeHive\Webhooks\Generated\V1\MethodArchived;
use ChargeHive\Webhooks\Generated\V1\MethodCreated;
use ChargeHive\Webhooks\Generated\V1\MethodModified;
use ChargeHive\Webhooks\Generated\V1\MethodRefreshed;
use ChargeHive\Webhooks\Generated\V1\Verify;
use ChargeHive\Webhooks\Generated\V1\Webhook;
use InvalidArgumentException;
use function is_object;
use function json_decode;
use function sha1;

class WebhookParser
{
  protected $_verificationKey;
  private $_dataChecksum;

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
    return sha1($checksum . $this->_verificationKey) === $verification;
  }

  public function verifyWebhook(array $headers): bool
  {
    $checksum = isset($headers['x-chargehive-checksum']) ? $headers['x-chargehive-checksum'] : '';
    return $this->_dataChecksum === $checksum;
  }

  public function parse(string $rawPayload): Webhook
  {
    $hook = Webhook::fromSource($this->_decodeJson($rawPayload));
    $this->_dataChecksum = sha1($hook->data);
    switch($hook->type)
    {
      case Webhook::TYPE_CHARGE_CREATED:
        $hook->data = ChargeCreated::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_CHARGE_MODIFIED:
        $hook->data = ChargeModified::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_CHARGE_TRANSACTION:
        $hook->data = ChargeTransaction::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_CHARGE_CANCEL:
        $hook->data = ChargeCancel::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_CHARGE_COMPLETE:
        $hook->data = ChargeComplete::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_METHOD_CREATED:
        $hook->data = MethodCreated::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_METHOD_MODIFIED:
        $hook->data = MethodModified::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_METHOD_REFRESHED:
        $hook->data = MethodRefreshed::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_METHOD_ARCHIVED:
        $hook->data = MethodArchived::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_FRAUD_SCAN:
        $hook->data = FraudScan::fromSource($this->_decodeJson($hook->data));
        break;
      case Webhook::TYPE_VERIFY:
        $hook->data = Verify::fromSource($this->_decodeJson($hook->data));
        break;
    }

    return $hook;
  }

  private function _decodeJson(string $rawPayload)
  {
    $decoded = json_decode($rawPayload, false, 512, JSON_THROW_ON_ERROR);
    if($decoded === null || !is_object($decoded))
    {
      throw new InvalidArgumentException("Invalid json payload provided");
    }
    return $decoded;
  }
}
