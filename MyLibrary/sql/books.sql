-- CREATE TABLE `books`(
--     `book_index` int(5) UNSIGNED NOT NULL COMMENT 'Book Index',
--     `book_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Book Id',
--     `title` varchar(200)  NOT NULL COMMENT 'Book Title',
--     `author` varchar(100)  NULL COMMENT 'Author',
--     `description` varchar(1000)  NULL COMMENT 'Description',
--     `availability` boolean NOT NULL DEFAULT 1 COMMENT 'Book availability',
--     `image_url` varchar(200) NULL COMMENT 'Image url',
--     `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time added'
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Book table';

-- TRUNCATE TABLE `books`;

-- ALTER TABLE `books`
--   ADD PRIMARY KEY (`book_index`),
--   ADD UNIQUE KEY (`book_id`);

-- ALTER TABLE `books`
--   MODIFY `book_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Book Index';

CREATE TABLE `my_library`.`books` (
  `book_index` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Book Index' ,  
  `book_id` VARCHAR(100) NOT NULL COMMENT 'Book ID' ,  
  `title` VARCHAR(200) NOT NULL COMMENT 'Title' ,  
  `author` VARCHAR(100) NOT NULL COMMENT 'Author' ,  
  `description` VARCHAR(500) NOT NULL COMMENT 'Description' ,  
  `availability` BOOLEAN NOT NULL COMMENT 'Availability' ,  
  `image_url` VARCHAR(200) NOT NULL COMMENT 'Image url' ,  
  `no_of_times` INT(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'No of times borrows' ,  
  `reg_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Registered time' ,    
  PRIMARY KEY  (`book_index`),    UNIQUE  (`book_id`)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT = 'Book Table';

-- Example Insert Query
INSERT INTO `books` VALUES (NULL, 'book001', 'Introduction to Machine Learning', 'Rex Low', 'A book for dummies', 1, 'www.google.com', '0', CURRENT_TIMESTAMP);