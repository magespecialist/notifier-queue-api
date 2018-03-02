<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierQueueApi\Api;

interface ChannelExtSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
