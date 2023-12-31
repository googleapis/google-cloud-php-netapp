<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/backup_policy.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Backup Policy.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.BackupPolicy</code>
 */
class BackupPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the backup policy.
     * Format:
     * `projects/{project_id}/locations/{location}/backupPolicies/{backup_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Number of daily backups to keep. Note that the minimum daily backup limit
     * is 2.
     *
     * Generated from protobuf field <code>optional int32 daily_backup_limit = 2;</code>
     */
    protected $daily_backup_limit = null;
    /**
     * Number of weekly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 weekly_backup_limit = 3;</code>
     */
    protected $weekly_backup_limit = null;
    /**
     * Number of monthly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 monthly_backup_limit = 4;</code>
     */
    protected $monthly_backup_limit = null;
    /**
     * Description of the backup policy.
     *
     * Generated from protobuf field <code>optional string description = 5;</code>
     */
    protected $description = null;
    /**
     * If enabled, make backups automatically according to the schedules.
     * This will be applied to all volumes that have this policy attached and
     * enforced on volume level. If not specified, default is true.
     *
     * Generated from protobuf field <code>optional bool enabled = 6;</code>
     */
    protected $enabled = null;
    /**
     * Output only. The total number of volumes assigned by this backup policy.
     *
     * Generated from protobuf field <code>optional int32 assigned_volume_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $assigned_volume_count = null;
    /**
     * Output only. The time when the backup policy was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     */
    private $labels;
    /**
     * Output only. The backup policy state.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the backup policy.
     *           Format:
     *           `projects/{project_id}/locations/{location}/backupPolicies/{backup_policy_id}`.
     *     @type int $daily_backup_limit
     *           Number of daily backups to keep. Note that the minimum daily backup limit
     *           is 2.
     *     @type int $weekly_backup_limit
     *           Number of weekly backups to keep. Note that the sum of daily, weekly and
     *           monthly backups should be greater than 1.
     *     @type int $monthly_backup_limit
     *           Number of monthly backups to keep. Note that the sum of daily, weekly and
     *           monthly backups should be greater than 1.
     *     @type string $description
     *           Description of the backup policy.
     *     @type bool $enabled
     *           If enabled, make backups automatically according to the schedules.
     *           This will be applied to all volumes that have this policy attached and
     *           enforced on volume level. If not specified, default is true.
     *     @type int $assigned_volume_count
     *           Output only. The total number of volumes assigned by this backup policy.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the backup policy was created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user provided metadata.
     *     @type int $state
     *           Output only. The backup policy state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\BackupPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the backup policy.
     * Format:
     * `projects/{project_id}/locations/{location}/backupPolicies/{backup_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the backup policy.
     * Format:
     * `projects/{project_id}/locations/{location}/backupPolicies/{backup_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Number of daily backups to keep. Note that the minimum daily backup limit
     * is 2.
     *
     * Generated from protobuf field <code>optional int32 daily_backup_limit = 2;</code>
     * @return int
     */
    public function getDailyBackupLimit()
    {
        return isset($this->daily_backup_limit) ? $this->daily_backup_limit : 0;
    }

    public function hasDailyBackupLimit()
    {
        return isset($this->daily_backup_limit);
    }

    public function clearDailyBackupLimit()
    {
        unset($this->daily_backup_limit);
    }

    /**
     * Number of daily backups to keep. Note that the minimum daily backup limit
     * is 2.
     *
     * Generated from protobuf field <code>optional int32 daily_backup_limit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDailyBackupLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->daily_backup_limit = $var;

        return $this;
    }

    /**
     * Number of weekly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 weekly_backup_limit = 3;</code>
     * @return int
     */
    public function getWeeklyBackupLimit()
    {
        return isset($this->weekly_backup_limit) ? $this->weekly_backup_limit : 0;
    }

    public function hasWeeklyBackupLimit()
    {
        return isset($this->weekly_backup_limit);
    }

    public function clearWeeklyBackupLimit()
    {
        unset($this->weekly_backup_limit);
    }

    /**
     * Number of weekly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 weekly_backup_limit = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWeeklyBackupLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->weekly_backup_limit = $var;

        return $this;
    }

    /**
     * Number of monthly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 monthly_backup_limit = 4;</code>
     * @return int
     */
    public function getMonthlyBackupLimit()
    {
        return isset($this->monthly_backup_limit) ? $this->monthly_backup_limit : 0;
    }

    public function hasMonthlyBackupLimit()
    {
        return isset($this->monthly_backup_limit);
    }

    public function clearMonthlyBackupLimit()
    {
        unset($this->monthly_backup_limit);
    }

    /**
     * Number of monthly backups to keep. Note that the sum of daily, weekly and
     * monthly backups should be greater than 1.
     *
     * Generated from protobuf field <code>optional int32 monthly_backup_limit = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthlyBackupLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->monthly_backup_limit = $var;

        return $this;
    }

    /**
     * Description of the backup policy.
     *
     * Generated from protobuf field <code>optional string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Description of the backup policy.
     *
     * Generated from protobuf field <code>optional string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * If enabled, make backups automatically according to the schedules.
     * This will be applied to all volumes that have this policy attached and
     * enforced on volume level. If not specified, default is true.
     *
     * Generated from protobuf field <code>optional bool enabled = 6;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return isset($this->enabled) ? $this->enabled : false;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * If enabled, make backups automatically according to the schedules.
     * This will be applied to all volumes that have this policy attached and
     * enforced on volume level. If not specified, default is true.
     *
     * Generated from protobuf field <code>optional bool enabled = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Output only. The total number of volumes assigned by this backup policy.
     *
     * Generated from protobuf field <code>optional int32 assigned_volume_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAssignedVolumeCount()
    {
        return isset($this->assigned_volume_count) ? $this->assigned_volume_count : 0;
    }

    public function hasAssignedVolumeCount()
    {
        return isset($this->assigned_volume_count);
    }

    public function clearAssignedVolumeCount()
    {
        unset($this->assigned_volume_count);
    }

    /**
     * Output only. The total number of volumes assigned by this backup policy.
     *
     * Generated from protobuf field <code>optional int32 assigned_volume_count = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAssignedVolumeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->assigned_volume_count = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup policy was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the backup policy was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The backup policy state.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The backup policy state.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.BackupPolicy.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\BackupPolicy\State::class);
        $this->state = $var;

        return $this;
    }

}

