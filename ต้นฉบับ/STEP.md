# 📝 Setup Complete Guard Force Project

สำหรับติดตั้งและเตรียม Guard Force Laravel project ให้พร้อมใช้งาน

---

## **Step 1: Navigate to Project Directory**

```bash
cd "C:\Users\aphin\OneDrive\Desktop\New folder"
```

ตรวจสอบว่าอยู่ในโฟลเดอร์ที่ถูก:
```bash
pwd
# ต้องเห็น: /c/Users/aphin/OneDrive/Desktop/New folder
```

---

## **Step 2: Install Node Packages (npm)**

ติดตั้ง npm dependencies รวม Tailwind CSS:

```bash
npm install
```

**จะติดตั้ง:**
- Tailwind CSS 4.3.2
- Vite (Bundler)
- PostCSS
- Autoprefixer
- Laravel Vite Plugin

**รอให้เสร็จ:**
```
✓ added XX packages
✓ found 0 vulnerabilities
```

---

## **Step 3: Install Tailwind CSS Config Files**

สร้าง Tailwind configuration files:

### 3.1 ไฟล์ `tailwind.config.js`
```javascript
// C:\Users\aphin\OneDrive\Desktop\New folder\tailwind.config.js

export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

### 3.2 ไฟล์ `postcss.config.js`
```javascript
// C:\Users\aphin\OneDrive\Desktop\New folder\postcss.config.js

export default {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
}
```

### 3.3 ไฟล์ `resources/css/app.css`
```css
/* C:\Users\aphin\OneDrive\Desktop\New folder\resources\css\app.css */

@tailwind base;
@tailwind components;
@tailwind utilities;
```

**สร้างไฟล์สามารถทำได้ด้วย:**
```bash
# ถ้าสร้างขาดไฟล์ใดหรือไม่ครบสามารถสร้างเอง
mkdir -p resources/css
```

---

## **Step 4: Create Blade Layout Templates**

สร้าง view files สำหรับ Layout และ Components:

### 4.1 สร้าง Directory
```bash
mkdir -p resources/views/layouts
mkdir -p resources/views/components
```

### 4.2 Main Layout: `resources/views/layouts/app.blade.php`
```blade
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Guard Force')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        @include('components.sidebar')
        
        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            @include('components.header')
            
            <!-- Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
```

### 4.3 Sidebar Component: `resources/views/components/sidebar.blade.php`
```blade
<!-- Sidebar Navigation -->
<aside class="w-64 bg-white shadow-lg min-h-screen">
    <!-- Logo -->
    <div class="p-6 border-b">
        <h1 class="text-2xl font-bold text-gray-800">Guard Force</h1>
    </div>
    
    <!-- Navigation Menu -->
    <nav class="p-6 space-y-2">
        <!-- WAREHOUSE Section -->
        <div>
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">WAREHOUSE</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">PO Management</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Item Creation</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Confirmations</a></li>
            </ul>
        </div>
        
        <!-- Assets Section -->
        <div class="mt-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">ทรัพย์สิน (Assets)</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Property Records</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Transfers</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Repairs</a></li>
            </ul>
        </div>
        
        <!-- Users Section -->
        <div class="mt-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">ผู้ใช้งาน (Users)</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">User Management</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Permissions</a></li>
            </ul>
        </div>
        
        <!-- Reports Section -->
        <div class="mt-6">
            <h3 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">รายงาน (Reports)</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Asset Reports</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-600 text-sm">Transfer Reports</a></li>
            </ul>
        </div>
    </nav>
</aside>
```

### 4.4 Header Component: `resources/views/components/header.blade.php`
```blade
<!-- Header -->
<header class="bg-white shadow-md">
    <div class="flex justify-between items-center px-6 py-4">
        <div class="flex items-center space-x-3">
            <h2 class="text-xl font-semibold text-gray-800">@yield('header_title', 'Home')</h2>
        </div>
        
        <div class="flex items-center space-x-4">
            <!-- User Profile -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">MA</span>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-800">Master Admin</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
            
            <!-- Logout -->
            <a href="#" class="text-gray-600 hover:text-red-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
            </a>
        </div>
    </div>
