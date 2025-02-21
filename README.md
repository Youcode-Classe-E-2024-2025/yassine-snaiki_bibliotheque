# Library Management System

A modern web application for managing a library's book collection, built with Laravel and Tailwind CSS. The system allows users to browse books, borrow them, and administrators to manage the collection.

## Features

### User Features
- **Book Browsing**: Browse through the library's collection with a modern, responsive grid layout
- **Book Details**: View detailed information about each book including title, author, and description
- **Book Borrowing**: Registered users can borrow available books
- **Borrowed Books**: Users can track their borrowed books
- **Authentication**: Secure user registration and login system

### Admin Features
- **Dashboard**: Administrative interface for managing books
- **Book Management**: 
  - Add new books with title, author, description, and cover image
  - Delete existing books with confirmation
  - Track book status (available/borrowed)
- **Visual Status**: Books that are borrowed are visually marked as "Reserved"



#### Books Table
```sql
- id (UUID, primary key)
- title (string, unique)
- description (text, nullable)
- author (string)
- image (string, with default)
- user_id (UUID, foreign key to users, nullable)
- timestamps
```

### Routes

#### Public Routes
- `GET /` - Home page with book listing
- `GET /books` - Book catalog
- `GET /books/{id}` - Individual book details
- `GET /login` - Login page
- `GET /register` - Registration page

#### Authenticated Routes
- `POST /borrow` - Borrow a book
- `GET /borrowed` - View borrowed books
- `GET /logout` - Logout

#### Admin Routes
- `GET /dashboard` - Admin dashboard
- `POST /books/create` - Create new book
- `GET /books/delete/{id}` - Delete book with confirmation

### Technologies Used
- **Backend**: Laravel (PHP)
- **Frontend**: 
  - Blade templating
  - Tailwind CSS for styling
  - JavaScript for interactive features
- **Database**: MySQL/PostgreSQL with UUID support
- **Authentication**: Laravel's built-in authentication system

### Book Display
- Responsive grid layout (2-5 columns based on screen size)
- Book cards with:
  - Cover image
  - Title and author
  - Visual indication for reserved books (reduced opacity and badge)
  - Interactive hover effects

### Modals
- Add Book form with validation
- Delete confirmation dialog

## Getting Started

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Configure your environment:
   - Copy `.env.example` to `.env`
   - Configure your database settings
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```

## Security Features
- CSRF protection on all forms
- UUID for book and user IDs
- Soft deletion for borrowed books
- Proper foreign key constraints

## Contributing
Feel free to submit issues and enhancement requests.

## License
This project is licensed under the MIT License - see the LICENSE file for details.
