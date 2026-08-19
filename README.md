# MUTACORE
web design and graphic company
# Mutacore Visuals

> **Creative Design. Digital Experiences. Powerful Brands.**

Mutacore Visuals is a creative design and digital solutions website built to showcase professional graphic design, branding, social media design, web design, website development, and website maintenance services.

The project combines a modern visual identity with a responsive website experience designed for businesses, organizations, professionals, and individuals.

---

## 📌 About the Project

The Mutacore Visuals website was created to provide an online presence for the company and allow potential clients to:

* Learn about Mutacore Visuals
* Explore available services
* View the company's portfolio
* Request graphic and web design services
* Submit project inquiries
* Contact the company directly
* Request website development
* Request website maintenance

The website also includes a contact form connected to a MySQL database through PHP.

---

## 🎨 Services

Mutacore Visuals provides the following services:

### Graphic Design

* Logo Design
* Poster Design
* Flyer Design
* Business Card Design
* Brochure Design
* Marketing Materials

### Branding

* Brand Identity
* Logo Systems
* Brand Guidelines
* Visual Identity
* Business Branding

### Social Media Design

* Social Media Posts
* Instagram Designs
* Facebook Designs
* Promotional Graphics
* Social Media Campaign Designs

### Web Design

* Website UI Design
* Responsive Web Design
* Landing Pages
* Business Websites
* Portfolio Websites

### Website Development

* HTML Websites
* CSS Styling
* Responsive Websites
* PHP Integration
* Database Integration

### Website Maintenance

* Website Updates
* Content Updates
* Bug Fixes
* Performance Improvements
* Security Improvements
* General Website Support

---

## 🖥️ Website Pages

The project currently contains the following main pages:

```text
Home
About Us
Portfolio
Social Media
Web Design
Web Maintenance
Contact Us
```

---

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* Responsive Design
* CSS Animations
* Google Fonts

### Backend

* PHP
* MySQL
* PDO

### Development Environment

* XAMPP
* Apache
* MySQL
* phpMyAdmin

### Version Control

* Git
* GitHub

---

## 📂 Project Structure

```text
Mutacore-Visuals/
│
├── index.html
├── aboutus.html
├── portfolio.html
├── socialmedia.html
├── webdesign.html
├── webmaintenance.html
├── contactus.html
│
├── add.php
│
├── images/
│   ├── logo/
│   ├── portfolio/
│   ├── branding/
│   └── socialmedia/
│
├── css/
│   └── style.css
│
└── README.md
```

> The project structure can be expanded as additional PHP files, JavaScript files, stylesheets, and database functionality are added.

---

# 🗄️ Database

The contact form uses a MySQL database called:

```text
mutacore_visuals
```

The main table is:

```text
contact_messages
```

### Database Fields

| Field        | Type         | Description           |
| ------------ | ------------ | --------------------- |
| `id`         | INT          | Unique message ID     |
| `full_name`  | VARCHAR(100) | Client's full name    |
| `email`      | VARCHAR(255) | Client's email        |
| `phone`      | VARCHAR(30)  | Client's phone number |
| `service`    | VARCHAR(100) | Requested service     |
| `budget`     | VARCHAR(100) | Estimated budget      |
| `message`    | TEXT         | Project description   |
| `created_at` | TIMESTAMP    | Submission date       |
| `updated_at` | TIMESTAMP    | Last update           |

---

# 🚀 Running the Project Locally

## 1. Install XAMPP

Install XAMPP on your computer.

Start:

```text
Apache
MySQL
```

---

## 2. Place the Project in XAMPP

Copy the project into:

```text
C:\xampp\htdocs\
```

Your final location should look like:

```text
C:\xampp\htdocs\Mutacore-Visuals\
```

---

## 3. Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Go to the **SQL** section and create the database:

