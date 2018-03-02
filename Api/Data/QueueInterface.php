<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierQueueApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface QueueInterface extends ExtensibleDataInterface
{
    const ID = 'queue_id';
    const CREATED_AT = 'created_at';
    const SENT_AT = 'sent_at';
    const SEND_TRIALS = 'send_trials';
    const STATUS = 'status';
    const CHANNEL_CODE = 'channel_code';
    const MESSAGE = 'message';

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
     * Get value for created_at
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set value for created_at
     * @param string $value
     * @return void
     */
    public function setCreatedAt($value);

    /**
     * Get value for sent_at
     * @return string
     */
    public function getSentAt();

    /**
     * Set value for sent_at
     * @param string $value
     * @return void
     */
    public function setSentAt($value);

    /**
     * Get value for send_trials
     * @return int
     */
    public function getSendTrials();

    /**
     * Set value for send_trials
     * @param int $value
     * @return void
     */
    public function setSendTrials($value);

    /**
     * Get value for status
     * @return int
     */
    public function getStatus();

    /**
     * Set value for status
     * @param int $value
     * @return void
     */
    public function setStatus($value);

    /**
     * Get value for channel_code
     * @return string
     */
    public function getChannelCode();

    /**
     * Set value for channel_code
     * @param string $value
     * @return void
     */
    public function setChannelCode($value);

    /**
     * Get value for message
     * @return string
     */
    public function getMessage();

    /**
     * Set value for message
     * @param string $value
     * @return void
     */
    public function setMessage($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierQueueApi\Api\Data\QueueExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierQueueApi\Api\Data\QueueExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierQueueApi\Api\Data\QueueExtensionInterface $extensionAttributes
    );
}
