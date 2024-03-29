<?php defined('MAPLE') || exit('此檔案不允許讀取！');

return [
  'up' => "INSERT INTO `AreaSub` (`id`, `areaMainId`, `name`, `sort`, `updateAt`, `createAt`)
    VALUES
      (1, 1, '大安區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (2, 1, '士林區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (3, 1, '內湖區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (4, 1, '文山區', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (5, 1, '北投區', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (6, 1, '中山區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (7, 1, '信義區', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (8, 1, '松山區', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (9, 1, '萬華區', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (10, 1, '中正區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (11, 1, '大同區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (12, 1, '南港區', 12, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (13, 2, '板橋區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (14, 2, '新莊區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (15, 2, '中和區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (16, 2, '三重區', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (17, 2, '新店區', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (18, 2, '土城區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (19, 2, '永和區', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (20, 2, '蘆洲區', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (21, 2, '汐止區', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (22, 2, '樹林區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (23, 2, '淡水區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (24, 2, '三峽區', 12, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (25, 2, '林口區', 13, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (26, 2, '鶯歌區', 14, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (27, 2, '五股區', 15, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (28, 2, '泰山區', 16, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (29, 3, '北屯區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (30, 3, '西屯區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (31, 3, '大里區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (32, 3, '太平區', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (33, 3, '南屯區', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (34, 3, '豐原區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (35, 3, '北區(台中市)', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (36, 3, '南區(台中市)', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (37, 3, '西區(台中市)', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (38, 3, '潭子區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (39, 3, '大雅區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (40, 3, '沙鹿區', 12, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (41, 3, '清水區', 13, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (42, 3, '大甲區', 14, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (43, 3, '龍井區', 15, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (44, 3, '東區(台中市)', 16, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (45, 3, '烏日區', 17, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (46, 4, '鳳山區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (47, 4, '三民區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (48, 4, '左營區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (49, 4, '前鎮區', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (50, 4, '楠梓區', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (51, 4, '苓雅區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (52, 4, '小港區', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (53, 4, '鼓山區', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (54, 4, '大寮區', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (55, 4, '岡山區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (56, 4, '仁武區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (57, 4, '林園區', 12, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (58, 5, '永康區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (59, 5, '安南區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (60, 5, '東區(台南市)', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (61, 5, '北區(台南市)', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (62, 5, '南區(台南市)', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (63, 5, '新營區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (64, 5, '中西區', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (65, 5, '仁德區', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (66, 5, '歸仁區', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (67, 5, '安平區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (68, 5, '佳里區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (69, 6, '桃園區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (70, 6, '中壢區', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (71, 6, '平鎮區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (72, 6, '八德區', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (73, 6, '楊梅區', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (74, 6, '蘆竹區', 6, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (75, 6, '龜山區', 7, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (76, 6, '龍潭區', 8, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (77, 6, '大溪區', 9, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (78, 6, '大園區', 10, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (79, 6, '觀音區', 11, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (80, 7, '東區(新竹市)', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (81, 7, '北區(新竹市)', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (82, 7, '香山區', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (83, 8, '宜蘭市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (84, 8, '羅東鎮  ', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (85, 9, '彰化市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (86, 9, '員林市', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (87, 9, '和美鎮', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (88, 9, '鹿港鎮', 4, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (89, 9, '溪湖鎮', 5, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (90, 10, '屏東市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (91, 10, '內埔鄉', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (92, 11, '竹北市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (93, 11, '竹東鎮', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (94, 11, '湖口鄉', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (95, 12, '頭份市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (96, 12, '苗栗市', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (97, 12, '竹南鎮', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (98, 13, '南投市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (99, 13, '草屯鎮', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (100, 13, '埔里鎮', 3, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (101, 14, '花蓮市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (102, 14, '吉安鄉', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (103, 15, '安樂區', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (104, 16, '斗六市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (105, 16, '虎尾鎮', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (106, 17, '西區(嘉義市)', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (107, 17, '東區(嘉義市)', 2, '2018-12-03 21:08:33', '2018-12-03 21:08:33'),
      (108, 18, '臺東市', 1, '2018-12-03 21:08:33', '2018-12-03 21:08:33');",

  'down' => "TRUNCATE TABLE `AreaSub`",

  'at' => "2018-12-03 21:04:08"
];
