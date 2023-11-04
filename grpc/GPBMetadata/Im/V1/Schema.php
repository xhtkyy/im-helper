<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace GPBMetadata\Im\V1;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
im/v1/schema.protoim.v1"�
Member
lid (
group (	
openid (	
roles (	
badges (	
banned (
disabled (
joined	 (
removed
 (
latest (,
attachments (2.google.protobuf.Struct
addr (
history (
self_delete (
lunar (
born_at (
birthday (	
weather (
lat (	
lon (	
address (	
	notice_at (
notice (
pending (
note (
matter (
photo (
birth (
card (2.im.v1.Card
top (
view_history  (

no_disturb! ("�
Pair
lid (
main (	
peer (	
origin (	
team (	
approved (
created (
updated (
deleted	 (+

attachment
 (2.google.protobuf.Struct
has_del (
unregistered (
card (2.im.v1.Card
top (
view_history (

no_disturb ("�
Group
lid (
group (	
owner (	
team (	
host (	
path (	
scene (
type (
creator	 (	
created
 (
removed (
updated (+

attachment (2.google.protobuf.Struct
name (	
creator_card (	
members (2.im.v1.Member
total (
	sync_disk (
disk_folder (
match_title (	

match_type (
card_id (	
birthday_style (	
birthday_notify (
avatar (	
has_invite_member (
has_look_for_history (
open_cloud_file (
open_picture_file (
	team_name (	"E
CardDep

id (	
name (	
job_id (	
job_name (	"�
Card
lid (
openid (	
slogan (	
avatar (	
card_id (	
	card_name (	
team_id (	
	team_name (	
internal_team_id	 (	
internal_team_name
 (	
	cellphone (	#
departments (2.im.v1.CardDep
roles (	
created (
removed (
updated ("I
CardFieldsReq
card_id (	\'
fields (2.google.protobuf.Struct"#
Cards
cards (2.im.v1.Card"�
Guide
lid (
typ (	
openid (	
status (
url (	
created (
removed (
updated (*)

DeviceType

POCKET 
PC
PAD*R
PairTypCode

FRIEND 
BUSINESS
	CO_WORKER
	TEMPORARY
CONSULT*�
GroupTypCode

NORMAL 

DEPARTMENT
COMPANY	
INNER
KNOW

CLOUD_DISK
APPROVAL

SQUARE

APPLY_PAIR
	SECRETARY	
OUT

APPLY_BUSINESS_CANCEL

APPLY_TEAM
WORK_NOTIFY
FILE_HELPER

FAMILY	
NICHE
PARTNER
ACTIVITY	
SERVEB
Zim/v1;imbproto3'
        , true);

        static::$is_initialized = true;
    }
}

