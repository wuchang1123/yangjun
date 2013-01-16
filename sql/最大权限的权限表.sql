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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pubyj_acl
-- ----------------------------
INSERT INTO `pubyj_acl` VALUES ('1', '留言管理后台', 'admin', 'index', 'GBADMIN');
INSERT INTO `pubyj_acl` VALUES ('2', '删除留言', 'admin', 'del', 'GBADMIN');
INSERT INTO `pubyj_acl` VALUES ('3', '提交留言', 'main', 'post', 'GBUSER');
INSERT INTO `pubyj_acl` VALUES ('4', '提交留言', 'main', 'post', 'GBADMIN');
INSERT INTO `pubyj_acl` VALUES ('5', '首页', 'main', 'index', 'SPANONYMOUS');
INSERT INTO `pubyj_acl` VALUES ('6', '登录', 'main', 'login', 'SPANONYMOUS');
INSERT INTO `pubyj_acl` VALUES ('7', '查看留言', 'main', 'view', 'SPANONYMOUS');
INSERT INTO `pubyj_acl` VALUES ('8', '登出', 'main', 'logout', 'SPANONYMOUS');
