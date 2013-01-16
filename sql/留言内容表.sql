SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `pubyj_guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `pubyj_guestbook`;
CREATE TABLE `pubyj_guestbook` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `contents` TEXT CHARACTER SET utf8 NOT NULL,
  `ctime` int(12) NOT NULL,
  `uname` varchar(20) CHARACTER SET utf8 NULL,
  `umail` varchar(50) CHARACTER SET utf8 NULL,
  `utel` varchar(50) CHARACTER SET utf8 NULL,
  `ucompany` varchar(50) CHARACTER SET utf8 NULL,
  `ucompany_site` varchar(100) CHARACTER SET utf8 NULL,
  `usns` varchar(100) CHARACTER SET utf8 NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pubyj_guestbook
-- ----------------------------
INSERT INTO `pubyj_guestbook` VALUES ('1', '哈哈，这里是内容，非常多的内容。', '1264835827', 'jake', '', '', '', '', '');
