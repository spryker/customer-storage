<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CustomerStorage\Persistence;

use Generated\Shared\Transfer\InvalidatedCustomerCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\InvalidatedCustomerCollectionTransfer;
use Generated\Shared\Transfer\InvalidatedCustomerTransfer;

interface CustomerStorageEntityManagerInterface
{
    public function saveCustomerInvalidatedStorage(
        InvalidatedCustomerTransfer $invalidatedCustomerTransfer
    ): void;

    public function deleteInvalidatedCustomerCollection(
        InvalidatedCustomerCollectionDeleteCriteriaTransfer $invalidatedCustomerCollectionDeleteCriteriaTransfer
    ): InvalidatedCustomerCollectionTransfer;
}
