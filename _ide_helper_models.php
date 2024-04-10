<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $TITLE
 * @property string|null $CONTENT
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @method static \Database\Factories\BoardModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardModel whereTITLE($value)
 */
	class BoardModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $CLASS_NAME
 * @property string $IMG_SRC
 * @property string|null $DESCRIBE
 * @property string $START_DATE
 * @property int|null $CLASS_WEEK_DAY
 * @property string|null $START_TIME
 * @property string|null $END_TIME
 * @property int|null $CLASS_WEEK
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $TYPE_ID
 * @property int $TEACHER_ID
 * @method static \Database\Factories\ClassListModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereCLASSNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereCLASSWEEK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereCLASSWEEKDAY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereDESCRIBE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereENDTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereIMGSRC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereSTARTDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereSTARTTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereTEACHERID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassListModel whereTYPEID($value)
 */
	class ClassListModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $TYPE_NAME
 * @property string $CODE
 * @property string $IMG_SRC
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @method static \Database\Factories\ClassTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereCODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereIMGSRC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassType whereTYPENAME($value)
 */
	class ClassType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $FILE_NAME
 * @property string $FILE_TYPE
 * @property string $FILE_PATH
 * @property string $FILE_SIZE
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @method static \Database\Factories\FileModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereFILENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereFILEPATH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereFILESIZE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereFILETYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FileModel whereMODIFIER($value)
 */
	class FileModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $TYPE
 * @property int|null $GRADE
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int|null $STUDENT_ID
 * @property int|null $GRP_ID
 * @property int $CLASS_ID
 * @method static \Database\Factories\GradeModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereGRADE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereGRPID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereSTUDENTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GradeModel whereTYPE($value)
 */
	class GradeModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $GRP_NAME
 * @property string $GRP_LEADER
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @method static \Database\Factories\GrpModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereGRPLEADER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereGRPNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GrpModel whereMODIFIER($value)
 */
	class GrpModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $TITLE
 * @property string|null $CONTENT
 * @property string $IS_GRP
 * @property string $SUBMISSION_TIME
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @method static \Database\Factories\HomeWorkModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereISGRP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereSUBMISSIONTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeWorkModel whereTITLE($value)
 */
	class HomeWorkModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $NAME
 * @method static \Database\Factories\IdentityModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdentityModel whereNAME($value)
 */
	class IdentityModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $TITLE
 * @property string $CONTENT
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @property int $STUDENT_ID
 * @method static \Database\Factories\NoteModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereSTUDENTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteModel whereTITLE($value)
 */
	class NoteModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $GRADUATED
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $STUDENT_ID
 * @property int $CLASS_ID
 * @method static \Database\Factories\StudentSelectClassModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereGRADUATED($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentSelectClassModel whereSTUDENTID($value)
 */
	class StudentSelectClassModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @property int $TEACH_ID
 * @property int $USER_ID
 * @method static \Database\Factories\TeacherAssistantModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereTEACHID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherAssistantModel whereUSERID($value)
 */
	class TeacherAssistantModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property string $NAME
 * @property string $GRADUATED_SCHOOL
 * @property string $IMG_SRC
 * @property string $EXPERTISE
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ClassListModel> $ClassListModelHasMany
 * @property-read int|null $class_list_model_has_many_count
 * @method static \Database\Factories\TeacherDetailModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereEXPERTISE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereGRADUATEDSCHOOL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereIMGSRC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherDetailModel whereNAME($value)
 */
	class TeacherDetailModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $CONTENT
 * @property string $CREATETIME
 * @property string $CREATOR
 * @property string $LASTUPDATE
 * @property string $MODIFIER
 * @property int $CLASS_ID
 * @property int|null $FILE_ID
 * @method static \Database\Factories\TextBookModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereCLASSID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereCREATOR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereFILEID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextBookModel whereMODIFIER($value)
 */
	class TextBookModel extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $EMAIL
 * @property string $ACCT
 * @property string $PWD
 * @property string $NAME
 * @property string|null $AGE
 * @property string $sex
 * @property string $IDENTITY_ID
 * @property string $CREATETIME
 * @property string $LASTUPDATE
 * @property string|null $MODIFIER
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserModelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereACCT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereAGE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCREATETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereIDENTITYID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereLASTUPDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereMODIFIER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePWD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereSex($value)
 */
	class UserModel extends \Eloquent {}
}

