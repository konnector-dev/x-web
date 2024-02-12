### xWeb

Laravel based boilerplate for fast(er) web development

#### Dev environment setup
- [x] Start with `docker-compose up -d` (and give it a few minutes)
- [x] Containers (with IP)
  - [x] Laravel 10 based API/Web container: 12.35.1.1
    - xdebug
    - Pint
    - Telescope
    - Pulse
    - Pennant
    - Composer Git Hooks (cghooks)
    - IDE Helper
    - Livewire
    - Security Checker (Enlightn)
    - Enlightn
  - [x] Postgres: 12.35.1.2:5432
    - Credentials: postgres@password
    - Primary database: postgres
    - Secondary database: test
  - [x] Mailpit (local email handler): 12.35.1.3:8025
  - [x] Vite (for asset compilation): 12.35.1.4:3000
    - Runs PHP 8.3 with `apache2-foreground` as the entrypoint
    - Can be used for queue

#### Features
- [x] User Registration
  - [x] Name, Email, Password (with confirmation)
  - [x] Login with GitHub
- [x] Forgot Password
- [x] User Login
  - [x] Email, Password
  - [x] Login with GitHub
- [x] User Profile
  - [x] Name, Email
  - [x] Avatar
  - [x] 2FA setup
  - [x] Browser sessions


