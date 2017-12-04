-- books api
-- https://www.googleapis.com/books/v1/volumes?q={harry%20potter}

-- list all available category
SELECT DISTINCT category FROM books;

-- list all publisher name
SELECT publisher_name FROM publishers

-- select book title based on publisher id
SELECT b.title FROM books b INNER JOIN publishers p ON b.publisher_iD = p.publisher_id WHERE b.publisher_iD = 'pub002'

-- select book from highest rating
SELECT * FROM books ORDER BY rating desc

-- randomly select books with limit
SELECT book_id, title, image_url FROM books ORDER BY RAND() LIMIT 7

-- select all books that is favor by one user
SELECT * FROM books AS b JOIN favourite AS f ON f.student_id_fk='b031510127' WHERE b.book_id=f.book_id

-- delete a favourite book
DELETE FROM favourite WHERE student_id_fk='b031510363' AND book_id='book002' LIMIT 1