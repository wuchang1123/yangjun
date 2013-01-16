SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pubyj_user`
-- ----------------------------
DROP TABLE IF EXISTS `pubyj_user`;
CREATE TABLE `pubyj_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(32) NOT NULL,
  `acl` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT 'GBUSER',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pubyj_user
-- ----------------------------
INSERT INTO `pubyj_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'GBADMIN');
