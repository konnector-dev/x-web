### xWeb

Laravel ecosystem based boilerplate for prototyping SaaS apps

#### Dev environment setup
- Prerequisites : **Docker** and **Docker Compose**
- Start : **docker-compose up -d** (and give it a few minutes)
- Use : [**http://11.24.1.1**](http://11.24.1.1)

**DevOps**
- Containers
    - **11.24.1.1** : Laravel 11 based API/Web container
    - **11.24.1.2:5432** : Postgres DB
      - Credentials: **postgres**@**password**
      - Primary database: **postgres**
      - Secondary database: **test**
    - **11.24.1.3:8025** : Mailpit, for local emails
    - **11.24.1.4:5173**: Vite
      - **npm run dev** in background for asset compilation
      - Has PHP 8.3 pre-installed, can also be used for running background jobs

**Available**
- Features
    - [x] Authentication
        - [x] Registration with Name, Email, Password
        - [x] Login with Email, Password
        - [x] Forgot/Reset Password
    - [x] User dashboard
        - [x] Name, Email
        - [x] Avatar
        - [x] 2FA setup
        - [x] Browser sessions
        - [x] Teams setup
        - [x] API tokens

- Tools/Packages
    - [x] xdebug
    - [x] Pint
    - [x] Telescope
    - [x] Pulse
    - [x] Pennant
    - [x] IDE Helper
    - [x] Livewire
    - [x] Security Checker (Enlightn)
    - [x] Enlightn
    - [x] Pest

**Coming Soon**
- Features
    - [ ] Socialite login
        - [ ] Login with GitHub
        - [ ] Login with Google

- Tools/Packages
    - [ ] Socialite
    - [ ] Pre-commit/pre-push git hooks

