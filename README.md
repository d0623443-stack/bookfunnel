# bookfunnel

## WanderLuxe - Luxury Tourism Website (CodeIgniter 4)

A complete 5-page responsive luxury tourism web application with dynamic search, filterable destination guides, handcrafted tour packages, full form submission handling, data persistence, and deep WhatsApp integration.

### Tech Stack
- **Framework:** CodeIgniter 4 (PHP 8.2+)
- **Styling:** Custom Vanilla CSS Design System with CSS variables, Glassmorphism, and responsive grid layouts
- **Icons:** Phosphor Icons & FontAwesome SVG
- **Database / Persistence:** Dual SQLite (`writable/tourism.db`) & JSON repository (`writable/inquiries.json`)
- **Web Server:** Apache (XAMPP `htdocs/gitags`) / Built-in CLI Spark

### Key Features
1. **5 Main Pages:**
   - **Home (`/`)**: Hero section, animated traveler statistics, trip finder search bar, featured destinations, tour package previews, why choose us, testimonials.
   - **Destinations (`/destinations`)**: Comprehensive catalog with client/server category filtering (*Tropical*, *Alpine*, *Cultural*, *Safari*, *Coastal*) and individual destination detail guides.
   - **Tour Packages (`/packages`)**: Curated itineraries with day-by-day breakdowns, inclusions, discount pricing, and direct booking actions.
   - **About Us (`/about`)**: Company heritage, expedition curators, and international safety & sustainability certifications.
   - **Contact & Booking (`/contact`)**: Global desk info, office locations, interactive form with server-side validation, CSRF protection, and confirmation receipt.
2. **Form Submission & Booking Lifecycle:**
   - Client and server-side validation (required fields, sanitization, guest count limits).
   - Generates unique human-readable Reference ID (e.g. `WLX-2610-XXXXX`).
   - Confirmation page (`/contact/confirmation`) with summary and 1-click WhatsApp sync.
   - Submissions Management Dashboard (`/inquiries`) to review leads and click-to-reply via WhatsApp.
3. **WhatsApp Integration:**
   - Persistent floating WhatsApp quick-contact widget on all pages with pre-filled prompt modal.
   - Header & Footer 24/7 direct chat links.
   - Direct package and destination cards with pre-filled WhatsApp inquiry triggers.
   - Priority booking synchronization from confirmation page.

### Running Locally
1. Place project in `c:\xampp8.2\htdocs\gitags`
2. Start Apache in XAMPP
3. Access at: `http://localhost/gitags/` or `http://localhost/gitags/public/`
4. Or run via Spark: `php spark serve` -> `http://localhost:8080/`
