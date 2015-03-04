<?php

namespace Pyz\Zed\Oms\Communication\Plugin\Oms;

use ProjectA\Zed\Oms\Business\Model\Util\ReadOnlyArrayObject;
use ProjectA\Zed\Oms\Communication\Plugin\Oms\Command\AbstractCommand;
use ProjectA\Zed\Oms\Communication\Plugin\Oms\Command\CommandByOrderInterface;
use ProjectA\Zed\Payment\Business\Model\PaymentConstantsInterface;
use ProjectA\Zed\Payment\Business\Model\PaymentResponse;

/**
 * Class FakeAuthPayment
 * @package Pyz\Zed\Oms
 */
class FakeAuthPayment extends AbstractCommand implements CommandByOrderInterface
{
    /**
     * @param \ProjectA\Zed\Sales\Persistence\Propel\PacSalesOrderItem[] $orderItems
     * @param \ProjectA\Zed\Sales\Persistence\Propel\PacSalesOrder $orderEntity
     * @param ReadOnlyArrayObject $data
     * @return array $returnArray
     */
    public function run(array $orderItems, \ProjectA\Zed\Sales\Persistence\Propel\PacSalesOrder $orderEntity, ReadOnlyArrayObject $data)
    {
        $response = new PaymentResponse(true);

        return [
            PaymentConstantsInterface::PAYMENT_TRANSACTION_RESPONSE_KEY => $response
        ];
    }

}
