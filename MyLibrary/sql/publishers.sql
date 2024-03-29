CREATE TABLE `publishers`(
    `publisher_index` int(5) UNSIGNED NOT NULL COMMENT 'Publisher Index',
    `publisher_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Publisher Id',
    `publisher_name` varchar(200) NOT NULL COMMENT 'Publisher Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Publisher table';

TRUNCATE TABLE `publishers`;

ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_index`),
  ADD UNIQUE KEY `publisher_id` (`publisher_id`); 

ALTER TABLE `publishers`
  MODIFY `publisher_index` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Publisher Index';

-- Example Query
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub001', 'University of Missouri Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub002', 'Pottermore');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub003', 'MIT Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub004', 'O Reilly Media, Inc');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub005', 'Dearborn Trade Publishing');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub006', 'Cengage Learning');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub007', 'Abrams');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub008', 'Simon and Schuster');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub009', 'Artech House');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub010', 'Newnes');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub011', 'Heinemann');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub012', 'Cornell University Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub013', 'Lexington Books');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub014', 'I. K. International Pvt Ltd');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub015', 'Oxford University Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub017', 'Addison-Wesley Professional');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub018', 'Psychology Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub019', 'Juta and Company Ltd');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub020', 'Morgan Kaufmann');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub022', 'Hachette UK');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub023', 'Libraries Unlimited');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub024', 'Univ of California Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub025', 'Arthur A. Levine Books');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub026', 'Rudolf Steiner Press');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub027', 'Baker Academic');
INSERT INTO `publishers` (`publisher_index`, `publisher_id`, `publisher_name`) VALUES (NULL, 'pub028', 'University of Michigan Press');