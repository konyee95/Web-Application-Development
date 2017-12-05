CREATE TABLE `my_library`.`reserve` ( 
  `reserve_index` INT(5) NOT NULL AUTO_INCREMENT COMMENT 'Reserve index' ,  
  `book_id` VARCHAR(100) NOT NULL COMMENT 'Book ID' ,  
  `student_id_fk` VARCHAR(100) NOT NULL COMMENT 'Student ID FK' ,  
  `reg_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Register Time' ,    
  PRIMARY KEY  (`reserve_index`),    INDEX  `student_id_fk` (`student_id_fk`(100))
) ENGINE = InnoDB COMMENT = 'Reservation table';