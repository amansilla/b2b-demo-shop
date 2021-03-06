<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CompanyUser\Model;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\CompanyUser\Business\Model\CompanyUser as SprykerCompanyUser;

class CompanyUser extends SprykerCompanyUser implements CompanyUserInterface
{
    /**
     * @var \Pyz\Zed\CompanyUser\Persistence\CompanyUserRepositoryInterface
     */
    protected $companyUserRepository;

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return bool
     */
    public function hasActiveCompanyUsers(CustomerTransfer $customerTransfer): bool
    {
        return $this->companyUserRepository->hasEnabledCompanyUsers($customerTransfer->getIdCustomer());
    }
}
