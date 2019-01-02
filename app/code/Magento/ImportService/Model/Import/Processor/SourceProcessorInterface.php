<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ImportService\Model\Import\Processor;

use \Magento\ImportService\Api\Data\SourceInterface;
use \Magento\ImportService\Api\Data\SourceUploadResponseInterface;

/**
 *  Request processor interface
 */
interface SourceProcessorInterface
{
    /**
     * @param SourceInterface $source
     * @param SourceUploadResponseInterface $response
     * @throws AuthorizationException
     * @throws InputException
     * @throws Exception
     * @return SourceUploadResponseInterface
     */
    public function processUpload(SourceInterface $source, SourceUploadResponseInterface $response);
}
