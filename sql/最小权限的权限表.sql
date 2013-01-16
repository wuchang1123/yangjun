SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pubyj_acl`
-- ----------------------------
DROP TABLE IF EXISTS `pubyj_acl`;
CREATE TABLE `pubyj_acl` (
  `aclid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `acl_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`aclid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pubyj_acl
-- ----------------------------
INSERT INTO `pubyj_acl` VALUES ('1', '留言管理后台', 'gbook', 'edit', 'GBADMIN');
INSERT INTO `pubyj_acl` VALUES ('2', '删除留言', 'gbook', 'del', 'GBADMIN');
INSERT INTO `pubyj_acl` VALUES ('3', '删除留言', 'gbook', 'reply', 'GBADMIN');
