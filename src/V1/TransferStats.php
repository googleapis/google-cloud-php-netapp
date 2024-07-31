<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/replication.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransferStats reports all statistics related to replication transfer.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.TransferStats</code>
 */
class TransferStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Cumulative bytes trasferred so far for the replication relatinonship.
     *
     * Generated from protobuf field <code>optional int64 transfer_bytes = 1;</code>
     */
    protected $transfer_bytes = null;
    /**
     * Cumulative time taken across all transfers for the replication
     * relationship.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration total_transfer_duration = 2;</code>
     */
    protected $total_transfer_duration = null;
    /**
     * Last transfer size in bytes.
     *
     * Generated from protobuf field <code>optional int64 last_transfer_bytes = 3;</code>
     */
    protected $last_transfer_bytes = null;
    /**
     * Time taken during last transfer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration last_transfer_duration = 4;</code>
     */
    protected $last_transfer_duration = null;
    /**
     * Lag duration indicates the duration by which Destination region volume
     * content lags behind the primary region volume content.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lag_duration = 5;</code>
     */
    protected $lag_duration = null;
    /**
     * Time when progress was updated last.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 6;</code>
     */
    protected $update_time = null;
    /**
     * Time when last transfer completed.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp last_transfer_end_time = 7;</code>
     */
    protected $last_transfer_end_time = null;
    /**
     * A message describing the cause of the last transfer failure.
     *
     * Generated from protobuf field <code>optional string last_transfer_error = 8;</code>
     */
    protected $last_transfer_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $transfer_bytes
     *           Cumulative bytes trasferred so far for the replication relatinonship.
     *     @type \Google\Protobuf\Duration $total_transfer_duration
     *           Cumulative time taken across all transfers for the replication
     *           relationship.
     *     @type int|string $last_transfer_bytes
     *           Last transfer size in bytes.
     *     @type \Google\Protobuf\Duration $last_transfer_duration
     *           Time taken during last transfer.
     *     @type \Google\Protobuf\Duration $lag_duration
     *           Lag duration indicates the duration by which Destination region volume
     *           content lags behind the primary region volume content.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Time when progress was updated last.
     *     @type \Google\Protobuf\Timestamp $last_transfer_end_time
     *           Time when last transfer completed.
     *     @type string $last_transfer_error
     *           A message describing the cause of the last transfer failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        parent::__construct($data);
    }

    /**
     * Cumulative bytes trasferred so far for the replication relatinonship.
     *
     * Generated from protobuf field <code>optional int64 transfer_bytes = 1;</code>
     * @return int|string
     */
    public function getTransferBytes()
    {
        return isset($this->transfer_bytes) ? $this->transfer_bytes : 0;
    }

    public function hasTransferBytes()
    {
        return isset($this->transfer_bytes);
    }

    public function clearTransferBytes()
    {
        unset($this->transfer_bytes);
    }

    /**
     * Cumulative bytes trasferred so far for the replication relatinonship.
     *
     * Generated from protobuf field <code>optional int64 transfer_bytes = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTransferBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->transfer_bytes = $var;

        return $this;
    }

    /**
     * Cumulative time taken across all transfers for the replication
     * relationship.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration total_transfer_duration = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTotalTransferDuration()
    {
        return $this->total_transfer_duration;
    }

    public function hasTotalTransferDuration()
    {
        return isset($this->total_transfer_duration);
    }

    public function clearTotalTransferDuration()
    {
        unset($this->total_transfer_duration);
    }

    /**
     * Cumulative time taken across all transfers for the replication
     * relationship.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration total_transfer_duration = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTotalTransferDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->total_transfer_duration = $var;

        return $this;
    }

    /**
     * Last transfer size in bytes.
     *
     * Generated from protobuf field <code>optional int64 last_transfer_bytes = 3;</code>
     * @return int|string
     */
    public function getLastTransferBytes()
    {
        return isset($this->last_transfer_bytes) ? $this->last_transfer_bytes : 0;
    }

    public function hasLastTransferBytes()
    {
        return isset($this->last_transfer_bytes);
    }

    public function clearLastTransferBytes()
    {
        unset($this->last_transfer_bytes);
    }

    /**
     * Last transfer size in bytes.
     *
     * Generated from protobuf field <code>optional int64 last_transfer_bytes = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastTransferBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_transfer_bytes = $var;

        return $this;
    }

    /**
     * Time taken during last transfer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration last_transfer_duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLastTransferDuration()
    {
        return $this->last_transfer_duration;
    }

    public function hasLastTransferDuration()
    {
        return isset($this->last_transfer_duration);
    }

    public function clearLastTransferDuration()
    {
        unset($this->last_transfer_duration);
    }

    /**
     * Time taken during last transfer.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration last_transfer_duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLastTransferDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->last_transfer_duration = $var;

        return $this;
    }

    /**
     * Lag duration indicates the duration by which Destination region volume
     * content lags behind the primary region volume content.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lag_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLagDuration()
    {
        return $this->lag_duration;
    }

    public function hasLagDuration()
    {
        return isset($this->lag_duration);
    }

    public function clearLagDuration()
    {
        unset($this->lag_duration);
    }

    /**
     * Lag duration indicates the duration by which Destination region volume
     * content lags behind the primary region volume content.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration lag_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLagDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lag_duration = $var;

        return $this;
    }

    /**
     * Time when progress was updated last.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Time when progress was updated last.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp update_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Time when last transfer completed.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp last_transfer_end_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastTransferEndTime()
    {
        return $this->last_transfer_end_time;
    }

    public function hasLastTransferEndTime()
    {
        return isset($this->last_transfer_end_time);
    }

    public function clearLastTransferEndTime()
    {
        unset($this->last_transfer_end_time);
    }

    /**
     * Time when last transfer completed.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Timestamp last_transfer_end_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastTransferEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_transfer_end_time = $var;

        return $this;
    }

    /**
     * A message describing the cause of the last transfer failure.
     *
     * Generated from protobuf field <code>optional string last_transfer_error = 8;</code>
     * @return string
     */
    public function getLastTransferError()
    {
        return isset($this->last_transfer_error) ? $this->last_transfer_error : '';
    }

    public function hasLastTransferError()
    {
        return isset($this->last_transfer_error);
    }

    public function clearLastTransferError()
    {
        unset($this->last_transfer_error);
    }

    /**
     * A message describing the cause of the last transfer failure.
     *
     * Generated from protobuf field <code>optional string last_transfer_error = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLastTransferError($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_transfer_error = $var;

        return $this;
    }

}

