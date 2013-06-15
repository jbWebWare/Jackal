<?php

// Generated e107 Plugin Admin Area 

/**
 * Initialize e107 core
 * If not an admin then redirect to front page
 */
require_once('../../class2.php');
if (!getperms('P')) 
{
	header('location:'.e_BASE.'index.php');
	exit;
}




class jackal_admin extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'jbclan_roster_custom_attribute_values_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_custom_attribute_values_form_ui',
			'uipath' 		=> null
		),

		'cat'	=> array(
			'controller' 	=> 'jbclan_roster_members_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_members_form_ui',
			'uipath' 		=> null
		),

		'other1'	=> array(
			'controller' 	=> 'jbclan_roster_organization_designations_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_organization_designations_form_ui',
			'uipath' 		=> null
		),

		'other2'	=> array(
			'controller' 	=> 'jbclan_roster_organization_types_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_organization_types_form_ui',
			'uipath' 		=> null
		),

		'other3'	=> array(
			'controller' 	=> 'jbclan_roster_organization_unit_designations_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_organization_unit_designations_form_ui',
			'uipath' 		=> null
		),

		'other4'	=> array(
			'controller' 	=> 'jbclan_roster_preferences_ui',
			'path' 			=> null,
			'ui' 			=> 'jbclan_roster_preferences_form_ui',
			'uipath' 		=> null
		),

	);	
	
	
	protected $adminMenu = array(
/*
		'main/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'main/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		'cat/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'cat/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		'other1/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'other1/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		'other2/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'other2/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		'other2/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'other2/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),

		'other2/list'			=> array('caption'=> LAN_MANAGE, 'perm' => 'P'),
		'other2/create'		=> array('caption'=> LAN_CREATE, 'perm' => 'P'),
//*/

		'main/list'			=> array('caption'=> 'Manage Roster Attributes', 'perm' => 'P'),
		'main/create'		=> array('caption'=> 'Create Roster Attributes', 'perm' => 'P'),

		'cat/list'			=> array('caption'=> 'Manage Members', 'perm' => 'P'),
		'cat/create'		=> array('caption'=> 'Create Members', 'perm' => 'P'),

		'other1/list'		=> array('caption'=> 'Manage Org Designation', 'perm' => 'P'),
		'other1/create'		=> array('caption'=> 'Create Org Designation', 'perm' => 'P'),

		'other2/list'		=> array('caption'=> 'Manage Org Preferences 1', 'perm' => 'P'),
		'other2/create'		=> array('caption'=> 'Create Org Preferences 1', 'perm' => 'P'),

		'other3/list'		=> array('caption'=> 'Manage Org Preferences 2', 'perm' => 'P'),
		'other3/create'		=> array('caption'=> 'Create Org Preferences 2', 'perm' => 'P'),

		'other4/list'		=> array('caption'=> 'Manage Org Preferences 3', 'perm' => 'P'),
		'other4/create'		=> array('caption'=> 'Create Org Preferences 3', 'perm' => 'P'),
			
	/*
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),
		'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	*/	

	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'jackal';
}




				
class jbclan_roster_custom_attribute_values_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_custom_attribute_values';
		protected $pid				= '';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'member_id' =>   array ( 'title' => 'LAN_ID', 'type' => 'boolean', 'data' => 'int', 'width' => '5%', 'help' => 'Site Member ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'attribute_id' =>   array ( 'title' => 'LAN_ID', 'type' => 'boolean', 'data' => 'int', 'width' => '5%', 'help' => 'Attribute ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'attribute_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => 'Attribute Name', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'attribute_value' =>   array ( 'title' => 'Value', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Attribute Value', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'organization_type' =>   array ( 'title' => 'LAN_TYPE', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'filter' => true, 'inline' => true, 'help' => 'Organization Type', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'main_display' =>   array ( 'title' => 'Display Roster Page', 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Display attribute on Roster page', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'profile_display' =>   array ( 'title' => 'Display Profile Page', 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Display attribute on Profile page', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'application_display' =>   array ( 'title' => 'Display Application Page', 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Display attribute on Application page', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('attribute_name', 'attribute_value', 'organization_type', 'main_display', 'profile_display', 'application_display');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_custom_attribute_values_form_ui extends e_admin_form_ui
{

}		
		

				
class jbclan_roster_members_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_members';
		protected $pid				= '';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'member_id' =>   array ( 'title' => 'LAN_ID', 'type' => 'user', 'data' => 'int', 'width' => '5%', 'help' => 'Site Member ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'nickname' =>   array ( 'title' => 'LAN_NICKNAME', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Nickname', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'real_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Real Name', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'external_image' =>   array ( 'title' => 'LAN_IMAGE', 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => 'Image for Profile', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'active_external_image' =>   array ( 'title' => 'LAN_IMAGE', 'type' => 'boolean', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => 'Is profile image active', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'member_status' =>   array ( 'title' => 'Member Status', 'type' => 'dropdown', 'data' => 'str', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Current Member Status', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'leader_status' =>   array ( 'title' => 'Leader Status', 'type' => 'dropdown', 'data' => 'str', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Current Leader Status', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'leader_order' =>   array ( 'title' => 'LAN_ORDER', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Leader Display Order', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'member_application_date' =>   array ( 'title' => 'LAN_DATESTAMP', 'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'filter' => true, 'help' => 'When did member apply', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('nickname', 'real_name', 'external_image', 'active_external_image', 'member_status', 'leader_status', 'leader_order', 'member_application_date');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_members_form_ui extends e_admin_form_ui
{

}		
		

				
class jbclan_roster_organization_designations_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_organization_designations';
		protected $pid				= 'designation_id';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'designation_id' =>   array ( 'title' => 'LAN_ID', 'data' => 'int', 'width' => '5%', 'help' => 'Organization Designation ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'designation_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Organization Designation (i.e. Clan, Guild)', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'designation_order' =>   array ( 'title' => 'LAN_ORDER', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => 'Organization Designation Display Order', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('designation_name', 'designation_order');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_organization_designations_form_ui extends e_admin_form_ui
{

}		
		

				
class jbclan_roster_organization_types_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_organization_types';
		protected $pid				= 'organization_type_id';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'organization_type_id' =>   array ( 'title' => 'LAN_ID', 'data' => 'int', 'width' => '5%', 'help' => 'Organization Type ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_type' =>   array ( 'title' => 'LAN_TYPE', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'filter' => true, 'inline' => true, 'help' => 'Organization Type (i.e. FPS Clan, WoW Guild)', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Organization Type Name', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_order' =>   array ( 'title' => 'LAN_ORDER', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => 'Organization Type Display Order', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('organization_type', 'organization_name', 'organization_order');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_organization_types_form_ui extends e_admin_form_ui
{

}		
		

				
class jbclan_roster_organization_unit_designations_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_organization_unit_designations';
		protected $pid				= 'designation_id';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'designation_id' =>   array ( 'title' => 'LAN_ID', 'data' => 'int', 'width' => '5%', 'help' => 'Designation ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'designation_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Designation Name (I.E. Squad, Team, Unit)', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'designation_order' =>   array ( 'title' => 'LAN_ORDER', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Designation Display Order', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('designation_name', 'designation_order');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_organization_unit_designations_form_ui extends e_admin_form_ui
{

}		
		

				
class jbclan_roster_preferences_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Jackal';
		protected $pluginName		= 'jackal';
		protected $table			= 'jbclan_roster_preferences';
		protected $pid				= 'organization_id';
		protected $perPage 			= 10; 
			
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'organization_id' =>   array ( 'title' => 'LAN_ID', 'data' => 'int', 'width' => '5%', 'help' => 'Organization ID', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_name' =>   array ( 'title' => 'LAN_TITLE', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'validate' => true, 'help' => 'Organization Name', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_type' =>   array ( 'title' => 'LAN_TYPE', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'filter' => true, 'inline' => true, 'help' => 'Organization Type', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'organization_designation' =>   array ( 'title' => 'Designation', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Organization Designation', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'organization_unit_designation' =>   array ( 'title' => 'Designation', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'batch' => true, 'inline' => true, 'help' => 'Organization Unit Designation', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'organization_logo' =>   array ( 'title' => 'Logo', 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => 'Organization Logo', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'organization_logo_alignment' =>   array ( 'title' => 'Alignment', 'type' => 'dropdown', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => 'Organization Logo Alignment (i.e. Center, Left)', 'readParms' => '', 'writeParms' => '', 'class' => 'center', 'thclass' => 'center',  ),
		  'organization_order' =>   array ( 'title' => 'LAN_ORDER', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => 'Organization Display Order', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => 'Options', 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('organization_name', 'organization_type', 'organization_designation', 'organization_unit_designation', 'organization_logo', 'organization_logo_alignment', 'organization_order');
		
		
		
	/*
		protected $prefs = array(
			'pref_type'	   				=> array('title'=> 'type', 'type'=>'text', 'data' => 'string', 'validate' => true),
			'pref_folder' 				=> array('title'=> 'folder', 'type' => 'boolean', 'data' => 'integer'),
			'pref_name' 				=> array('title'=> 'name', 'type' => 'text', 'data' => 'string', 'validate' => 'regex', 'rule' => '#^[\w]+$#i', 'help' => 'allowed characters are a-zA-Z and underscore')
		);

		
		// optional
		public function init()
		{
			
		}
	
		
		public function customPage()
		{
			$ns = e107::getRender();
			$text = 'Hello World!';
			$ns->tablerender('Hello',$text);	
			
		}
	*/
			
}
				


class jbclan_roster_preferences_form_ui extends e_admin_form_ui
{

}		
		
		
new jackal_admin();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>