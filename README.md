# 🐍 Snake Game - Laravel Edition

A simple and beginner-friendly Snake Game built using **Laravel**, **HTML5 Canvas**, **CSS**, and **JavaScript**. This project was created to learn the fundamentals of web development, game logic, and Laravel application structure.

---

## 🎮 Features

- Classic Snake gameplay
- Start Game button
- Real-time score tracking
- Snake grows when food is eaten
- Self-collision detection
- Wall collision detection
- Game Over screen with final score
- Modern dark mode interface
- Centered and responsive game layout

---
## 📸 Preview

Run the application and start playing!

```markdown
<img width="1919" height="908" alt="Screenshot 2026-06-21 163428" src="https://github.com/user-attachments/assets/a3249773-fe79-4394-a76d-c6a92a8b3a0f" />
```

---

## ⚙️ Requirements

Before running the project, make sure you have the following installed:

- PHP 8.2 or later
- Composer
- Git
- A modern web browser (Chrome, Edge, Firefox, etc.)

---

## 🚀 Quick Start

```bash
git clone https://github.com/shervss/snakegame_laravel.git
cd snakegame_laravel
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

Open your browser and visit:

```text
http://127.0.0.1:8000
```

---

## 📥 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/shervss/snakegame_laravel.git
```

### 2. Navigate to the Project Directory

```bash
cd snakegame_laravel
```

### 3. Install Laravel Dependencies

```bash
composer install
```

### 4. Create the Environment File

For Windows:

```bash
copy .env.example .env
```

For Linux/Mac:

```bash
cp .env.example .env
```

### 5. Generate the Application Key

```bash
php artisan key:generate
```

### 6. Start the Development Server

```bash
php artisan serve
```

### 7. Open the Game

Open your browser and go to:

```text
http://127.0.0.1:8000
```

---

## 🎯 How to Play

1. Click the **Start Game** button.
2. Use the arrow keys to control the snake.
3. Eat the red food blocks to gain points.
4. The snake grows longer each time it eats food.
5. Avoid hitting the walls.
6. Avoid hitting your own body.
7. Try to achieve the highest score possible.

---

## 🎮 Controls

| Key | Action |
|------|--------|
| ↑ | Move Up |
| ↓ | Move Down |
| ← | Move Left |
| → | Move Right |

---

## 🛠 Technologies Used

- PHP 8.2
- Laravel
- HTML5 Canvas
- CSS3
- JavaScript

---

## 📁 Project Structure

```text
snakegame_laravel
│
├── app
├── bootstrap
├── config
├── public
├── resources
│   └── views
│       └── snake.blade.php
├── routes
│   └── web.php
├── composer.json
├── package.json
└── README.md
```

---

## 📚 Learning Objectives

This project demonstrates:

- Laravel routing and views
- HTML5 Canvas rendering
- JavaScript game loops
- Keyboard event handling
- Collision detection
- Dynamic score management
- Basic game state management

---

## 👨‍💻 Author

Created by **Shervin Marco**

GitHub Repository:

https://github.com/shervss/snakegame_laravel

---

## 📄 License

This project is open-source and available for educational and learning purposes.
