<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace GPBMetadata\Im\V1;

class Sync
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Im\V1\Schema::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
im/v1/sync.protoim.v1google/protobuf/empty.protogoogle/protobuf/any.protogoogle/api/annotations.protogoogle/api/field_behavior.proto"$
PairID
main (	
peer (	"6
MemberID
group (	
openid (	
rid (	"
ID
id (	B�A"-
MemberQuery
group (	
channel (	"*
	PairQuery
all (
card_ids (	"W

GroupQuery
team (	
host (	
owner (	
card_ids (	
addr ("3
GroupDetailQuery
group (	
card_ids (	"6
HistoryQuery

id (	
sender (	

ts ("�

Pagination
size (
index ( 
pair (2.im.v1.PairQueryH "
group (2.im.v1.GroupQueryH $
member (2.im.v1.MemberQueryH &
history (2.im.v1.HistoryQueryH B
raw"%
Members
arr (2.im.v1.Member"#
Groups
arr (2.im.v1.Group"!
Pairs
arr (2.im.v1.Pair"&
Notifies
arr (2.im.v1.Notify"C
Messages

ts (
sender (	
arr (2.im.v1.Unified"�
RespArr
pairs (2.im.v1.PairsH 
groups (2.im.v1.GroupsH !
members (2.im.v1.MembersH #
messages (2.im.v1.MessagesH #
notifies (2.im.v1.NotifiesH B
array"W

GroupCreat
group (2.im.v1.Group
rids (	
members (2.im.v1.Member"9
MemberCreat
rid (	
member (2.im.v1.Member"3
PairRelaStatusQuery
mains (	
peers (	"*
PairIDs
pair_ids (2.im.v1.PairID"%

QueryCount

id (	
num ("|
PairRelaStatus-
rela (2.im.v1.PairRelaStatus.RelaEntry;
	RelaEntry
key (	
value (2.im.v1.PairIDs:8"K
ThirdMessage
notify (
typ (	
content (	
users (	"�
Notify
lid (
openid (	
user_id (	
typ (	
notify (
	create_at (
	update_at (
	delete_at ("�
	WebOffice

id (	
name (	
version (
size (
create_time (
modify_time (

creator_id (	
modifier_id (	
url	 (	"?
CallBackWPSFile
code (
data (2.im.v1.WebOffice"O
CallBackWPSPermission
code ((
data (2.im.v1.WebOfficePermission"
WebOfficeID
file_id (	"#
WebOfficePermission
read ("�
UploadWebOfficeReq
file_id (	
file (
name (	
size (
sha1 (	
	is_manual (
attachment_size (
content_type (	*�
	NotifyTyp
APP_KNOW 

APP_SQUARE

APP_NOTIFY
APP_CLOUD_DISK
APP_APPROVAL
APP_ADDRESS_BOOK
	APP_TEAMS2�
PairSrv;

CreatePair.im.v1.Pair.im.v1.Pair"���"v1/pairs:*E
GetPair.im.v1.PairID.im.v1.Pair"���v1/pairs/{main}/{peer}F

UpdatePair.im.v1.Pair.google.protobuf.Empty"���v1/pairs:*S

DeletePair.im.v1.PairID.google.protobuf.Empty"���*v1/pairs/{main}/{peer}I
ListPair.im.v1.Pagination.im.v1.RespArr"���"v1/pairs/search:*`
UpdatePairActive.im.v1.PairID.google.protobuf.Empty"%���v1/pairs/active/{main}/{peer}`
PairCreatedCheck.im.v1.PairRelaStatusQuery.im.v1.PairRelaStatus"���"v1/pairs/check:*2�
	MemberSrvH
CreateMember.im.v1.MemberCreat.im.v1.Member"���"
v1/members:*P
	GetMember.im.v1.MemberID.im.v1.Member"#���v1/members/{group}/{openid}L
UpdateMember.im.v1.Member.google.protobuf.Empty"���
v1/members:*b
DeleteMember.im.v1.MemberID.google.protobuf.Empty")���#*!v1/members/{group}/{openid}/{rid}M

ListMember.im.v1.Pagination.im.v1.RespArr"���"v1/members/search:*2�
GroupSrvD
CreateGroup.im.v1.GroupCreat.im.v1.Group"���"	v1/groups:*;
GetGroup	.im.v1.ID.im.v1.Group"���v1/groups/{id}I
UpdateGroup.im.v1.Group.google.protobuf.Empty"���	v1/groups:*H
DeleteGroup	.im.v1.ID.google.protobuf.Empty"���*v1/groups/{id}K
	ListGroup.im.v1.Pagination.im.v1.RespArr"���"v1/groups/search:*U
UpdateGroupActive	.im.v1.ID.google.protobuf.Empty"���v1/groups/active/{id}Y
GroupDetailWithCards.im.v1.GroupDetailQuery.im.v1.Group"���"v1/groups/cards:*2�
	NotifySrvO
Send.im.v1.ThirdMessage.google.protobuf.Empty"���"v1/message/send:*M
UpdateNotify.im.v1.Notify.google.protobuf.Empty"���v1/notifies:*N

ListNotify.im.v1.Pagination.im.v1.RespArr"���"v1/notifies/search:*2�
WebOfficeSrvL
CreateWebOffice.im.v1.WebOffice.im.v1.WebOfficeID"���"v1/files:*M
GetWebOffice	.im.v1.ID.im.v1.CallBackWPSFile"���/v3/3rd/files/{id}Y
GetWebOfficeURL	.im.v1.ID.im.v1.CallBackWPSFile"#���/v3/3rd/files/{id}/downloadh
GetWebOfficePermission	.im.v1.ID.im.v1.CallBackWPSPermission"%���/v3/3rd/files/{id}/permissionB
Zim/v1;imbproto3'
        , true);

        static::$is_initialized = true;
    }
}

