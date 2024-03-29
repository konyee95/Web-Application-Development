CREATE TABLE `staffs`(
    `staff_index` int(5) UNSIGNED NOT NULL COMMENT 'Staff Index',
    `staff_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Staff Id',
    `staff_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Staff Name',
    `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Staff password',
    `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time registered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Staff table';

TRUNCATE TABLE `staffs`;

ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_index`),
  ADD UNIQUE KEY `staff_id`(`staff_id`);

ALTER TABLE `staffs`
  MODIFY `staff_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Staff Index';


-- add admin
INSERT INTO staffs (staff_id, staff_name, password) VALUES ('admin001', 'Sarah Southwood', '1234567890')