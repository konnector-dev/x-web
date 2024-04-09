### xWeb

Boilerplate for quick prototyping of web based SaaS applications built using Laravel ecosystem

#### Dev environment setup
Start with `docker-compose up -d` (and give it a few minutes)

- [x] Containers (with IP)
    - [x] Laravel 11 based API/Web container: `11.24.1.1`
    - [x] Postgres: 11.24.1.2:5432
      - Credentials: `postgres`@`password`
      - Primary database: `postgres`
      - Secondary database: `test`
    - [x] Mailpit (for local emails): `11.24.1.3:8025`
    - [x] Vite (asset compilation): `11.24.1.4:5173`
      - Runs PHP 8.3 with `apache2-foreground` as the entrypoint
      - Also used for running background jobs

  Available packages
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

  Coming soon
    - [ ] Socialite
    - [ ] Pre-commit/pre-push git hooks

#### Features
Available
  - [x] User Registration
    - [x] Name, Email, Password (with confirmation)
  - [x] Forgot Password
  - [x] Login
    - [x] Email, Password
  - [x] Teams setup
  - [x] User Profile
    - [x] Name, Email
    - [x] Avatar
    - [x] 2FA setup
    - [x] Browser sessions
  - [x] API tokens

Coming soon
  - [ ] Login > Socialite
    - [ ] Login with GitHub
    - [ ] Login with Google
