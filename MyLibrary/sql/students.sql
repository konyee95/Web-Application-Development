DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `student_index` int(5) UNSIGNED NOT NULL COMMENT 'Student Id Index',
  `student_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student Id',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Student password',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The time and date the student registered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Student table';

--
-- Truncate table before insert `students`
--

TRUNCATE TABLE `students`;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_index`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Student Index';