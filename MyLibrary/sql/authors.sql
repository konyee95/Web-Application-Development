CREATE TABLE `authors` (
  `author_index` int(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Author Index',
  `author_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE KEY COMMENT 'Author Id',
  `author_name` varchar(200) NOT NULL COMMENT 'Author name',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Author table';