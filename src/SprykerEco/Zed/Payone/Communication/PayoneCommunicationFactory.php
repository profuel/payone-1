<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Payone\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use SprykerEco\Zed\Payone\Business\Key\UrlHmacGenerator;
use SprykerEco\Zed\Payone\PayoneDependencyProvider;

/**
 * @method \SprykerEco\Zed\Payone\PayoneConfig getConfig()
 * @method \SprykerEco\Zed\Payone\Persistence\PayoneQueryContainerInterface getQueryContainer()
 * @method \SprykerEco\Zed\Payone\Persistence\PayoneRepositoryInterface getRepository()
 * @method \SprykerEco\Zed\Payone\Persistence\PayoneEntityManagerInterface getEntityManager()
 * @method \SprykerEco\Zed\Payone\Business\PayoneFacadeInterface getFacade()()
 */
class PayoneCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \SprykerEco\Zed\Payone\Dependency\Facade\PayoneToOmsInterface
     */
    public function getOmsFacade()
    {
        return $this->getProvidedDependency(PayoneDependencyProvider::FACADE_OMS);
    }

    /**
     * @return \SprykerEco\Zed\Payone\Dependency\Facade\PayoneToSalesInterface
     */
    public function getSalesFacade()
    {
        return $this->getProvidedDependency(PayoneDependencyProvider::FACADE_SALES);
    }

    /**
     * @return \SprykerEco\Zed\Payone\Dependency\Facade\PayoneToRefundInterface
     */
    public function getRefundFacade()
    {
        return $this->getProvidedDependency(PayoneDependencyProvider::FACADE_REFUND);
    }

    /**
     * @return \SprykerEco\Zed\Payone\Dependency\Facade\PayoneToCalculationInterface
     */
    public function getCalculationFacade()
    {
        return $this->getProvidedDependency(PayoneDependencyProvider::FACADE_CALCULATION);
    }

    /**
     * @return \SprykerEco\Zed\Payone\Business\Key\HmacGeneratorInterface
     */
    public function createUrlHmacGenerator()
    {
        return new UrlHmacGenerator();
    }
}
