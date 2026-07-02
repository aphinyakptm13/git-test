## 🔧 Tech Stack

| Component        | Version | Purpose                            |
| ---------------- | ------- | ---------------------------------- | ---------------- |
| **PHP**          | 8.2.12  | Backend Runtime                    |
| **Laravel**      | 12.0    | Web Framework + ORM + Routing      |
| **Tailwind CSS** | 4.0.0   | Responsive Styling (Utility-first) |
| **MySQL**        | 8.0+    | Database                           |
| **Blade**        | -       | Server-side Template Engine        |
| **Composer**     | Latest  | PHP Dependency Manager             | ใช้ stack ตามนี้ |

---

project-root/
│
├── controllers/ # จัดการ logic ของแต่ละ route
│ ├── UserController.php
│ ├── ProductController.php
│ └── ...
│
├── models/ # จัดการ data และ schema
│ ├── User.php
│ ├── Product.php
│ └── ...
│
├── views/ # ส่วนแสดงผล (UI/Template)
│ ├── user/
│ ├── product/
│ └── ...
│
├── services/ # business logic แยกจาก controller
│ ├── AuthService.php
│ ├── PaymentService.php
│ └── ...
│
├── routes/ # กำหนดเส้นทาง API/web
│ └── web.php
│
├── config/ # การตั้งค่า เช่น DB, ENV
│ └── database.php
│
└── public/ # entry point เช่น index.php

หลักการแยกการทำงาน

Controller → รับ request, เรียก service, ส่ง response

Service → เก็บ business logic ที่ซับซ้อน (เช่น การคำนวณ, การเชื่อมต่อ)

Model → จัดการข้อมูล, ORM, SQL query

View → ส่วน UI หรือ template ที่ render ออกมา

Route → กำหนดว่า URL ไหนเรียก Controller ไหน
