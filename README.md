# Users Table - SQL Statement

This SQL statement creates a `users` table with the following columns:
- `id` (Primary Key, Auto-Increment)
- `email` (Unique, Not Null)
- `password` (Hashed Password Storage)
- `created_at` (Timestamp of Registration)

## SQL Statement:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```