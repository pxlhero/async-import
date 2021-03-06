<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\ImportService\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Interface SourceInterface
 */
interface SourceInterface extends ExtensibleDataInterface
{
    const ENTITY_ID = 'source_id';
    const SOURCE_TYPE = 'source_type';
    const IMPORT_TYPE = 'import_type';
    const IMPORT_DATA = 'import_data';
    const CREATED_AT = 'created_at';
    const STATUS = 'status';

    /**
     * @return int
     */
    public function getSourceId();

    /**
     * Retrieve data source type
     *
     * @return string
     */
    public function getSourceType();

    /**
     * Set data source type
     *
     * @param string $sourceType
     * @return $this
     */
    public function setSourceType($sourceType);

    /**
     * Retrieve Import type
     *
     * @return string
     */
    public function getImportType();

    /**
     * Set Import type
     *
     * @param string $importType
     * @return $this
     */
    public function setImportType($importType);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status);

    /**
     * Retrieve Import data
     *
     * @return string
     */
    public function getImportData();

    /**
     * Set Import data
     *
     * @param string $importData
     * @return $this
     */
    public function setImportData($importData);

    /**
     * Retrieve Import data
     *
     * @return string
     */
    public function getCreatedAt();
}
