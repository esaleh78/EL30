<?php

namespace EL30\StatePattern\BeforeStatePattern;

class OrderProcessor
{
    /**
     * @var OrderFactory
     */
    private $orderFactory;

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
        $orderFactory,
        $repository,
        $creditCardChecker,
        $stockChecker,
        $stockProcessor,
        $creditCardProcessor,
        $orderDeliveryManager
    ) {
        $this->orderFactory = $orderFactory;
        $this->repository = $repository;
        $this->creditCardChecker = $creditCardChecker;
        $this->stockChecker = $stockChecker;
        $this->stockProcessor = $stockProcessor;
        $this->creditCardProcessor = $creditCardProcessor;
        $this->orderDeliveryManager = $orderDeliveryManager;
    }

    public function process($data)
    {
        $order = $this->orderFactory->create($data);

        // Save order to DB
        $this->repository->save($order);

        // Check CreditCard
        $isValidCC = $this->creditCardChecker->validate($data['credit_card_details']);
        if (!$isValidCC) {
            return "CC is not valid!";
        }

        // Check Stock (Qty)
        $hasEnoughStock = $this->stockChecker->isStockAvailable($data['itemId'], $data['qty']);
        if (!$hasEnoughStock) {
            return "No available stock";
        }

        // Decrease Stock
        $this->stockProcessor->process($data['itemId'], $data['qty']);

        // Process Payment
        $this->creditCardProcessor->process($data['credit_card_details']);

        // Deliver
        $this->orderDeliveryManager->deliver($order);
    }
}
