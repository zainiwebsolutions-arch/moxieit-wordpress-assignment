# Moxie IT WordPress Assignment

## Author

Mohd Idrees Zaini

## Overview

This project is a custom WordPress theme developed as part of the Moxie IT WordPress Developer Assignment. The theme follows WordPress coding standards and includes dynamic theme features, custom post types, Gutenberg blocks, and responsive design implementation.

---

## Requirements

- WordPress 6.x
- PHP 8.x
- Node.js
- npm
- Contact Form 7 Plugin

---

## Installation

### 1. Copy Theme

Copy the theme folder into:

```text
wp-content/themes/
```

### 2. Activate Theme

Navigate to:

```text
WordPress Dashboard → Appearance → Themes
```

Activate the theme.

### 3. Install Dependencies

Open terminal inside the theme directory and run:

```bash
npm install
```

### 4. Build Block Assets

```bash
npm run build
```

### 5. Install Required Plugin

Install and activate:

- Contact Form 7

Navigate to:

```text
Dashboard → Plugins → Add New
```

Search for:

```text
Contact Form 7
```

Install and activate it.

---

# Implemented Features

## Theme Setup

- Custom WordPress Theme Development
- Proper CSS Enqueueing
- Proper JavaScript Enqueueing
- Custom Logo Support
- Site Icon Support
- Featured Image Support
- Title Tag Support
- Navigation Menu Support

---

## Dynamic Header

- Custom Logo
- Dynamic Primary Menu
- Dynamic Topbar Address
- Dynamic Topbar Phone Number
- Responsive Navigation

---

## Dynamic Footer

- Dynamic Footer Menu
- Dynamic Office Address
- Dynamic Phone Number
- Dynamic Email Address
- Dynamic Social Media Links
- Dynamic Business Hours
- Latest Posts Section

---

## Customizer Options

The following settings are configurable through the WordPress Customizer:

### Topbar

- Address
- Phone Number

### Footer

- Address
- Phone Number
- Email Address

### Social Media Links

- Facebook URL
- Instagram URL
- Twitter URL
- LinkedIn URL
- YouTube URL

### Business Hours

- Monday – Friday Hours
- Saturday Hours
- Sunday Hours

---

## Custom Post Type

### Practice Areas

Custom Post Type created for managing legal practice areas.

#### Features

- Title
- Content Editor
- Featured Image
- Excerpt
- Archive Page
- Single Page Template
- Gutenberg Support

---

## Gutenberg Blocks

### Hero Slider Block

Dynamic hero banner section.

### About Us Block

Dynamic About Us section.

### Practice Areas Block

Displays latest Practice Area posts dynamically.

### Consultation Form Block

Displays Contact Form 7 form.

### Blog Grid Block

Displays latest blog posts dynamically.

---

## Additional Features

- Responsive Design
- Bootstrap Integration
- Owl Carousel Integration
- Dynamic Blog Listing
- Dynamic Practice Area Listing
- WordPress Best Practices
- Dynamic Single Practice Area Pages

---

## Folder Structure

```text
moxieit/
│
├── blocks/
│   ├── hero-slider/
│   ├── about-us/
│   ├── practice-areas/
│   ├── consultation-form/
│   └── blog-grid/
│
├── build/
├── css/
├── img/
├── js/
├── lib/
├── src/
├── template-parts/
│
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── page.php
├── single-practice_area.php
├── style.css
└── README.md
```

---

## Required Plugin

### Contact Form 7

Used for the Consultation Form Block.

Plugin Link:

https://wordpress.org/plugins/contact-form-7/

---

## Build Commands

Install Dependencies:

```bash
npm install
```

Build Assets:

```bash
npm run build
```

---

## GitHub Repository

This repository contains the complete source code for the Moxie IT WordPress Assignment.

---

## Developed By

**Mohd Idrees Zaini**

WordPress Developer
