--
-- Old jbClan Db Tables
--
-- Core/Shared Db's
-- 
-- jbclan_roster_preferences
-- jbclan_roster_custom_attribute_entries
-- jbclan_roster_custom_attribute_values
-- 
-- jbApp
-- 
-- jbclan_application_info
-- 
-- jbRoster
-- 
-- jbclan_roster_games
-- jbclan_roster_leader_status
-- jbclan_roster_member_status
-- jbclan_roster_members
-- jbclan_roster_organization_designations
-- jbclan_roster_organization_designations
-- jbclan_roster_organization_unit_designations
-- jbclan_roster_team_members
-- jbclan_roster_team_status
-- jbclan_roster_teams
-- jbclan_roster_text_colors

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_preferences`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_preferences` (
  `organization_id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(200) NOT NULL DEFAULT 'Your Organization',
  `organization_type` int(11) NOT NULL DEFAULT '3',
  `organization_designation` int(11) NOT NULL DEFAULT '1',
  `organization_unit_designation` int(11) NOT NULL DEFAULT '1',
  `organization_logo` varchar(200) NOT NULL DEFAULT '',
  `organization_logo_alignment` varchar(200) NOT NULL DEFAULT 'center',
  `organization_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`organization_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_preferences`
--

INSERT INTO `jbclan_roster_preferences` (`organization_id`, `organization_name`, `organization_type`, `organization_designation`, `organization_unit_designation`, `organization_logo`, `organization_logo_alignment`, `organization_order`) VALUES
(1, 'Enter Organization Name', 1, 1, 1, '', 'center', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_custom_attribute_entries`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_custom_attribute_entries` (
  `attribute_id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_name` varchar(200) NOT NULL DEFAULT 'None',
  `organization_type` int(11) NOT NULL,
  `attribute_order` int(11) NOT NULL,
  `main_display` int(11) NOT NULL DEFAULT '1',
  `profile_display` int(11) NOT NULL DEFAULT '1',
  `application_display` int(11) NOT NULL DEFAULT '1',
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  PRIMARY KEY (`attribute_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_custom_attribute_entries`
--

INSERT INTO `jbclan_roster_custom_attribute_entries` (`attribute_id`, `attribute_name`, `organization_type`, `attribute_order`, `main_display`, `profile_display`, `application_display`, `text_color`) VALUES
(1, 'Nick Name', 1, 1, 1, 1, 1, '#FFFFFF'),
(2, 'Real Name', 1, 2, 1, 1, 1, '#FFFFFF'),
(3, 'Team Status', 1, 3, 1, 1, 1, '#FFFFFF'),
(4, 'Member Status', 1, 4, 1, 1, 1, '#FFFFFF'),
(5, 'Leader Status', 1, 5, 1, 1, 1, '#FFFFFF'),
(6, 'Desired Status', 1, 6, 1, 1, 1, '#FFFFFF'),
(7, 'Other Games I Play', 2, 7, 1, 1, 1, '#FFFFFF'),
(8, 'Email Address', 1, 8, 1, 1, 1, '#FFFFFF'),
(9, 'Xfire', 2, 9, 1, 1, 1, '#FFFFFF'),
(10, 'AIM', 1, 10, 1, 1, 1, '#FFFFFF'),
(11, 'MSN', 1, 11, 1, 1, 1, '#FFFFFF'),
(12, 'YIM', 1, 12, 1, 1, 1, '#FFFFFF'),
(13, 'ICQ', 1, 13, 1, 1, 1, '#FFFFFF'),
(14, 'Location', 1, 14, 1, 1, 1, '#FFFFFF'),
(15, 'Age', 1, 15, 1, 1, 1, '#FFFFFF'),
(16, 'Gender', 1, 16, 1, 1, 1, '#FFFFFF'),
(17, 'Player Level', 4, 17, 1, 1, 1, '#FFFFFF'),
(18, 'Player Race', 4, 18, 1, 1, 1, '#FFFFFF'),
(19, 'Player Class', 4, 19, 1, 1, 1, '#FFFFFF'),
(20, 'Player Profession', 4, 20, 1, 1, 1, '#FFFFFF'),
(21, 'Player Position', 5, 21, 1, 1, 1, '#FFFFFF'),
(22, 'Player Height', 5, 22, 1, 1, 1, '#FFFFFF'),
(23, 'Player Weight', 5, 23, 1, 1, 1, '#FFFFFF'),
(24, 'Jersey #', 5, 24, 1, 1, 1, '#FFFFFF'),
(25, 'Work/School', 1, 25, 1, 1, 1, '#FFFFFF'),
(26, 'Best Night To Play', 2, 26, 1, 1, 1, '#FFFFFF'),
(27, 'Worst Night To Play', 2, 27, 1, 1, 1, '#FFFFFF'),
(28, 'Best Time Of Day', 2, 28, 1, 1, 1, '#FFFFFF'),
(29, 'Worst Time Of Day', 2, 29, 1, 1, 1, '#FFFFFF'),
(30, 'Favorite Maps', 3, 30, 1, 1, 1, '#FFFFFF'),
(31, 'Favorite Weapons', 2, 31, 1, 1, 1, '#FFFFFF'),
(32, 'Skill Level', 2, 32, 1, 1, 1, '#FFFFFF'),
(33, 'Other Clans I Have Been In', 2, 33, 1, 1, 1, '#FFFFFF'),
(34, 'How I Heard About', 1, 34, 1, 1, 1, '#FFFFFF'),
(35, 'PC Manufacturer', 2, 35, 1, 1, 1, '#FFFFFF'),
(36, 'Motherboard', 2, 36, 1, 1, 1, '#FFFFFF'),
(37, 'CPU', 2, 37, 1, 2, 1, '#FFFFFF'),
(38, 'Memory', 2, 38, 1, 2, 1, '#FFFFFF'),
(39, 'Hard Drives', 2, 39, 1, 1, 1, '#FFFFFF'),
(40, 'Video Card', 2, 40, 1, 1, 1, '#FFFFFF'),
(41, 'Sound Card', 2, 41, 1, 1, 1, '#FFFFFF'),
(42, 'Headset', 2, 42, 1, 1, 1, '#FFFFFF'),
(43, 'Monitor', 2, 43, 1, 1, 1, '#FFFFFF'),
(44, 'Keyboard', 2, 44, 1, 1, 1, '#FFFFFF'),
(45, 'Mouse', 2, 45, 1, 1, 1, '#FFFFFF'),
(46, 'Internet Connection', 2, 46, 1, 1, 1, '#FFFFFF'),
(47, 'Member Bio', 1, 47, 1, 1, 1, '#FFFFFF'),
(48, 'Application Comments', 1, 48, 1, 1, 1, '#FFFFFF'),
(49, 'Join Date', 1, 49, 1, 1, 1, '#FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_custom_attribute_values`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_custom_attribute_values` (
  `member_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `attribute_name` varchar(200) NOT NULL DEFAULT 'None',
  `attribute_value` varchar(1000) NOT NULL DEFAULT 'None',
  `organization_type` int(11) NOT NULL,
  `main_display` int(11) NOT NULL DEFAULT '1',
  `profile_display` int(11) NOT NULL DEFAULT '1',
  `application_display` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_games`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(200) NOT NULL DEFAULT 'None',
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `game_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_application_info`
--

CREATE TABLE IF NOT EXISTS `jbclan_application_info` (
  `organization_id` int(11) NOT NULL,
  `organization_email` varchar(200) NOT NULL DEFAULT '',
  `organization_disclaimer` TEXT NOT NULL DEFAULT ''
) ENGINE=MyISAM;

--
-- Dumping data for table `jbclan_application_info`
--

INSERT INTO `jbclan_application_info` (`organization_disclaimer`) VALUES
(1, '<center>This is a basic statement of what the Organization is all about and what kind of members we are looking for.</center>');

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_leader_status`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_leader_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(200) NOT NULL,
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `status_order` int(11) NOT NULL DEFAULT '1',
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_leader_status`
--

INSERT INTO `jbclan_roster_leader_status` (`status_id`, `status_name`, `text_color`, `status_order`, `display`) VALUES
(1, 'None', '#FFA500', 1, 1),
(2, 'Organization Leader', '#FFA500', 2, 1),
(3, 'Organization Captain', '#FFA500', 3, 1),
(4, 'Web Admin', '#008000', 4, 1),
(5, 'Clan Leader', '#FFA500', 1, 1),
(6, 'Clan Captain', '#FF0000', 1, 1),
(5, 'Guild Leader', '#FFA500', 1, 1),
(6, 'Guild Captain', '#FF0000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_members`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_members` (
  `member_id` int(11) NOT NULL,
  `nickname` varchar(200) NOT NULL DEFAULT '',
  `real_name` varchar(200) NOT NULL DEFAULT '',
  `external_image` varchar(200) NOT NULL DEFAULT '',
  `active_external_image` int(11) NOT NULL DEFAULT '1',
  `member_status` varchar(200) NOT NULL DEFAULT 'Open Application',
  `leader_status` varchar(200) NOT NULL DEFAULT 'None',
  `leader_order` int(11) NOT NULL DEFAULT '1',
  `member_application_date` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_member_status`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_member_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(200) NOT NULL,
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `status_order` int(11) NOT NULL DEFAULT '1',
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_member_status`
--

INSERT INTO `jbclan_roster_member_status` (`status_id`, `status_name`, `text_color`, `status_order`, `display`) VALUES
(1, 'None', '#FFFFFF', 1, 1),
(2, 'Team Member', '#FFFFFF', 2, 1),
(3, 'General Member', '#FFFFFF', 3, 1),
(4, 'Cadet', '#FFFFFF', 4, 1),
(5, 'Recruit', '#FFFFFF', 5, 1),
(6, 'Inactive Member', '#FFFFFF', 6, 1),
(7, 'Open Application', '#FFFFFF', 7, 1),
(8, 'Closed Application', '#FFFFFF', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_organization_designations`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_organization_designations` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(200) NOT NULL DEFAULT 'Clan',
  `designation_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_organization_designations`
--

INSERT INTO `jbclan_roster_organization_designations` (`designation_id`, `designation_name`, `designation_order`) VALUES
(1, 'Clan', 1),
(2, 'Team', 2),
(3, 'Guild', 3),
(4, 'Club', 4),
(5, 'Company', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_organization_types`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_organization_types` (
  `organization_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_type` int(11) NOT NULL DEFAULT '1',
  `organization_name` varchar(200) NOT NULL DEFAULT 'Your Organization',
  `organization_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`organization_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_organization_types`
--

INSERT INTO `jbclan_roster_organization_types` (`organization_type_id`, `organization_type`, `organization_name`, `organization_order`) VALUES
(1, 3, 'FPS Online Gaming', 1),
(2, 4, 'RPG Online Gaming', 2),
(3, 5, 'Club Sports Team', 3),
(4, 6, 'Other Type of Organization', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_organization_unit_designations`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_organization_unit_designations` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(200) NOT NULL DEFAULT 'Squad',
  `designation_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_organization_unit_designations`
--

INSERT INTO `jbclan_roster_organization_unit_designations` (`designation_id`, `designation_name`, `designation_order`) VALUES
(1, 'Squad', 1),
(2, 'Fire Team', 2),
(3, 'Raid', 3),
(4, 'Unit', 4),
(5, 'Division', 5),
(6, 'Section', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_teams`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(200) NOT NULL DEFAULT 'None',
  `game_id` int(11) NOT NULL,
  `game_name` varchar(200) NOT NULL DEFAULT 'None',
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `team_order` int(11) NOT NULL DEFAULT '1',
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_team_members`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_team_members` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(200) NOT NULL DEFAULT '',
  `team_id` int(11) NOT NULL,
  `team_name` varchar(200) NOT NULL DEFAULT '',
  `game_id` int(11) NOT NULL,
  `game_name` varchar(200) NOT NULL DEFAULT '',
  `member_team_status` varchar(200) NOT NULL DEFAULT 'None',
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `member_team_order` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_team_status`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_team_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(200) NOT NULL DEFAULT 'None',
  `team_id` int(11) NOT NULL,
  `team_name` varchar(200) NOT NULL,
  `game_id` int(11) NOT NULL,
  `game_name` varchar(200) NOT NULL,
  `text_color` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `status_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jbclan_roster_text_colors`
--

CREATE TABLE IF NOT EXISTS `jbclan_roster_text_colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(200) NOT NULL DEFAULT 'None',
  `hex_code` varchar(200) NOT NULL DEFAULT '#FFFFFF',
  `color_order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1;

--
-- Dumping data for table `jbclan_roster_text_colors`
--

INSERT INTO `jbclan_roster_text_colors` (`color_id`, `color_name`, `hex_code`, `color_order`) VALUES
(1, 'White', '#FFFFFF', 1),
(2, 'Silver', '#C0C0C0', 2),
(3, 'Aqua', '#00FFFF', 3),
(4, 'Yellow', '#FFFF00', 4),
(5, 'Orange', '#FFA500', 5),
(6, 'Red', '#FF0000', 6),
(7, 'Brown', '#A52A2A', 7),
(8, 'Purple', '#800080', 8),
(9, 'Blue', '#0000FF', 9),
(10, 'Green', '#008000', 10),
(11, 'Black', '#000000', 11);
