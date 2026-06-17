# 🎉 Events2k28 - Event Management System

A complete **Event Management System** built using **PHP and MySQL**, designed to manage events, user registrations, and event-related operations efficiently.

---

## 📌 Features

- 🔐 User Registration & Login System  
- 📅 Event Listing & Management  
- 📝 Event Registration  
- 📂 Organized File Structure  
- 💾 MySQL Database Integration  
- 🎨 Responsive UI with CSS  

---
## 📁 Project Structure

```text
events2k28/
│
├── backend/                # Backend PHP logic
├── css/                    # Stylesheets
├── cssjs/                  # Combined CSS/JS resources
├── database/               # Database SQL file (.mysql)
├── db/                     # Database connection files
├── fonts/                  # Font assets
├── images/                 # Image assets
├── includes/               # Reusable PHP components
├── js/                     # JavaScript files
├── scss/                   # SCSS files
│
├── index.php               # Homepage
├── about.php               # About page
├── register.php            # User registration
├── register_success.php    # Registration success page
├── README.md               # Project documentation
└── LICENSE                 # License file
```
---

## ⚙️ Requirements

Make sure you have the following installed:

- ✅ XAMPP (Apache + MySQL)
- ✅ PHP (comes with XAMPP)
- ✅ Web Browser (Chrome/Brave/etc.)

---

## 🚀 How to Run the Project (Using XAMPP)

### Step 1: Install XAMPP
Download and install XAMPP from:
👉 https://www.apachefriends.org/

---

### Step 2: Move Project to htdocs

Copy your project folder (`events2k28`) to:
C:\xampp\htdocs\


---

### Step 3: Start Server

1. Open **XAMPP Control Panel**
2. Start:
   - ✅ Apache
   - ✅ MySQL

---

### Step 4: Create Database

1. Open browser and go to:
http://localhost/phpmyadmin
2. Click **New**
3. Create database with name:
eventmgmt

---

### Step 5: Import Database

1. Select the `eventmgmt` database  
2. Click **Import**  
3. Choose the SQL file from:
events2k28/database/

4. Import the `.mysql` file  

---

### Step 6: Run the Project

Open browser and go to:
http://localhost/events2k28/


---

## 🔧 Configuration (If Needed)

If database connection issues occur:

1. Go to:db/

2. Check database credentials (usually in a config file)

Example:
```php
$host = "localhost";
$user = "root";
$password = "";
$database = "eventmgmt";
```
---

🧠 Key Concepts Used
PHP (Server-side scripting)
MySQL (Database)
HTML/CSS (Frontend)
JavaScript (Client-side functionality)

---

📸 Screenshots



---

🤝 Contributing

Contributions are welcome!
Feel free to fork this repo and submit a pull request.

---

📄 License

This project is licensed under the MIT License.

---

👨‍💻 Author

Rishabh Singh Yadav

---

⭐ Support

If you like this project:

Give it a ⭐ on GitHub
Share it with others
