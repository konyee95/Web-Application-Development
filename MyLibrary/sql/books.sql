CREATE TABLE 'books'(
    'book_id' varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Book Id',
    'title' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Book Title',
    'author' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Author',
    'description' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Description',
    'availability' varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Availability',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Book table';

TRUNCATE TABLE `books`;

ALTER TABLE `books`
  ADD PRIMARY KEY (`book_index`);