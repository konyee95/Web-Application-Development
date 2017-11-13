CREATE TABLE 'publishers'(
    'publisher_id' varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Book Id',
    'name' varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Publisher Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Publisher table';

TRUNCATE TABLE `publishers`;

ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`),
  ADD UNIQUE KEY 'publisher_id'('publisher_id'); 