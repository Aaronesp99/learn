/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : oficina

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 24/08/2019 17:57:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for practicantes
-- ----------------------------
DROP TABLE IF EXISTS `practicantes`;
CREATE TABLE `practicantes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `apePaterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `apeMaterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `celular` int(9) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of practicantes
-- ----------------------------
INSERT INTO `practicantes` VALUES (1, '70521117', 'Espinoza', 'Ilizarbe', 'Aaron', 936060107);
INSERT INTO `practicantes` VALUES (2, '12345678', 'Saavedra', 'Palao', 'David', 989789789);
INSERT INTO `practicantes` VALUES (3, '76548794', 'Estrada', 'Huaman', 'Luis', 945678945);
INSERT INTO `practicantes` VALUES (4, '73214564', 'Salazar', 'Otero', 'Bherkinn', 987654321);
INSERT INTO `practicantes` VALUES (5, '98765412', 'Aliaga', 'Clausen', 'Omar', 948756541);

-- ----------------------------
-- Procedure structure for sp_agregar_practicante
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_agregar_practicante`;
delimiter ;;
CREATE PROCEDURE `sp_agregar_practicante`(_dni char(8), _nombres varchar(100), _paterno varchar(100), _materno varchar(100), _celular int)
BEGIN
	INSERT INTO practicantes(dni, apePaterno, apeMaterno, nombres, celular) VALUES(_dni, _paterno, _materno, _nombres, _celular); 
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for sp_lista_practicantes
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_lista_practicantes`;
delimiter ;;
CREATE PROCEDURE `sp_lista_practicantes`()
BEGIN
	SELECT * FROM practicantes;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
