<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierQueueApi\Api;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
interface ChannelExtRepositoryInterface
{
    /**
     * Save ChannelExt
     * @param \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface $channelExt
     * @return int
     */
    public function save(\MSP\NotifierQueueApi\Api\Data\ChannelExtInterface $channelExt): int;

    /**
     * Get ChannelExt by id
     * @param int $channelExtId
     * @return \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface
     */
    public function get(int $channelExtId): \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface;

    /**
     * Get by ChannelId value
     * @param int $channelId
     * @return \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByChannelId(int $channelId): \MSP\NotifierQueueApi\Api\Data\ChannelExtInterface;

    /**
     * Delete ChannelExt
     * @param int $channelExtId
     * @return void
     */
    public function deleteById(int $channelExtId);

    /**
     * Get a list of ChannelExt
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\NotifierQueueApi\Api\ChannelExtSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\NotifierQueueApi\Api\ChannelExtSearchResultsInterface;
}
