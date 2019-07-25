<?php

declare(strict_types=1);

namespace HeidelPayment\Services;

use heidelpayPHP\Resources\Payment;
use Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionEntity;
use Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionStateHandler;
use Shopware\Core\Framework\Context;

class TransactionStateHandler implements TransactionStateHandlerInterface
{
    /** @var OrderTransactionStateHandler */
    private $orderTransactionStateHandler;

    public function __construct(OrderTransactionStateHandler $orderTransactionStateHandler)
    {
        $this->orderTransactionStateHandler = $orderTransactionStateHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function transformTransactionState(
        OrderTransactionEntity $transaction,
        Payment $payment,
        Context $context
    ): void {
        $transactionId = $transaction->getId();

        if ($payment->isPending()) {
            $this->orderTransactionStateHandler->open($transactionId, $context);
        } elseif ($payment->isPartlyPaid()) {
            $this->orderTransactionStateHandler->payPartially($transactionId, $context);
        } elseif ($payment->isCompleted()) {
            $this->orderTransactionStateHandler->pay($transactionId, $context);
        } elseif ($payment->isCanceled()) {
            $this->orderTransactionStateHandler->cancel($transactionId, $context);
        } elseif ($payment->isChargeBack()) {
            $this->orderTransactionStateHandler->refundPartially($transactionId, $context);
        } else {
            $this->orderTransactionStateHandler->remind($transactionId, $context);
        }
    }
}
