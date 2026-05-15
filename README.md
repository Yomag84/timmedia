# TIMMedia Website

TIMMedia is a Laravel web application for a digital business center. It serves a marketing homepage and handles customer enquiries through a contact form that sends email to the business team.

## Application Facts

- Framework: Laravel 13
- PHP version: 8.3+
- Frontend tooling: Vite 8 + Tailwind CSS 4
- Primary domain used in project assets: `timmedia.flcoders.online`
- Main functionality: public homepage and contact form email delivery

## Current Features

- Public landing page at `/`
- Contact form submission endpoint at `/contact`
- Success page at `/contact/success`
- Server-side form validation before sending mail
- Branded contact email template (`resources/views/mail/contact.blade.php`)
- SEO support files:
	- `public/robots.txt`
	- `public/sitemap.xml`
	- `public/.well-known/security.txt`

## Routes

The web routes are defined in `routes/web.php`:

- `GET /` -> renders the welcome page (`home`)
- `POST /contact` -> sends contact email (`contact.send`)
- `GET /contact/success` -> renders success page (`contact.success`)

## Contact Flow

1. User submits the contact form from the homepage.
2. `ContactController@send` validates input:
	 - `name` (required, max 100)
	 - `email` (required, valid email, max 150)
	 - `phone` (optional, max 20)
	 - `subject` (required, max 200)
	 - `message` (required, max 2000)
3. App sends `App\\Mail\\ContactMail` using Laravel Mail.
4. User is redirected to the success page.

If `CONTACT_EMAIL` is not set, the app currently falls back to:

- `info@timmedia.flcoders.online`

## Local Development

### Prerequisites

- PHP 8.3+
- Composer
- Node.js + npm

### Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
```

### Run in development

```bash
composer run dev
```

This starts:

- Laravel development server
- Queue listener
- Log tailing
- Vite dev server

### Build frontend assets

```bash
npm run build
```

## Environment Variables

Important environment values to configure:

- `APP_URL` - public base URL for generated links
- `CONTACT_EMAIL` - recipient for contact form messages
- `MAIL_MAILER`
- `MAIL_HOST`
- `MAIL_PORT`
- `MAIL_USERNAME`
- `MAIL_PASSWORD`
- `MAIL_ENCRYPTION`
- `MAIL_FROM_ADDRESS`
- `MAIL_FROM_NAME`

## Testing

Run tests with:

```bash
composer test
```

or

```bash
php artisan test
```

## Project Structure (Important Paths)

- `app/Http/Controllers/ContactController.php` - contact form handling
- `app/Mail/ContactMail.php` - contact mailable
- `resources/views/welcome.blade.php` - main landing page
- `resources/views/contact/success.blade.php` - success page
- `resources/views/mail/contact.blade.php` - email template
- `routes/web.php` - web routes
- `public/sitemap.xml` - sitemap URLs

## Notes

- Domain references in app content and SEO files are set to `timmedia.flcoders.online`.
- If this project is deployed on a different domain, update `APP_URL`, contact email values, and SEO files accordingly.
