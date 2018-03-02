<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierQueueApi\Api;

interface QueueSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\NotifierQueueApi\Api\Data\QueueInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\NotifierQueueApi\Api\Data\QueueInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
