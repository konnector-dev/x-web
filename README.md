### xWeb

Boilerplate for quick prototyping of web based SaaS applications built using Laravel ecosystem

#### Dev environment setup
- [x] Start with `docker-compose up -d` (and give it a few minutes)
- [x] Containers (with IP)
    - [ ] Laravel 11 based API/Web container: 11.24.1.1
        - [x] xdebug
        - [ ] Pint
        - [ ] Telescope
        - [ ] Pulse
        - [ ] Pennant
        - [ ] Composer Git Hooks (cghooks)
        - [ ] IDE Helper
        - [ ] Livewire
        - [ ] Security Checker (Enlightn)
        - [ ] Enlightn
    - [x] Postgres: 11.24.1.2:5432
        - Credentials: postgres@password
        - Primary database: postgres
        - Secondary database: test
    - [x] Mailpit (local email handler): 11.24.1.3:8025
    - [x] Vite (for asset compilation): 11.24.1.4:3000
        - Runs PHP 8.3 with `apache2-foreground` as the entrypoint
        - Can be used for queue

#### Features
- [ ] User Registration
    - [ ] Name, Email, Password (with confirmation)
    - [ ] Login with GitHub
- [ ] Forgot Password
- [ ] User Login
    - [ ] Email, Password
    - [ ] Login with GitHub
- [ ] User Profile
    - [ ] Name, Email
    - [ ] Avatar
    - [ ] 2FA setup
    - [ ] Browser sessions

