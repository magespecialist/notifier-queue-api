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
interface QueueRepositoryInterface
{
    /**
     * Save Queue
     * @param \MSP\NotifierQueueApi\Api\Data\QueueInterface $queue
     * @return int
     */
    public function save(\MSP\NotifierQueueApi\Api\Data\QueueInterface $queue): int;

    /**
     * Get Queue by id
     * @param int $queueId
     * @return \MSP\NotifierQueueApi\Api\Data\QueueInterface
     */
    public function get(int $queueId): \MSP\NotifierQueueApi\Api\Data\QueueInterface;

    /**
     * Delete Queue
     * @param int $queueId
     * @return void
     */
    public function deleteById(int $queueId);

    /**
     * Get a list of NotifierQueue
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\NotifierQueueApi\Api\QueueSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\NotifierQueueApi\Api\QueueSearchResultsInterface;
}
