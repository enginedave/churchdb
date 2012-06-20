<?php


/*
This command line tool is designed to establish five roles or level of users for the system
level1 = read only for the entities of - 			User, Family, People, Team
level2 = read and create - 							User, Family, People, Team
level3 = read create and update - 					User, Family, People, Team
level4 = read create update delete - 				User, Family, People, Team
admin = CRUD 										User, Family, People, Team, Districts, DistrictLeaders, MaritalStatus, MembershipStatus
													NextChurch, PreviousChurch Salutation Suffix
													
	to run the command and build the auth use::::: /opt/lampp/bin/php churchdb/protected/yiic shell churchdb/protected/config/main.php 
	run this from the root project directory i.e. public_html
*/

class RbacCommand extends CConsoleCommand

{
	private $_authManager;
	
	public function getHelp()
	{
		/*return <<<EOD
		USAGE
		rbac
		DESCRIPTION
		This command generates an initial RBAC authorization hierarchy.
		EOD;*/
	}
	
	/**
	* Execute the action.
	* @param array command line parameters specific for this command
	*/
	
	public function run($args)
	{
		//ensure that an authManager is defined as this is mandatory for creating an auth heirarchy
		if(($this->_authManager=Yii::app()->authManager)===null)
		{
			echo "Error: an authorization manager, named 'authManager' must be configured to use this command.\n";
			echo "If you already added 'authManager' component in application configuration,\n";
			echo "please quit and re-enter the yiic shell.\n";
			return;
		}
		
		//provide the oportunity for the use to abort the request
		echo "This command will create three roles: reader, editor, and administrator and the following premissions:\n";
		echo "CRUD + index and admin for districts\n";
		echo "CRUD + index and admin for districtLeaders\n";
		echo "CRUD + index and admin for family\n";
		echo "CRUD + index and admin for maritalStatus\n";
		echo "CRUD + index and admin for membershipStatus\n";
		echo "CRUD + index and admin for nextChurch\n";
		echo "CRUD + index and admin for people\n";
		echo "CRUD + index and admin for previousChurch\n";
		echo "CRUD + index and admin for salutation\n";
		echo "CRUD + index and admin for suffix\n";
		echo "CRUD + index and admin for team\n";
		echo "CRUD + index and admin for user\n";
		echo "Would you like to continue? [Yes|No] ";
		
		//check the input from the user and continue if they indicated yes to the above question
		if(!strncasecmp(trim(fgets(STDIN)),'y',1))
		{
			//first we need to remove all operations, roles, child relationship and assignments
			$this->_authManager->clearAll();
			
			
			//create the lowest level operations for districts
			$this->_authManager->createOperation("createDistrict","create a new district");
			$this->_authManager->createOperation("readDistrict","read district information");
			$this->_authManager->createOperation("updateDistrict","update a district information");
			$this->_authManager->createOperation("deleteDistrict","remove a district");
			$this->_authManager->createOperation("adminDistrict","administer district");
			$this->_authManager->createOperation("indexDistrict","view list of district");			
			//create the lowest level operations for districtLeaders
			$this->_authManager->createOperation("createDistrictLeaders","create a new districtLeaders");
			$this->_authManager->createOperation("readDistrictLeaders","read districtLeaders");
			$this->_authManager->createOperation("updateDistrictLeaders","update a districtLeaders information");
			$this->_authManager->createOperation("deleteDistrictLeaders","remove a districtLeaders");
			$this->_authManager->createOperation("adminDistrictLeaders","administer districtLeaders");
			$this->_authManager->createOperation("indexDistrictLeaders","view list of districtLeaders");
			//create the lowest level operations for family
			$this->_authManager->createOperation("createFamily","create a new family");
			$this->_authManager->createOperation("readFamily","read family profile information");
			$this->_authManager->createOperation("updateFamily","update a family information");
			$this->_authManager->createOperation("deleteFamily","remove a family");
			$this->_authManager->createOperation("adminFamily","administer family");
			$this->_authManager->createOperation("indexFamily","view list of family");			
			//create the lowest level operations for maritalStatus
			$this->_authManager->createOperation("createMaritalStatus","create a new maritalStatus");
			$this->_authManager->createOperation("readMaritalStatus","read maritalStatus profile information");
			$this->_authManager->createOperation("updateMaritalStatus","update a maritalStatus information");
			$this->_authManager->createOperation("deleteMaritalStatus","remove a maritalStatus");
			$this->_authManager->createOperation("adminMaritalStatus","administer maritalStatus");
			$this->_authManager->createOperation("indexMaritalStatus","view list of maritalStatus");
			//create the lowest level operations for membershipStatus
			$this->_authManager->createOperation("createMembershipStatus","create a new membershipStatus");
			$this->_authManager->createOperation("readMembershipStatus","read membershipStatus profile information");
			$this->_authManager->createOperation("updateMembershipStatus","update a membershipStatus information");
			$this->_authManager->createOperation("deleteMembershipStatus","remove a membershipStatus");
			$this->_authManager->createOperation("adminMembershipStatus","administer membershipStatus");
			$this->_authManager->createOperation("indexMembershipStatus","view list of membershipStatus");
			//create the lowest level operations for nextChurch
			$this->_authManager->createOperation("createNextChurch","create a new nextChurch");
			$this->_authManager->createOperation("readNextChurch","read nextChurch profile information");
			$this->_authManager->createOperation("updateNextChurch","update a nextChurch information");
			$this->_authManager->createOperation("deleteNextChurch","remove a nextChurch");
			$this->_authManager->createOperation("adminNextChurch","administer nextChurch");
			$this->_authManager->createOperation("indexNextChurch","view list of nextChurch");
			//create the lowest level operations for people
			$this->_authManager->createOperation("createPeople","create a new people");
			$this->_authManager->createOperation("readPeople","read people profile information");
			$this->_authManager->createOperation("updatePeople","update a people information");
			$this->_authManager->createOperation("deletePeople","remove a people");
			$this->_authManager->createOperation("adminPeople","administer people");
			$this->_authManager->createOperation("indexPeople","view list of people");
			//create the lowest level operations for previousChurch
			$this->_authManager->createOperation("createPreviousChurch","create a new previousChurch");
			$this->_authManager->createOperation("readPreviousChurch","read previousChurch profile information");
			$this->_authManager->createOperation("updatePreviousChurch","update a previousChurch information");
			$this->_authManager->createOperation("deletePreviousChurch","remove a previousChurch");
			$this->_authManager->createOperation("adminPreviousChurch","administer previousChurch");
			$this->_authManager->createOperation("indexPreviousChurch","view list of previousChurch");
			//create the lowest level operations for salutation
			$this->_authManager->createOperation("createSalutation","create a new salutation");
			$this->_authManager->createOperation("readSalutation","read salutation profile information");
			$this->_authManager->createOperation("updateSalutation","update a salutation information");
			$this->_authManager->createOperation("deleteSalutation","remove a salutation");
			$this->_authManager->createOperation("adminSalutation","administer salutation");
			$this->_authManager->createOperation("indexSalutation","view list of salutation");
			//create the lowest level operations for suffix
			$this->_authManager->createOperation("createSuffix","create a new suffix");
			$this->_authManager->createOperation("readSuffix","read suffix profile information");
			$this->_authManager->createOperation("updateSuffix","update a suffix information");
			$this->_authManager->createOperation("deleteSuffix","remove a suffix");
			$this->_authManager->createOperation("adminSuffix","administer suffix");
			$this->_authManager->createOperation("indexSuffix","view list of suffix");
			//create the lowest level operations for team
			$this->_authManager->createOperation("createTeam","create a new team");
			$this->_authManager->createOperation("readTeam","read team profile information");
			$this->_authManager->createOperation("updateTeam","update a team information");
			$this->_authManager->createOperation("deleteTeam","remove a team");
			$this->_authManager->createOperation("adminTeam","administer team");
			$this->_authManager->createOperation("indexTeam","view list of team");
			//create the lowest level operations for users
			$this->_authManager->createOperation("createUser","create a new user");
			$this->_authManager->createOperation("readUser","read user profile information");
			$this->_authManager->createOperation("updateUser","update a users information");
			$this->_authManager->createOperation("deleteUser","remove a user");
			$this->_authManager->createOperation("adminUser","administer user");
			$this->_authManager->createOperation("indexUser","view list of users");
			
			
			
			
			
			//create the reader role and add the appropriate permissions as children to this role
			//the reader role can access the list of entities and each individual entry. i.e. read only
			$role=$this->_authManager->createRole("reader");
			$role->addChild("readDistrict");
			$role->addChild("readDistrictLeaders");
			$role->addChild("readFamily");
			$role->addChild("readMaritalStatus");
			$role->addChild("readMembershipStatus");
			$role->addChild("readNextChurch");
			$role->addChild("readPeople");
			$role->addChild("readPreviousChurch");
			$role->addChild("readSalutation");
			$role->addChild("readSuffix");
			$role->addChild("readTeam");
			//$role->addChild("readUser");
			
			$role->addChild("indexDistrict");
			$role->addChild("indexDistrictLeaders");
			$role->addChild("indexFamily");
			$role->addChild("indexMaritalStatus");
			$role->addChild("indexMembershipStatus");
			$role->addChild("indexNextChurch");
			$role->addChild("indexPeople");
			$role->addChild("indexPreviousChurch");
			$role->addChild("indexSalutation");
			$role->addChild("indexSuffix");
			$role->addChild("indexTeam");
			//$role->addChild("indexUser");
			
			//create the editor role and add the appropriate permissions (and reader role) as children to this role
			$role=$this->_authManager->createRole("editor");
			$role->addChild("reader");
			
			$role->addChild("createDistrict");
			$role->addChild("createDistrictLeaders");
			$role->addChild("createFamily");
			$role->addChild("createMaritalStatus");
			$role->addChild("createMembershipStatus");
			$role->addChild("createNextChurch");
			$role->addChild("createPeople");
			$role->addChild("createPreviousChurch");
			$role->addChild("createSalutation");
			$role->addChild("createSuffix");
			$role->addChild("createTeam");
			//$role->addChild("createUser");
			
			$role->addChild("updateDistrict");
			$role->addChild("updateDistrictLeaders");
			$role->addChild("updateFamily");
			$role->addChild("updateMaritalStatus");
			$role->addChild("updateMembershipStatus");
			$role->addChild("updateNextChurch");
			$role->addChild("updatePeople");
			$role->addChild("updatePreviousChurch");
			$role->addChild("updateSalutation");
			$role->addChild("updateSuffix");
			$role->addChild("updateTeam");
			//$role->addChild("updateUser");
			
			
			//create the administrator role and add the appropriate permissions (and reader+editor roles) as children to this role
			$role=$this->_authManager->createRole("administrator");
			$role->addChild("editor");
			
			$role->addChild("deleteDistrict");
			$role->addChild("deleteDistrictLeaders");
			$role->addChild("deleteFamily");
			$role->addChild("deleteMaritalStatus");
			$role->addChild("deleteMembershipStatus");
			$role->addChild("deleteNextChurch");
			$role->addChild("deletePeople");
			$role->addChild("deletePreviousChurch");
			$role->addChild("deleteSalutation");
			$role->addChild("deleteSuffix");
			$role->addChild("deleteTeam");
			//$role->addChild("deleteUser");
			
			$role->addChild("adminDistrict");
			$role->addChild("adminDistrictLeaders");
			$role->addChild("adminFamily");
			$role->addChild("adminMaritalStatus");
			$role->addChild("adminMembershipStatus");
			$role->addChild("adminNextChurch");
			$role->addChild("adminPeople");
			$role->addChild("adminPreviousChurch");
			$role->addChild("adminSalutation");
			$role->addChild("adminSuffix");
			$role->addChild("adminTeam");
			//$role->addChild("adminUser");
			
			//create the superadmin role and add the appropriate permissions (and reader+editor+administrator roles) as children to this role
			$role=$this->_authManager->createRole("superadmin");
			$role->addChild("administrator");
			
			$role->addChild("readUser");
			$role->addChild("indexUser");
			$role->addChild("createUser");
			$role->addChild("updateUser");
			$role->addChild("deleteUser");
			$role->addChild("adminUser");
			
			
			//test the assignment of users 
			$this->_authManager->assign('reader', 1);
			$this->_authManager->assign('editor', 2);
			$this->_authManager->assign('administrator', 3);
			$this->_authManager->assign('superadmin', 4);
			
			
			//provide a message indicating success
			echo "Authorization hierarchy successfully generated.";
		}
	}
}

