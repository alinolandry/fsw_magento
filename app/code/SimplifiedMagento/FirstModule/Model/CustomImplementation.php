<?php


namespace SimplifiedMagento\FirstModule\Model;


use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Vault\Api\Data\PaymentTokenInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;


class CustomImplementation implements PaymentTokenManagementInterface
{


    /**
     * @param int $customerId
     * @return Data\PaymentTokenSearchResultsInterface
     */
    public function getListByCustomerId($customerId)
    {
        // TODO: Implement getListByCustomerId() method.
    }

    /**
     * @param int $paymentId
     * @return PaymentTokenInterface
     */
    public function getByPaymentId($paymentId)
    {
        // TODO: Implement getByPaymentId() method.
    }

    /**
     * @param string $token
     * @param string $paymentMethodCode
     * @param int $customerId
     * @return PaymentTokenInterface|null
     */
    public function getByGatewayToken($token, $paymentMethodCode, $customerId)
    {
        // TODO: Implement getByGatewayToken() method.
    }

    /**
     * @param string $hash
     * @param int $customerId
     * @return PaymentTokenInterface|null
     */
    public function getByPublicHash($hash, $customerId)
    {
        // TODO: Implement getByPublicHash() method.
    }

    /**
     * @param PaymentTokenInterface $token
     * @param OrderPaymentInterface $payment
     * @return bool
     */
    public function saveTokenWithPaymentLink(PaymentTokenInterface $token, OrderPaymentInterface $payment)
    {
        // TODO: Implement saveTokenWithPaymentLink() method.
    }

    /**
     * @param int $paymentTokenId
     * @param int $orderPaymentId
     * @return bool
     */
    public function addLinkToOrderPayment($paymentTokenId, $orderPaymentId)
    {
        // TODO: Implement addLinkToOrderPayment() method.
    }
}