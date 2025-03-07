<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/encryption_spec.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class EncryptionSpec
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/dialogflow/v2/encryption_spec.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto"Z
GetEncryptionSpecRequest>
name (	B0�A�A*
(dialogflow.googleapis.com/EncryptionSpec"�
EncryptionSpec
name (	B�A
kms_key (	B�A:��A�
(dialogflow.googleapis.com/EncryptionSpec6projects/{project}/locations/{location}/encryptionSpec*encryptionSpecs2encryptionSpec"k
InitializeEncryptionSpecRequestH
encryption_spec (2*.google.cloud.dialogflow.v2.EncryptionSpecB�A""
 InitializeEncryptionSpecResponse"u
 InitializeEncryptionSpecMetadataQ
request (2;.google.cloud.dialogflow.v2.InitializeEncryptionSpecRequestB�A2�
EncryptionSpecService�
GetEncryptionSpec4.google.cloud.dialogflow.v2.GetEncryptionSpecRequest*.google.cloud.dialogflow.v2.EncryptionSpec"?�Aname���20/v2/{name=projects/*/locations/*/encryptionSpec}�
InitializeEncryptionSpec;.google.cloud.dialogflow.v2.InitializeEncryptionSpecRequest.google.longrunning.Operation"��AD
 InitializeEncryptionSpecResponse InitializeEncryptionSpecMetadata�Aencryption_spec���P"K/v2/{encryption_spec.name=projects/*/locations/*/encryptionSpec}:initialize:*x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BEncryptionSpecProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

