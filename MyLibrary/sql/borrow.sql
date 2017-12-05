CREATE TABLE `my_library`.`borrow` (
  `borrow_index` INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Borrow Index',
  `student_id` VARCHAR(100) NOT NULL COMMENT 'Student ID',
  `book_id`  VARCHAR(100) NOT NULL COMMENT 'Book ID',
  `reg_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Borrow Time', 
  FOREIGN KEY (student_id) REFERENCES students(student_id),
  FOREIGN KEY (book_id) REFERENCES books(book_id)
)

-- Example Insert Query
INSERT INTO `borrow` (`borrow_index`, `student_id`, `book_id`, `reg_time`) VALUES (NULL, 'b031510127', 'book001', CURRENT_TIMESTAMP);

-- Example Book Query