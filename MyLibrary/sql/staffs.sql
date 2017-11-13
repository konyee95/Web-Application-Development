CREATE TABLE 'staff'(
    'staff_index' int(7) UNSIGNED NOT NULL COMMENT 'Book Record Index',
    'staff_id' varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Book Id',
    'password' varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Student password',
    'name' varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Staff table';

TRUNCATE TABLE `staff`;

ALTER TABLE `book_records`
  ADD PRIMARY KEY (`staff_index`),
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY 'staff_id'('staff_id');