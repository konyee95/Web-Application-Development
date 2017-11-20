CREATE TABLE `publishers`(
    `publisher_index` int(5) UNSIGNED NOT NULL COMMENT 'Publisher Index',
    `publisher_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Publisher Id',
    `publisher_name` varchar(200) NOT NULL COMMENT 'Publisher Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Publisher table';

TRUNCATE TABLE `publishers`;

ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_index`),
  ADD UNIQUE KEY `publisher_id` (`publisher_id`); 

ALTER TABLE `publishers`
  MODIFY `publisher_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Publisher Index';