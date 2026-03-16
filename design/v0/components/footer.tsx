'use client'

import Link from 'next/link'
import Image from 'next/image'
import { Facebook, Instagram, Twitter, Mail, Phone, MapPin } from 'lucide-react'

const FOOTER_LINKS = {
  Programs: [
    { label: 'Seminars & Events', href: '/seminars' },
    { label: 'Travel Programs', href: '/travel' },
    { label: 'Temples', href: '/temples' },
    { label: 'Gurus', href: '/gurus' },
  ],
  Community: [
    { label: 'About Us', href: '/about' },
    { label: 'Blog', href: '/blog' },
    { label: 'Gallery', href: '/gallery' },
    { label: 'Locations', href: '/locations' },
  ],
  Support: [
    { label: 'Donate', href: '/donations' },
    { label: 'Contact', href: '/contact' },
    { label: 'Privacy Policy', href: '/privacy-policy' },
    { label: 'Terms', href: '/terms' },
  ],
}

const SOCIAL_LINKS = [
  { icon: Facebook, href: 'https://facebook.com', label: 'Facebook' },
  { icon: Instagram, href: 'https://instagram.com', label: 'Instagram' },
  { icon: Twitter, href: 'https://twitter.com', label: 'Twitter' },
  { icon: Mail, href: 'mailto:info@taoassociation.org', label: 'Email' },
]

export function Footer() {
  return (
    <footer className="bg-gradient-to-b from-[#3D2A23] to-[#2D1F1A] text-[#F5E6D3] border-t-2 border-[#C41E3A]">
      {/* Main Footer */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        {/* Top Section - Logo & Tagline */}
        <div className="mb-12 border-b border-[#F5E6D3]/20 pb-8">
          <div className="flex items-start gap-4 mb-4">
            <div className="w-12 h-12 flex-shrink-0">
              <Image
                src="/logo-icon.png"
                alt="TAO Logo"
                width={48}
                height={48}
                className="w-full h-full"
              />
            </div>
            <div>
              <h3 className="text-xl font-bold text-[#F5E6D3]">TAO Association</h3>
              <p className="text-sm text-[#F5E6D3]/70 mt-1">
                Exploring Tao wisdom and spiritual growth in Nepal
              </p>
            </div>
          </div>
        </div>

        {/* Links Grid */}
        <div className="grid grid-cols-2 md:grid-cols-3 gap-8 mb-12">
          {Object.entries(FOOTER_LINKS).map(([section, links]) => (
            <div key={section}>
              <h4 className="font-bold text-[#F5B242] mb-4">{section}</h4>
              <ul className="space-y-2">
                {links.map((link) => (
                  <li key={link.href}>
                    <Link
                      href={link.href}
                      className="text-[#F5E6D3]/70 hover:text-[#F5B242] transition-colors text-sm"
                    >
                      {link.label}
                    </Link>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        {/* Contact & Social */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 border-t border-[#F5E6D3]/20 pt-8 mb-8">
          <div>
            <h4 className="font-bold text-[#F5B242] mb-4">Contact</h4>
            <div className="space-y-2 text-sm text-[#F5E6D3]/70">
              <div className="flex gap-2 items-start">
                <MapPin className="h-5 w-5 mt-0.5 flex-shrink-0 text-[#E85D5D]" />
                <span>Sitapaila, Kathmandu, Nepal</span>
              </div>
              <div className="flex gap-2 items-center">
                <Phone className="h-5 w-5 flex-shrink-0 text-[#E85D5D]" />
                <a href="tel:+977-1-4700000" className="hover:text-[#F5B242] transition-colors">
                  +977-1-4700000
                </a>
              </div>
              <div className="flex gap-2 items-center">
                <Mail className="h-5 w-5 flex-shrink-0 text-[#E85D5D]" />
                <a href="mailto:info@taoassociation.org" className="hover:text-[#F5B242] transition-colors">
                  info@taoassociation.org
                </a>
              </div>
            </div>
          </div>

          <div>
            <h4 className="font-bold text-[#F5B242] mb-4">Follow Us</h4>
            <div className="flex gap-4">
              {SOCIAL_LINKS.map(({ icon: Icon, href, label }) => (
                <a
                  key={label}
                  href={href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="p-2 bg-[#F5E6D3]/10 rounded-full hover:bg-[#E85D5D] text-[#F5E6D3] hover:text-white transition-colors"
                  aria-label={label}
                >
                  <Icon className="h-5 w-5" />
                </a>
              ))}
            </div>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-[#F5E6D3]/20">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
          <div className="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-[#F5E6D3]/60">
            <div>
              © {new Date().getFullYear()} TAO Association of Nepal. All rights reserved.
            </div>
            <div className="text-center md:text-right">
              <p className="text-xs">
                Nepal Registration: CDORN: 87/055/056 | SWC RN: 26328
              </p>
              <p className="text-xs mt-1">
                Registered at Sitapaila, Kathmandu, Nepal
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  )
}
