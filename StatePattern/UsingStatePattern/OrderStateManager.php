<?php

namespace EL30\StatePattern\UsingStatePattern;

class OrderStateManager
{
    /**
     * @var Repository
     */
    private $repository;

    /**
     * @var CreditCardChecker
     */
    private $creditCardChecker;

    /**
     * @var StockChecker
     */
    private $stockChecker;

    /**
     * @var StockProcessor
     */
    private $stockProcessor;

    /**
     * @var CreditCardProcessor
     */
    private $creditCardProcessor;

    /**
     * @var OrderDeliveryManager
     */
    private $orderDeliveryManager;

    public function __construct(
        $repository,
        $creditCardChecker,
        $stockChecker,
        $stockProcessor,
        $creditCardProcessor,
        $orderDeliveryManager
    ) {
        $this->repository = $repository;
        $this->creditCardChecker = $creditCardChecker;
        $this->stockChecker = $stockChecker;
        $this->stockProcessor = $stockProcessor;
        $this->creditCardProcessor = $creditCardProcessor;
        $this->orderDeliveryManager = $orderDeliveryManager;
    }

    public function next($currentState, $payload)
    {
        switch ($currentState) {
            case OrderStates::STATE_ORDER_CREATED:
                $this->repository->save($payload['order']);
                break;

            case OrderStates::STATE_ORDER_SAVED:
            {
                $this->creditCardChecker->validate($payload['credit_card_details']);
                if (!$payload['isValidCC']) {
                    return "CC is not valid!";
                }
            }

            case OrderStates::STATE_ORDER_PAYMENT_CHECKED:
            {
                $hasEnoughStock = $this->stockChecker->isStockAvailable($payload['itemId'], $data['qty']);
                if (!$hasEnoughStock) {
                    return "No available stock";
                }
            }

            case OrderStates::STATE_ORDER_STOCK_CHECKED:
                $this->stockProcessor->process($payload['itemId'], $payload['qty']);
        }
    }
}