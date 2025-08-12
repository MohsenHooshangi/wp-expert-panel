# Expert User Panel – Advanced OOP MVC WordPress Plugin

A custom **advanced user panel plugin** for WordPress built using **Object-Oriented Programming (OOP)** and **MVC architecture**.  
This plugin provides a fully customized and feature-rich **user profile & dashboard** experience, beyond the default WordPress user system.

---

## 🔧 Project Overview

- 👨‍💻 **Role:** Full plugin development (PHP OOP + MVC + CSS + JS)
- 📅 **Status:** Completed
- 🌐 **Test Environment:** [Localhost Development – mh-develop.local](http://mh-develop.local)

---

## 🧰 Technologies Used

- **PHP (OOP + MVC)** – Core architecture, controllers, models, and views.
- **CSS** – Styling for frontend dashboard and profile.
- **JavaScript (AJAX)** – Dynamic user interactions without reload.
- **jQuery & Plugins** – UI/UX enhancements (sliders, date pickers, counters, drag-and-drop uploads).
- **Bootstrap** – Responsive layout.

---

## 🧠 Features

- Fully customized **user profile** page.
- Advanced **dashboard** for user account management.
- MVC architecture for better code maintainability.
- AJAX-powered actions for smooth experience.
- Profile sections for courses, personal data, and activity.
- Date range pickers with Persian calendar support.
- Responsive and mobile-friendly.


---

## 📄 File Details

### **`core.php`**
- Initializes the plugin.
- Loads autoloader and router.
- Registers necessary hooks.

### **`class/`**
- `View.php` – Handles rendering of MVC views.
- `Handler.php` – Utility class for plugin processes.
- `autoload.php` – Autoloader for MVC classes.

### **`panel/`**
- Controllers for profile, panel, course management, and routing.

### **`view/`**
- MVC views for profile and panel display.

### **`assets/js/custom.js`**
- Handles interactive elements like date pickers, counters, AJAX forms.

---

## 📸 Screenshots

| Screenshot | Description |
|------------|-------------|
| `User-Panel.JPG` | Advanced custom user panel UI |

---

## 🗂️ Installation

1. Upload the `wp-expert-panel` folder to `wp-content/plugins/` directory.
2. Activate the plugin from **WordPress Dashboard > Plugins**.
3. Access the panel through a dedicated shortcode or page template.

---

## 📌 Notes

- Fully OOP and MVC for scalability.
- Persian date support via `moment-jalaali.js` and `daterangepicker-fa-ex.js`.
- Compatible with PHP 8.x and WordPress 6.x.

---

## 📬 Contact

📧 Email: mr.hooshangi.official@gmail.com  
🌐 Website: [mohsenhooshangi.ir](https://www.mohsenhooshangi.ir)  
📱 GitHub: [MohsenHooshangi](https://github.com/MohsenHooshangi)
