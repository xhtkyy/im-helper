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
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�W
im/v1/sync.protoim.v1google/protobuf/empty.protogoogle/protobuf/any.protogoogle/protobuf/struct.protogoogle/api/annotations.protogoogle/api/field_behavior.proto"5
PairID
main (	
peer (	
history ("\\
MemberID
group (	
openid (	
rid (	
history (
from_server ("
ID
id (	B�A"
IDs
ids (	B�A"&
IDPush

id (	
card_ids (	"-
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

ts ("H

ApplyQuery
typ (
gid (	
status (	
card_ids (	"�

Pagination
size (
index ( 
pair (2.im.v1.PairQueryH "
group (2.im.v1.GroupQueryH $
member (2.im.v1.MemberQueryH &
history (2.im.v1.HistoryQueryH "
apply (2.im.v1.ApplyQueryH B
raw"%
Members
arr (2.im.v1.Member"#
Groups
arr (2.im.v1.Group"!
Pairs
arr (2.im.v1.Pair"&
Notifies
arr (2.im.v1.Notify"$
Applies
arr (2.im.v1.Apply"C
Messages

ts (
sender (	
arr (2.im.v1.Unified"�
RespArr
pairs (2.im.v1.PairsH 
groups (2.im.v1.GroupsH !
members (2.im.v1.MembersH #
messages (2.im.v1.MessagesH #
notifies (2.im.v1.NotifiesH !
applies (2.im.v1.AppliesH B
array"W

GroupCreat
group (2.im.v1.Group
rids (	
members (2.im.v1.Member"C
GroupCreateBatch
user (	!
groups (2.im.v1.GroupCreat"D
GroupTransfer
group (	
	old_owner (	
	new_owner (	"b
MemberCreat
rid (	
member (2.im.v1.Member

op_card_id (	
from_server ("A
MemberRoleUpdate
group (	
roles (	
members (	"3
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
value (2.im.v1.PairIDs:8"c
MemberDelBatch
group (	
ids (	
rids (	

op_card_id (	
from_server ("v
MemberAddBatch
group (	
rids (	
members (2.im.v1.Member

op_card_id (	
from_server ("H
ExitTeamGroupsReq
user_id (	
card_ids (	
team_ids (	"l
ThirdMessage
notify (
sender (	 
content (2.im.v1.RCNotify
users (	
seq ("�
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
content_type (	"E
RCNotify
type (	
scene (
content (	
seq ("�
Apply
lid (
openid (	
	applicant (	
handler (	
typ (
members (2.im.v1.Member
status (	
	create_at (
	update_at	 (
	delete_at
 (
card_ids (	
gid (	
content (	";
	StatusReq

id (	
status (	

op_card_id (	"@
RelaLiftedReq
user (	
content (	
card_ids (	"z
RelaTransferReq
user (	
content (	
card_id (	
replace (	
r_openid (	
company_name (	"
	NotifyIDs
seqs (">
NotifyCountReq
all (H 
address_book (H B
raw"\'
NotifyCountResp
address_book ("u
FileSyncReq
group_id (	
title (	
creator (	
type (	
url (	
size (
pid (""
FileSyncFileRes
file_id ("Y
	MergQuery
title (	
teams (	
inner_card_ids (	
outer_card_ids (	"n
MergQueryResp
pairs (2.im.v1.Pair
groups (2.im.v1.Group#
cards (2.google.protobuf.Any"p

NotifyMark
lid (
typ (	
user_id (	
	create_at (
	update_at (
	delete_at ("�
	VoiceText
lid (
task_id (
openid (	
user_id (	
url (	
text (	
	create_at (
	update_at (
	delete_at	 ("

TextResult
text (	"=
TextCallback
code (
text (	
	requestId ("�
Meeting
lid (
creator (	
user_id (	
room_id (	%
user (2.google.protobuf.Struct&
users (2.google.protobuf.Struct
online_user_ids (	
	create_at (
	update_at	 (
	delete_at
 (

session_id (	
card_id (	
platform (	
group_id (	
typ (	
start_at (
close_at ("�
MeetingRecord
lid (
user_id (	
room_id (	
	record_id (	
	file_name (	
	file_size (
	create_at (
	update_at (
	delete_at	 ("F
VoiceStreamRecordOutputCallback
file_url (	
	file_size ("�
VoiceStreamRecordCallback
type (
user_id (	
room_id (	
	record_id (	
	timestamp (6
output (2&.im.v1.VoiceStreamRecordOutputCallback"s
VoiceStreamStatusCallback
event (
user_id (	
room_id (	

session_id (	
	timestamp ("O
VoiceStreamRecordReq
room_id (	&
op (2.im.v1.VoiceStreamRecordOp"*
VoiceStreamRecordResp
	record_id (	"+
QueryVoiceStreamRecord
	record_id (	*.

MemberRole	
ADMIN 	
OWNER

MEMBER*�
	NotifyTyp
APP_KNOW 

APP_SQUARE

APP_NOTIFY
APP_CLOUD_DISK
APP_APPROVAL
APP_ADDRESS_BOOK
	APP_TEAMS

APP_GROUPS
APP_MEMBERS
	APP_PAIRS	
APP_ACCOUNT

APP_SECRETARY
APP_BUSINESS
APP_CONFIGS
	APP_WORKS*�
NotifyScene

CREATE 

UPDATE

DELETE
	BATCH_DEL
	BATCH_ADD
OWNER_TRANSFER
GROUP_APPLY
GROUP_SELF_DEL*
ApplyTyp

GROUP_JOIN *O
ApplyStatus
WAIT 
SEND

CANCEL

REJECT
PASS

REMOVE**
VoiceStreamRecordOp
STOP 	
START2�
PairSrv;

CreatePair.im.v1.Pair.im.v1.Pair"���"v1/pairs:*E
GetPair.im.v1.PairID.im.v1.Pair"���v1/pairs/{main}/{peer}F

UpdatePair.im.v1.Pair.google.protobuf.Empty"���v1/pairs:*]

DeletePair.im.v1.PairID.google.protobuf.Empty"(���"* v1/pairs/{main}/{peer}/{history}I
ListPair.im.v1.Pagination.im.v1.RespArr"���"v1/pairs/search:*`
UpdatePairActive.im.v1.PairID.google.protobuf.Empty"%���v1/pairs/active/{main}/{peer}`
PairCreatedCheck.im.v1.PairRelaStatusQuery.im.v1.PairRelaStatus"���"v1/pairs/check:*2�
	MemberSrvH
CreateMember.im.v1.MemberCreat.im.v1.Member"���"
v1/members:*P
	GetMember.im.v1.MemberID.im.v1.Member"#���v1/members/{group}/{openid}L
UpdateMember.im.v1.Member.google.protobuf.Empty"���
v1/members:*l
DeleteMember.im.v1.MemberID.google.protobuf.Empty"3���-*+v1/members/{group}/{openid}/{rid}/{history}M

ListMember.im.v1.Pagination.im.v1.RespArr"���"v1/members/search:*a
UpdateMembersRole.im.v1.MemberRoleUpdate.google.protobuf.Empty"���v1/members/roles:*a
BatchMembersDel.im.v1.MemberDelBatch.google.protobuf.Empty"���"v1/members/batch/del:*a
BatchMembersAdd.im.v1.MemberAddBatch.google.protobuf.Empty"���"v1/members/batch/add:*2�
GroupSrvD
CreateGroup.im.v1.GroupCreat.im.v1.Group"���"	v1/groups:*;
GetGroup	.im.v1.ID.im.v1.Group"���v1/groups/{id}I
UpdateGroup.im.v1.Group.google.protobuf.Empty"���	v1/groups:*H
DeleteGroup	.im.v1.ID.google.protobuf.Empty"���*v1/groups/{id}K
	ListGroup.im.v1.Pagination.im.v1.RespArr"���"v1/groups/search:*U
UpdateGroupActive	.im.v1.ID.google.protobuf.Empty"���v1/groups/active/{id}Y
GroupDetailWithCards.im.v1.GroupDetailQuery.im.v1.Group"���"v1/groups/cards:*`
CreateGroupBatch.im.v1.GroupCreateBatch.im.v1.GroupCreateBatch"���"v1/groups/batch:*\\
TransferGroup.im.v1.GroupTransfer.google.protobuf.Empty"���"v1/groups/transfer:*Y
CloseGroupFileSync	.im.v1.ID.google.protobuf.Empty" ���*v1/groups/file_sync/{id}b
ExitTeamGroups.im.v1.ExitTeamGroupsReq.google.protobuf.Empty"���"v1/groups/team/quit:*2�
	NotifySrvO
Send.im.v1.ThirdMessage.google.protobuf.Empty"���"v1/message/send:*M
UpdateNotify.im.v1.Notify.google.protobuf.Empty"���v1/notifies:*N

ListNotify.im.v1.Pagination.im.v1.RespArr"���"v1/notifies/search:*2�
WebOfficeSrvL
CreateWebOffice.im.v1.WebOffice.im.v1.WebOfficeID"���"v1/files:*M
GetWebOffice	.im.v1.ID.im.v1.CallBackWPSFile"���/v3/3rd/files/{id}Y
GetWebOfficeURL	.im.v1.ID.im.v1.CallBackWPSFile"#���/v3/3rd/files/{id}/downloadh
GetWebOfficePermission	.im.v1.ID.im.v1.CallBackWPSPermission"%���/v3/3rd/files/{id}/permission2�
ApplySrvJ
CreateApply.im.v1.Apply.google.protobuf.Empty"���"
v1/applies:*<
GetApply	.im.v1.ID.im.v1.Apply"���v1/applies/{id}J
UpdateApply.im.v1.Apply.google.protobuf.Empty"���
v1/applies:*[
UpdateApplyStatus.im.v1.StatusReq.google.protobuf.Empty"���v1/applies/status:*N
ListApplies.im.v1.Pagination.im.v1.RespArr"���"v1/applies/search:*2�
BusinessSrvY
UserRelaLifted.im.v1.RelaLiftedReq.google.protobuf.Empty"���"v1/rela_lifted:*_
UserRelaTransfer.im.v1.RelaTransferReq.google.protobuf.Empty"���"v1/rela_transfer:*Q

NotifyMark.im.v1.NotifyIDs.google.protobuf.Empty"���"v1/notify_read:*X
NotifyCount.im.v1.NotifyCountReq.im.v1.NotifyCountResp"���"v1/notify_count:*T
GroupFileSync.im.v1.FileSyncReq.im.v1.FileSyncFileRes"���"v1/file_sync:*e
GroupFileSyncCancel.im.v1.FileSyncFileRes.google.protobuf.Empty"���*v1/file_sync/{file_id}U
GlobalMergSearch.im.v1.MergQuery.im.v1.MergQueryResp"���"v1/merg_search:*2�

TencentSrvK
VoiceTextResult	.im.v1.ID.im.v1.TextResult"���v1/voice_text/{id}C

Voice2Text.im.v1.VoiceText	.im.v1.ID"���"v1/voice_text:*d
Voice2TextCallback.im.v1.TextCallback.google.protobuf.Empty"!���"v1/voice_text_callback:*2�

MeetingSrvA
CreateMeeting.im.v1.Meeting	.im.v1.ID"���"
v1/meeting:*@

GetMeeting	.im.v1.ID.im.v1.Meeting"���v1/meeting/{id}k
RCVoiceStream.im.v1.QueryVoiceStreamRecord.im.v1.MeetingRecord"%���v1/meeting/record/{record_id}n
RCVoiceStreamRecord.im.v1.VoiceStreamRecordReq.im.v1.VoiceStreamRecordResp"���"v1/meeting/record:*~
RCVoiceStreamRecordCallback .im.v1.VoiceStreamRecordCallback.google.protobuf.Empty"%���"v1/meeting/record_callback:*~
RCVoiceStreamStatusCallback .im.v1.VoiceStreamStatusCallback.google.protobuf.Empty"%���"v1/meeting/status_callback:*B
Zim/v1;imbproto3'
        , true);

        static::$is_initialized = true;
    }
}

