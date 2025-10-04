# GAMEONIX Gaming Platform

## Overview
GAMEONIX is a multi-page gaming platform website built with PHP that showcases various gaming services, products, and information. The platform features a clean, modern design with a consistent theme across all pages.

## Project Structure
```
.
├── index.php          # Homepage with hero section, games showcase, and trust banners
├── store.php          # Store page featuring gaming products and merchandise
├── features.php       # Detailed features page explaining platform capabilities
├── download.php       # App download page with installation instructions
├── faq.php           # FAQ page with common questions and answers
├── includes/         # Reusable components
│   ├── header.php    # Common header with navigation
│   └── footer.php    # Common footer with links and social media
├── config/
│   └── images.php    # Image URL configuration
├── auth/             # Authentication pages
│   ├── login.php     # User login page
│   └── signup.php    # User registration page
├── p/                # Policy and information pages
├── assets/           # Static assets
│   ├── style2.css    # Main stylesheet
│   ├── script.js     # JavaScript functionality
│   └── picture/      # Background images
└── images/           # Game and platform images
```

## Pages

### Main Pages
1. **Home (index.php)** - Landing page with gaming overview and featured games
2. **Store (store.php)** - Gaming products, in-game currency, and merchandise
3. **Features (features.php)** - Platform features and capabilities
4. **Download (download.php)** - App download information and system requirements
5. **FAQ (faq.php)** - Frequently asked questions

### Navigation
All main pages share a common navigation bar with links to:
- Home
- Store
- Features
- Download
- FAQ
- Login

## Technology Stack
- **Backend**: PHP 8.2
- **Frontend**: HTML5, CSS3, JavaScript
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter)
- **Server**: PHP Built-in Development Server

## Design Theme
- Dark theme with red accent colors (#e50914)
- Responsive design for mobile and desktop
- Animated sections with scroll effects
- Modern card-based layouts
- Gaming-focused visual elements

## Key Features
- Multi-page architecture with reusable components
- Consistent header and footer across all pages
- Responsive navigation menu
- Image optimization with fallback support
- FAQ accordion functionality
- Trust indicators and social proof elements

## Development
The website uses PHP includes for header and footer components to maintain consistency across pages. Each page sets a custom `$page_title` variable before including the header.

### Running Locally
The PHP development server runs on port 5000:
```bash
php -S 0.0.0.0:5000 -t .
```

## Deployment
Configured for autoscale deployment on Replit, optimized for stateless web serving.

## Recent Changes
- **October 4, 2025**: Converted single-page website to multi-page architecture
  - Created separate pages for Store, Features, Download, and FAQ
  - Implemented reusable header/footer components
  - Updated navigation from "SARKAR" to "Store"
  - Added comprehensive content to all new pages
  - Maintained consistent design theme across all pages

## Games Featured
- BGMI (Battlegrounds Mobile India)
- VALORANT
- FREE FIRE
- COD: MOBILE (Call of Duty Mobile)
- PUBG: NEW STATE

## Contact & Support
- Email: support@gameonix.in
- Social Media: Facebook, Instagram, Twitter, YouTube
