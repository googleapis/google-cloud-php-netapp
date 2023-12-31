<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/backup.proto

namespace Google\Cloud\NetApp\V1\Backup;

use UnexpectedValueException;

/**
 * The Backup States
 *
 * Protobuf type <code>google.cloud.netapp.v1.Backup.State</code>
 */
class State
{
    /**
     * State not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Backup is being created. While in this state, the snapshot for the backup
     * point-in-time may not have been created yet, and so the point-in-time may
     * not have been fixed.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Backup is being uploaded. While in this state, none of the writes to the
     * volume will be included in the backup.
     *
     * Generated from protobuf enum <code>UPLOADING = 2;</code>
     */
    const UPLOADING = 2;
    /**
     * Backup is available for use.
     *
     * Generated from protobuf enum <code>READY = 3;</code>
     */
    const READY = 3;
    /**
     * Backup is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * Backup is not valid and cannot be used for creating new volumes or
     * restoring existing volumes.
     *
     * Generated from protobuf enum <code>ERROR = 5;</code>
     */
    const ERROR = 5;
    /**
     * Backup is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 6;</code>
     */
    const UPDATING = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::UPLOADING => 'UPLOADING',
        self::READY => 'READY',
        self::DELETING => 'DELETING',
        self::ERROR => 'ERROR',
        self::UPDATING => 'UPDATING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


