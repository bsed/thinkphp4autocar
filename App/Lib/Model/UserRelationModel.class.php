<?php
	Class UserRelationModel extends RelationModel{
		Protected $tableName = 'users';

		Protected $_link = array(
			'role' => array(
				'mapping_type' => MANY_TO_MANY, //多对多
				'foreign_key' => 'user_id',   //主表在中间表的字段名称
				'relation_key' => 'role_id',  //副表在中间表的字段名称
				'relation_table' => 'hcwx_role_user',  //中间表名称
				'mapping_fields' => 'id,name,remark',
				)
		);
	}
?>