</header>
```

### 4.5 Home Page: `resources/views/home.blade.php`
```blade
@extends('layouts.app')

@section('title', 'Home - Guard Force')
@section('header_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stats Cards -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Total Assets</h3>
        <p class="text-3xl font-bold text-gray-800 mt-2">1,234</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Pending Transfers</h3>
        <p class="text-3xl font-bold text-orange-600 mt-2">45</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Maintenance Items</h3>
        <p class="text-3xl font-bold text-red-600 mt-2">12</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Users</h3>
        <p class="text-3xl font-bold text-blue-600 mt-2">28</p>
    </div>
</div>

<!-- Welcome Section -->
<div class="bg-white rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome to Guard Force</h2>
    <p class="text-gray-600">
        This is your dashboard for managing assets, transfers, and inventory.
        Use the navigation menu on the left to access different modules.
    </p>
</div>
@endsection
```

---

## **Step 5: Install PHP Packages (Composer)**

ติดตั้ง PHP dependencies:

```bash
composer install
```

**จะติดตั้ง:**
- Laravel framework
- Laravel packages
- Database drivers
- Utilities

---

## **Step 6: Generate Application Key**

สร้าง encryption key สำหรับ Laravel:

```bash
php artisan key:generate
```

**ผลลัพธ์:**
```
Application key set successfully.
```

---

## **Step 7: Configure Database**

### 7.1 สร้าง Database ใน phpMyAdmin

```
1. เปิด Browser → http://localhost/phpmyadmin/
2. Login:
   - Username: root
   - Password: (ปล่อยว่าง)
3. คลิก "New" ที่ด้านซ้าย
4. ใส่ชื่อ: g4s-test
5. Collation: utf8mb4_unicode_ci
6. คลิก "Create"
```

### 7.2 ตรวจสอบ .env File

อย่างที่สร้างไว้แล้ว ตรวจสอบ `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=g4s-test
DB_USERNAME=root
DB_PASSWORD=
```

### 7.3 ทดสอบ Connection

```bash
php artisan tinker
```

แล้วพิมพ์:
```php
DB::connection()->getPdo();
```

**ต้องเห็น:**
```
=> PDOConnection Object
```

ถ้าไม่มี error = ✅ เชื่อมต่อสำเร็จ

---

## **Step 8: Update Routes**

แก้ไข `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
```

---

## **Step 9: Start Development Servers**

ต้องเปิด 2 Terminal พร้อมกัน:

### Terminal 1️⃣ - Vite Development Server (CSS/JS)

```bash
cd "C:\Users\aphin\OneDrive\Desktop\New folder"
npm run dev
```

**ต้องเห็น:**
```
VITE v7.x.x  ready in XXX ms

➜  Local:   http://localhost:5173/
```

### Terminal 2️⃣ - Laravel Development Server

```bash
cd "C:\Users\aphin\OneDrive\Desktop\New folder"
php artisan serve
```

**ต้องเห็น:**
```
Laravel development server started: http://127.0.0.1:8000
```

---

## **Step 10: Verify Project**

เปิด Browser และไปที่:

```
http://localhost:8000
```

**ต้องเห็น:**
- ✅ Guard Force Header
- ✅ Sidebar Navigation
- ✅ Stats Cards
- ✅ Tailwind CSS styling

---

## **✅ Complete!**

โปรเจคพร้อมใช้ พร้อมเขียนโค้ด 💻

---

## **📋 Quick Reference**

### เปิดโปรเจคครั้งต่อไป:

```bash
# Terminal 1 - Vite
cd "C:\Users\aphin\OneDrive\Desktop\New folder"
npm run dev

# Terminal 2 - Laravel
cd "C:\Users\aphin\OneDrive\Desktop\New folder"
php artisan serve
```

### เข้าไปดู:
```
http://localhost:8000
```

---

## **📁 File Structure**

```
New folder/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── components/
│   │   │   ├── sidebar.blade.php
│   │   │   └── header.blade.php
│   │   └── home.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
├── routes/
│   └── web.php
├── app/
├── config/
├── tailwind.config.js
├── postcss.config.js
├── vite.config.js
├── .env
├── composer.json
├── package.json
└── ...
```

---

**Created:** 2026-07-02
