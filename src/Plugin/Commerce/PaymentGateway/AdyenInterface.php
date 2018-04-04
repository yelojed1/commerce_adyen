<?php

namespace Drupal\commerce_adyen\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\AdyenPaymentGatewayInterface;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\SupportsAuthorizationsInterface;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\SupportsRefundsInterface;

/**
 * Provides the interface for the adyen payment gateway.
 *
 * The AdyenPaymentGatewayInterface is the base interface which all on-site
 * gateways implement. The other interfaces signal which additional capabilities
 * the gateway has. The gateway plugin is free to expose additional methods,
 * which would be defined below.
 */
interface AdyenInterface extends AdyenPaymentGatewayInterface, SupportsAuthorizationsInterface, SupportsRefundsInterface {

}
