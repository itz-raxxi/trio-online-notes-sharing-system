

---

```markdown
# 📚 Trio - Online Notes Sharing System

**Trio** is a PHP & MySQL-based web platform that enables students and teachers to share, manage, and rate academic notes. The system supports document uploads, previews, categorization, and administrative approvals, making knowledge-sharing simple and efficient.

---

## 🚀 Features

- 👩‍🏫 Separate signups for **Teachers** and **Students**
- 📤 Upload notes in **PDF** or **DOC** format
- 📝 Add descriptions and categories when uploading
- ✅ Teacher **approval** system for student uploads
- ⭐ Users can **rate** notes with a star rating system
- 📂 **Dashboard** with preview of uploaded files
- 🔍 Search notes by title or category
- 📌 **Bookmark** notes for future reference
- 🏷️ Tag system for improved discoverability
- 📄 PDF preview before download
- 🧑 Admin panel to manage users and uploads

---

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, Bootstrap, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Libraries**: GUMP (for input sanitization)

---

## 📁 Folder Structure

```

/trio-online-notes-sharing-system
│
├── assets/                 # CSS, JS, and images
├── includes/               # Reusable PHP includes (header, footer, DB config)
├── uploads/                # Uploaded notes (PDF/DOC)
├── student/                # Student dashboard and pages
├── teacher/                # Teacher dashboard and pages
├── admin/                  # Admin panel
├── signup.php              # Signup page
├── login.php               # Login page
├── index.php               # Landing page
└── ...                     # Other utility and core files

````

---

## ⚙️ Installation & Setup

1. **Clone the repository**

   ```bash
   git clone https://github.com/itz-raxxi/trio-online-notes-sharing-system.git
   cd trio-online-notes-sharing-system
````

2. **Create MySQL Database**

   * Import the `trio.sql` file into your MySQL server.

3. **Configure Database Connection**

   * Edit `includes/config.php` with your DB credentials:

     ```php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'trio');
     ```

4. **Run the Application**

   * Start Apache and MySQL using XAMPP or similar.
   * Navigate to `http://localhost/trio-online-notes-sharing-system` in your browser.

---


## ✨ Future Enhancements

* Email notifications for approvals/feedback
* Comment system under notes
* Download count tracking
* Advanced filtering and sorting
* Admin analytics dashboard

---

## 🤝 Contributing

Contributions are welcome! Feel free to fork the repo and submit pull requests.

---

## 🧑‍💻 Author

**Rakshith S.**


* 📧 [rakshith@example.com](mailto:rakshithsnaravi0143@gmail.com) *(replace with your real email if you wish)*

---

## 📜 License

This project is open source and available under the [MIT License](LICENSE).

```

---

Let me know if you'd like me to:
- Add screenshots
- Customize it with your LinkedIn or email
- Write a shorter version for a student portfolio  
I can also help you write a proper `LICENSE` file or contribution guide.
```