```sql
CREATE DATABASE mutacore_visuals
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

Then select the database and create the `contact_messages` table.

---

## 4. Configure PHP

The current local XAMPP database configuration uses:

```php
$host = "localhost";
$dbname = "mutacore_visuals";
$username = "root";
$password = "";
```

For a local XAMPP installation, the MySQL `root` account commonly has no password by default.

For a production website, use a dedicated database user with a strong password instead of relying on the local XAMPP configuration.

---

## 5. Run the Website

Open:

```text
http://localhost/Mutacore-Visuals/
```

The contact page can be accessed through:

```text
http://localhost/Mutacore-Visuals/contactus.html
```

---

# 📩 Contact Form

The Contact Us page contains a project inquiry form.

Clients can provide:

* Full Name
* Email Address
* Phone Number
* Service Needed
* Estimated Budget
* Project Description

The form sends the information to:

```text
add.php
```

The PHP script validates the submitted information and securely inserts it into the MySQL database.

After successful submission, the user receives a confirmation message:

```text
Message Sent Successfully!
```

---

# 🔐 Security

Security is an important part of the project.

The PHP contact form uses:

* PDO
* Prepared SQL statements
* Input validation
* Email validation
* Phone validation
* Service whitelisting
* Budget whitelisting
* Input length restrictions
* UTF-8 character support
* Server-side validation
* Restricted HTTP request method

Prepared statements help protect the application from SQL injection attacks.

### Future security improvements

The following improvements can be added as the project grows:

* CSRF protection
* Rate limiting
* CAPTCHA
* Secure session handling
* Authentication for administrators
* Secure database credentials
* HTTPS
* Security headers
* Server-side logging
* Input sanitization for displayed database content

---

# 🎨 Brand Identity

Mutacore Visuals uses a distinctive green, gold, and cream color palette.

### Primary Colors

```text
Gold:        #FFBF00
Cream:       #FFF78D
Green:       #467235
Dark Green:  #283F24
White:       #FFFFFF
Light:       #F6F7F2
Gray:        #687067
```

The color palette is used consistently throughout the website to create a recognizable visual identity.

---

# 📱 Responsive Design

The website is designed to work across:

* Desktop computers
* Laptops
* Tablets
* Mobile phones

CSS media queries are used to adapt layouts to smaller screen sizes.

---

# ✨ Features

Current features include:

* Responsive navigation
* Fixed navigation bar
* Hero sections
* Service sections
* Portfolio sections
* Contact form
* MySQL database integration
* PHP backend
* FAQ section
* Call-to-action sections
* WhatsApp contact button
* Social media links
* CSS animations
* Reduced-motion accessibility support
* SEO metadata
* Open Graph metadata
* Structured data

---

# 📈 Future Development

Future versions of Mutacore Visuals may include:

* JavaScript interactions
* Mobile hamburger navigation
* Client dashboard
* Admin dashboard
* Contact message management
* View, edit, and delete functionality
* Client accounts
* Online quotations
* Project tracking
* Email notifications
* Automated client responses
* Blog section
* Online booking
* Payment integration
* Advanced portfolio filtering
* Dark mode
* Website analytics

---

# 👨‍💻 Development

Mutacore Visuals is being developed as a creative design and web development project with the goal of combining strong visual design with functional digital solutions.

The project is continuously being improved as new features and technologies are introduced.

---

# 📄 License

Copyright © 2026 Mutacore Visuals.

All rights reserved.

The designs, branding, graphics, images, content, and source code contained within this project should not be reproduced, redistributed, or commercially reused without permission.

---

# 📞 Contact

**Mutacore Visuals**

Creative Design & Digital Solutions

Services:

```text
Graphic Design
Branding
Social Media Design
Web Design
Website Development
Website Maintenance
```

Location:

```text
Kenya
```

Website:

```text
https://www.mutacorevisuals.com
```

---

## ⭐ Mutacore Visuals

**Design with purpose. Build with creativity. Stand out with Mutacore Visuals.**
