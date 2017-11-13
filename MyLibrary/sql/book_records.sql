CREATE TABLE 'book_records'(
    'book_index' int(7) UNSIGNED NOT NULL COMMENT 'Book Record Index',
    'book_id' varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Book Id',
    'student_id' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student Id',
    'due_date' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Due Date',
    'return_date' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Return Date',
    'issue' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Issue',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Book Record table';

TRUNCATE TABLE `book_records`;

ALTER TABLE `book_records`
  ADD PRIMARY KEY (`book_index`),
  ADD PRIMARY KEY (`student_index`),
  ADD UNIQUE KEY 'book_id'('book_id');

ALTER TABLE `students`
  MODIFY `book_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Book Index';