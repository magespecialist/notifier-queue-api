<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierQueueApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface ChannelExtInterface extends ExtensibleDataInterface
{
    const ID = 'msp_notifier_queue_channel_ex_id';
    const CHANNEL_ID = 'channel_id';
    const IMMEDIATE_SEND = 'immediate_send';
    const RETRY_FOR = 'retry_for';

    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for channel_id
     * @return int
     */
    public function getChannelId();

    /**
     * Set value for channel_id
     * @param int $value
     * @return void
     */
    public function setChannelId($value);

    /**
     * Get value for immediate_send
     * @return bool
     */
    public function getImmediateSend();

    /**
     * Set value for immediate_send
     * @param bool $value
     * @return void
     */
    public function setImmediateSend($value);

    /**
     * Get value for retry_for
     * @return int
     */
    public function getRetryFor();

    /**
     * Set value for retry_for
     * @param int $value
     * @return void
     */
    public function setRetryFor($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierQueueApi\Api\Data\ChannelExtExtensionInterface|null
     */
    public function getExtensionAttributes(): \MSP\NotifierQueueApi\Api\Data\ChannelExtExtensionInterface;

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierQueueApi\Api\Data\ChannelExtExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierQueueApi\Api\Data\ChannelExtExtensionInterface $extensionAttributes
    );
}
