# Database Tables
1. users tbl
   - id, email, password, last_logged_in
2. users_profile
   - id, user_id, first_name, last_name, address, primary_phone_number, secondary_phone_number, image
3. books tbl
   - id, owner_id, title, summary, image, isbn10, isbn13, book_status_id
4. books_requests
   - id, user_id, owner_id, book_id, book_request_status_id
5. books_wish_list
   - id, user_id, book_id
6. book_statuses
   - id, name
7. book_request_statuses
    - id, name
8. swapped_books
   - id, lender_id, borrower_id, book_id, received_date, return_date
