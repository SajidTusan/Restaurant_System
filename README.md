Restaurant_Ecommerce_System_Laravel-master/
│
├── 📁 app/                              ← BACKEND
│   │
│   ├── 📁 Actions/
│   │   ├── 📁 Fortify/
│   │   │   ├── CreateNewUser.php
│   │   │   ├── PasswordValidationRules.php
│   │   │   ├── ResetUserPassword.php
│   │   │   ├── UpdateUserPassword.php
│   │   │   └── UpdateUserProfileInformation.php
│   │   │
│   │   └── 📁 Jetstream/
│   │       └── DeleteUser.php
│   │
│   ├── 📁 Http/
│   │   ├── Kernel.php
│   │   │
│   │   ├── 📁 Controllers/              ← MAIN BACKEND LOGIC
│   │   │   ├── AdminController.php
│   │   │   ├── BkashController.php
│   │   │   ├── BkashRefundController.php
│   │   │   ├── CartController.php
│   │   │   ├── Controller.php
│   │   │   ├── HomeController.php
│   │   │   ├── MenuController.php
│   │   │   ├── ShipmentController.php
│   │   │   └── SslCommerzPaymentController.php
│   │   │
│   │   └── 📁 Middleware/
│   │       ├── Authenticate.php
│   │       ├── EncryptCookies.php
│   │       ├── RedirectIfAuthenticated.php
│   │       ├── TrimStrings.php
│   │       └── VerifyCsrfToken.php
│   │
│   ├── 📁 Models/                       ← DATABASE MODELS
│   │   ├── Cart.php
│   │   ├── Product.php
│   │   ├── User.php
│   │   └── order.php
│   │
│   ├── 📁 Mail/                         ← EMAIL BACKEND
│   │   ├── ApproveMail.php
│   │   ├── OrderShipped.php
│   │   ├── PaymentMail.php
│   │   ├── Reservation.php
│   │   ├── ReserveMail.php
│   │   └── UserAddedMail.php
│   │
│   ├── 📁 Library/
│   │   └── 📁 SslCommerz/               ← PAYMENT SYSTEM
│   │       ├── AbstractSslCommerz.php
│   │       ├── SslCommerzInterface.php
│   │       └── SslCommerzNotification.php
│   │
│   └── 📁 Providers/
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── EventServiceProvider.php
│       ├── FortifyServiceProvider.php
│       ├── JetstreamServiceProvider.php
│       └── RouteServiceProvider.php
│
│
├── 📁 resources/                        ← FRONTEND
│   │
│   ├── 📁 views/                        ← MAIN UI
│   │   ├── home.blade.php
│   │   ├── menu.blade.php
│   │   ├── cart.blade.php
│   │   ├── checkout.blade.php
│   │   ├── place_order.blade.php
│   │   ├── my_order.blade.php
│   │   ├── rate.blade.php
│   │   ├── rate_view.blade.php
│   │   ├── trace.blade.php
│   │   ├── dashboard.blade.php
│   │   │
│   │   ├── 📁 auth/
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   ├── forgot-password.blade.php
│   │   │   └── reset-password.blade.php
│   │   │
│   │   ├── 📁 layouts/
│   │   │   ├── app.blade.php
│   │   │   └── guest.blade.php
│   │   │
│   │   ├── 📁 mails/
│   │   │   ├── ApproveMail.blade.php
│   │   │   ├── PaymentMail.blade.php
│   │   │   └── ReserveMail.blade.php
│   │   │
│   │   └── 📁 profile/
│   │       ├── show.blade.php
│   │       ├── update-password-form.blade.php
│   │       └── update-profile-information-form.blade.php
│   │
│   ├── 📁 css/
│   │   └── app.css
│   │
│   └── 📁 js/
│       └── app.js
│
│
├── 📁 public/                           ← PUBLIC FRONTEND ASSETS
│   │
│   ├── index.php                        ← Laravel entry point
│   │
│   ├── 📁 assets/
│   │   ├── 📁 css/
│   │   ├── 📁 js/
│   │   ├── 📁 images/
│   │   └── 📁 fonts/
│   │
│   └── 📁 admin/                        ← ADMIN UI ASSETS
│       └── assets/
│
│
├── 📁 database/                         ← DATABASE STRUCTURE
│   │
│   ├── 📁 migrations/
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2022_03_30_074545_create_carts_table.php
│   │   ├── 2022_03_31_094116_create_products_table.php
│   │   ├── 2022_07_19_161104_create_chefs_table.php
│   │   ├── 2022_07_19_161656_create_reservations_table.php
│   │   ├── 2022_07_19_182521_create_about_us_table.php
│   │   ├── 2022_07_19_182815_create_banners_table.php
│   │   ├── 2022_07_21_053941_create_rate_table.php
│   │   ├── 2022_07_24_050449_create_coupon_table.php
│   │   └── 2022_07_24_092615_create_charge_table.php
│   │
│   ├── 📁 factories/
│   │   └── UserFactory.php
│   │
│   └── 📁 seeders/
│       ├── DatabaseSeeder.php
│       └── ProductSeeder.php
│
│
├── 📄 rms2.sql                          ← MAIN DATABASE FILE ⭐
│
├── 📁 routes/                           ← ROUTING
│   ├── web.php                          ← WEBSITE ROUTES ⭐
│   ├── api.php                          ← API ROUTES
│   ├── channels.php
│   └── console.php
│
│
├── 📁 config/                           ← CONFIGURATION
│   ├── app.php
│   ├── auth.php
│   ├── database.php                     ← DB CONFIG ⭐
│   ├── mail.php
│   ├── services.php
│   ├── session.php
│   └── sslcommerz.php
│
│
├── 📁 bootstrap/
│   └── app.php
│
├── 📁 tests/                            ← TESTING
│   ├── Feature/
│   └── Unit/
│
├── 📄 artisan                           ← Laravel CLI
├── 📄 composer.json                     ← PHP dependencies
├── 📄 composer.lock
├── 📄 package.json                      ← Frontend dependencies
├── 📄 package-lock.json
├── 📄 webpack.mix.js                    ← Asset compilation
├── 📄 tailwind.config.js                ← Tailwind configuration
├── 📄 server.php
└── 📄 README.md