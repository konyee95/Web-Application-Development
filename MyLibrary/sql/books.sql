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
  `description` VARCHAR(2000) NOT NULL COMMENT 'Description' ,  
  `availability` BOOLEAN NOT NULL DEFAULT TRUE COMMENT 'Availability' ,
  `category` VARCHAR(20) NOT NULL COMMENT 'Book Category' ,  
  `rating` DECIMAL(2, 1) NOT NULL COMMENT 'Book Rating' ,
  `image_url` VARCHAR(200) NOT NULL COMMENT 'Image url' ,  
  `publisher_iD` VARCHAR(100) NOT NULL COMMENT 'Publisher ID' ,
  `published_year` INT(4) NOT NULL COMMENT 'Published Year' ,
  `online_reading_url` VARCHAR(200) NULL COMMENT 'Online reading url' ,
  `physical_location` VARCHAR(10) NOT NULL COMMENT 'Floor Rack Row' ,
  `no_of_times` INT(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'No of times borrows' ,  
  `reg_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Registered time' ,    
  PRIMARY KEY  (`book_index`),    UNIQUE  (`book_id`)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT = 'Book Table';

-- Example Insert Query

INSERT INTO `books` (`book_index`, `book_id`, `title`, `author`, `description`, `availability`, `category`, `rating`, `image_url`, `publisher_iD`, `published_year`, `online_reading_url`, `physical_location`, `no_of_times`, `reg_time`) VALUES (NULL, 'book001', 'The Ivory Tower and Harry Potter', 'Lana A. Whited', 'Now available in paper, The Ivory Tower and Harry Potter is the first book-length analysis of J. K. Rowling\'s work from a broad range of perspectives within literature, folklore, psychology, sociology, and popular culture. A significant portion of the book explores the Harry Potter series\' literary ancestors, including magic and fantasy works by Ursula K. LeGuin, Monica Furlong, Jill Murphy, and others, as well as previous works about the British boarding school experience. Other chapters explore the moral and ethical dimensions of Harry\'s world, including objections to the series raised within some religious circles. In her new epilogue, Lana A. Whited brings this volume up to date by covering Rowling\'s latest book, Harry Potter and the Order of the Phoenix.', '1', 'Literary', '4.5', 'http://books.google.com/books/content?id=iO5pApw2JycC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 'pub001', '2004', 'http://play.google.com/books/reader?id=iO5pApw2JycC&hl=&printsec=frontcover&source=gbs_api', '1 10 1', '0', CURRENT_TIMESTAMP);
INSERT INTO `books` (`book_index`, `book_id`, `title`, `author`, `description`, `availability`, `category`, `rating`, `image_url`, `publisher_iD`, `published_year`, `online_reading_url`, `physical_location`, `no_of_times`, `reg_time`) VALUES (NULL, 'book002', 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'Turning the envelope over, his hand trembling, Harry saw a purple wax seal bearing a coat of arms; a lion, an eagle, a badger and a snake surrounding a large letter \'H\'.\\\" Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry\'s eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin! Pottermore has now launched the Wizarding World Book Club. Visit Pottermore to sign up and join weekly Twitter discussions at WW Book Club.', '1', 'Fiction', '4.5', 'http://books.google.com/books/content?id=39iYWTb6n6cC&printsec=frontcover&img=1&zoom=1&source=gbs_api', 'pub002', '2015', 'http://play.google.com/books/reader?id=39iYWTb6n6cC&hl=&printsec=frontcover&source=gbs_api', '1 10 2', '0', CURRENT_TIMESTAMP);
INSERT INTO `books` (`book_index`, `book_id`, `title`, `author`, `description`, `availability`, `category`, `rating`, `image_url`, `publisher_iD`, `published_year`, `online_reading_url`, `physical_location`, `no_of_times`, `reg_time`) VALUES (NULL, 'book003', 'Deep Learning', 'Ian Goodfellow', 'An introduction to a broad range of topics in deep learning, covering mathematical and conceptual background, deep learning techniques used in industry, and research perspectives.', '1', 'Computers', '3.0', 'http://books.google.com/books/content?id=Np9SDQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api2', 'pub003', '2016', 'http://play.google.com/books/reader?id=Np9SDQAAQBAJ&hl=&printsec=frontcover&source=gbs_api', '2 5 1', '0', CURRENT_TIMESTAMP);
INSERT INTO `books` (`book_index`, `book_id`, `title`, `author`, `description`, `availability`, `category`, `rating`, `image_url`, `publisher_iD`, `published_year`, `online_reading_url`, `physical_location`, `no_of_times`, `reg_time`) VALUES (NULL, 'book004', 'Fundamentals of Deep Learning', 'Nikhil Buduma', 'With the reinvigoration of neural networks in the 2000s, deep learning has become an extremely active area of research, one that’s paving the way for modern machine learning. In this practical book, author Nikhil Buduma provides examples and clear explanations to guide you through major concepts of this complicated field. Companies such as Google, Microsoft, and Facebook are actively growing in-house deep-learning teams. For the rest of us, however, deep learning is still a pretty complex and difficult subject to grasp. If you’re familiar with Python, and have a background in calculus, along with a basic understanding of machine learning, this book will get you started. Examine the foundations of machine learning and neural networks Learn how to train feed-forward neural networks Use TensorFlow to implement your first neural network Manage problems that arise as you begin to make networks deeper Build neural networks that analyze complex images Perform effective dimensionality reduction using autoencoders Dive deep into sequence analysis to examine language Learn the fundamentals of reinforcement learning', '1', 'Computers', '5.0', 'http://books.google.com/books/content?id=n0IlDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 'pub004', '2017', 'http://play.google.com/books/reader?id=n0IlDwAAQBAJ&hl=&printsec=frontcover&source=gbs_api', '2 5 2', '0', CURRENT_TIMESTAMP);
