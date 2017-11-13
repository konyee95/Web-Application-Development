CREATE TABLE `books`(
    `book_index` int(5) UNSIGNED NOT NULL COMMENT 'Book Index',
    `book_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Book Id',
    `title` varchar(1000)  NOT NULL COMMENT 'Book Title',
    `author` varchar(1000)  NULL COMMENT 'Author',
    `description` varchar(1000)  NULL COMMENT 'Description',
    `availability` boolean NOT NULL DEFAULT 1 COMMENT 'Book availability',
    `image_url` varchar(200) NULL COMMENT 'Image url',
    `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time added'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Book table';

TRUNCATE TABLE `books`;

ALTER TABLE `books`
  ADD PRIMARY KEY (`book_index`),
  ADD UNIQUE KEY (`book_id`);

ALTER TABLE `books`
  MODIFY `book_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Book Index';