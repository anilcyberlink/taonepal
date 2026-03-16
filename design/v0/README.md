# TAO Association of Nepal - Complete Website

A comprehensive, production-ready website for TAO Association of Nepal built with Next.js 16, React 19, Tailwind CSS, and shadcn/ui components.

## 🌍 Features

### Design System
- **Color Palette**: Crimson red (#C41E3A), Navy blue (#1F3A93), Warm cream (#F5E6D3)
- **Typography**: Cinzel for headings, Inter for body text
- **Dark Mode**: Warm deep tones (never cold grays) with next-themes integration
- **CSS Variables**: All colors defined as design tokens, no hardcoded values
- **Responsive**: Mobile-first design from 320px upward
- **Accessibility**: 44px+ tap targets, semantic HTML, ARIA labels

### Pages & Features

#### Core Pages (18 pages total)
- **Home** (`/`) - Hero, philosophy intro, upcoming seminars, temples, travel teaser, donation CTA, blog highlights, quick stats
- **About** (`/about`) - History timeline, mission/vision, Tao philosophy tabs, guru profiles, organization structure
- **Locations** (`/locations`) - Location listing with filters, map embeds, contact info
- **Location Detail** (`/locations/[id]`) - Full location profile, contact form, nearby branches

#### Seminars & Events
- **Seminars List** (`/seminars`) - Tabs for upcoming/past/all, event cards with filters
- **Seminar Detail** (`/seminars/[id]`) - Full event description, schedule, gallery, registration form

#### Temples
- **Temples List** (`/temples`) - Filter by status (completed/under-construction/planned)
- **Temple Detail** (`/temples/[id]`) - Project info, progress timeline, funding tracker, donation form

#### Gurus & Masters
- **Gurus List** (`/gurus`) - Grid of guru cards with profiles
- **Guru Detail** (`/gurus/[id]`) - Full biography, teachings, books, upcoming events

#### Travel Programs
- **Travel List** (`/travel`) - Destination cards with program details
- **Travel Detail** (`/travel/[id]`) - Full itinerary, included/excluded items, registration form

#### Content
- **Blog** (`/blog`) - Featured post, category tabs, article cards
- **Blog Detail** (`/blog/[id]`) - Full article, related posts, author info
- **Gallery** (`/gallery`) - Masonry image grid with category filters

#### Utilities
- **Donations** (`/donations`) - Donation tiers, amount selector, payment methods, fund allocation chart
- **Contact** (`/contact`) - Contact form, branch accordion, location info
- **Privacy Policy** (`/privacy-policy`) - Privacy information
- **Terms** (`/terms`) - Terms & conditions
- **404** (`/not-found`) - Custom not found page

### Component Library

#### Reusable Components
- `PageHero` - Hero banner with title, subtitle, breadcrumbs
- `SectionHeader` - Section titles with decorative divider
- `EventCard` - Event information with date badge, speaker, seats
- `TempleCard` - Temple project card with progress bar
- `GuruCard` - Guru profile card
- `BlogCard` - Blog post card with metadata
- `Navbar` - Sticky navigation with mobile drawer
- `Footer` - 3-column footer with social links

### Technical Stack

- **Framework**: Next.js 16 with App Router
- **Styling**: Tailwind CSS 4.2 with custom design tokens
- **Components**: shadcn/ui (Button, Card, Tabs, Accordion, Badge, Progress, Input, etc.)
- **Forms**: React Hook Form + Zod validation
- **Icons**: lucide-react
- **Charts**: Recharts (donation breakdown)
- **Theme**: next-themes with localStorage persistence
- **Typography**: Google Fonts (Cinzel, Inter)
- **Images**: Next.js Image component with blur placeholders
- **SEO**: generateMetadata in all pages

## 🚀 Getting Started

### Installation

```bash
# Install dependencies
npm install

# Run development server
npm run dev

# Open http://localhost:3000
```

### Build & Deploy

```bash
# Build for production
npm build

# Start production server
npm start
```

## 📁 Project Structure

```
app/
├── layout.tsx                    # Root layout with navbar, footer, theme
├── globals.css                   # Design tokens and global styles
├── page.tsx                      # Home page
├── about/
│   └── page.tsx                 # About page with timeline
├── locations/
│   ├── page.tsx                 # Locations listing
│   └── [id]/page.tsx            # Location detail
├── seminars/
│   ├── page.tsx                 # Seminars listing
│   └── [id]/page.tsx            # Seminar detail with registration
├── temples/
│   ├── page.tsx                 # Temples listing
│   └── [id]/page.tsx            # Temple detail with progress
├── gurus/
│   ├── page.tsx                 # Gurus listing
│   └── [id]/page.tsx            # Guru detail
├── travel/
│   ├── page.tsx                 # Travel programs listing
│   └── [id]/page.tsx            # Program detail with itinerary
├── blog/
│   ├── page.tsx                 # Blog listing with tabs
│   └── [id]/page.tsx            # Blog post detail
├── gallery/page.tsx             # Photo gallery with filters
├── donations/page.tsx           # Donations page with charts
├── contact/page.tsx             # Contact form and branches
├── privacy-policy/page.tsx      # Privacy policy
├── terms/page.tsx               # Terms & conditions
└── not-found.tsx                # 404 page

components/
├── navbar.tsx                   # Main navigation
├── footer.tsx                   # Footer component
├── page-hero.tsx                # Hero banner
├── section-header.tsx           # Section title component
├── event-card.tsx               # Event card component
├── temple-card.tsx              # Temple card component
├── guru-card.tsx                # Guru card component
├── blog-card.tsx                # Blog card component
├── theme-provider.tsx           # Theme provider setup
└── ui/                          # shadcn/ui components
    ├── button.tsx
    ├── card.tsx
    ├── tabs.tsx
    ├── accordion.tsx
    ├── badge.tsx
    ├── progress.tsx
    ├── input.tsx
    ├── sheet.tsx
    └── ... (other shadcn components)

lib/
└── data/
    └── mock-data.ts            # All mock content data

public/
├── logo-icon.png               # Circular logo (mobile)
└── logo-full.png               # Full logo with text (desktop)

tailwind.config.ts              # Tailwind configuration with design tokens
```

## 🎨 Design System

### Colors (CSS Variables)

**Light Mode:**
- `--primary`: #C41E3A (Crimson red)
- `--secondary`: #1F3A93 (Navy blue)
- `--accent`: #F5E6D3 (Warm cream)
- `--background`: #FFFAF5 (Off-white)
- `--foreground`: #1a1a1a (Dark text)

**Dark Mode:**
- `--primary`: #E85D5D (Bright crimson)
- `--secondary`: #5B7FD6 (Light blue)
- `--accent`: #F5B242 (Golden)
- `--background`: #2D1F1A (Deep brown)
- `--foreground`: #F5E6D3 (Cream text)

### Typography

- **Headings**: Cinzel (400, 600, 700, 900 weights)
- **Body**: Inter (regular, medium, semibold)
- **Sizing**: Responsive with breakpoints (sm, md, lg, xl, 2xl)

### Spacing & Radius

- **Spacing**: Tailwind 4-scale (px, 2, 3, 4, 6, 8, 12, 16, 24, 32...)
- **Border Radius**: 0.5rem default (8px), with sm/md/lg variants
- **Gap**: Flex gap classes for consistent spacing

## 📝 Content Management

All content is stored in `/lib/data/mock-data.ts` as structured JSON. To update:

1. Edit mock-data.ts with new events, locations, gurus, etc.
2. Components automatically display the updated content
3. For production, replace with database/CMS integration

## 🔐 Security & Best Practices

- React Hook Form + Zod for form validation
- Input sanitization on all forms
- No hardcoded API keys or sensitive data
- ARIA labels and semantic HTML for accessibility
- Mobile-responsive with 44px+ tap targets
- Smooth scroll behavior and page transitions

## 🌐 SEO

- Metadata defined in each page's `generateMetadata()`
- Meta titles, descriptions, OG tags
- Semantic HTML structure
- Open Graph support for social sharing

## 🎯 Future Enhancements

Recommended next steps:
1. Replace mock-data with real database (Supabase, Neon, etc.)
2. Add email notifications for registrations
3. Implement payment processing (Stripe, eSewa, Khalti)
4. Add admin dashboard for content management
5. Integrate Google Calendar for event syncing
6. Add real image uploads and optimization
7. Implement user accounts and booking history

## 📄 License

Built for TAO Association of Nepal. All content rights reserved.

## 🤝 Support

For questions or issues, contact: info@taoassociation.org

---

**Built with**: Next.js 16 • React 19 • Tailwind CSS 4 • shadcn/ui • Recharts • lucide-react
