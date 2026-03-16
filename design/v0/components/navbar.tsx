'use client'

import { useState, useEffect } from 'react'
import Link from 'next/link'
import Image from 'next/image'
import { useTheme } from 'next-themes'
import { Moon, Sun, Menu, X, Heart, Search } from 'lucide-react'
import { Button } from '@/components/ui/button'
import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet'

const NAV_LINKS = [
  { label: 'Home', href: '/' },
  { label: 'About', href: '/about' },
  {
    label: 'Programs',
    href: '#',
    submenu: [
      { label: 'Seminars & Events', href: '/seminars' },
      { label: 'Travel Programs', href: '/travel' },
      { label: 'Temples', href: '/temples' },
    ],
  },
  { label: 'Locations', href: '/locations' },
  { label: 'Gurus', href: '/gurus' },
  { label: 'Gallery', href: '/gallery' },
  { label: 'Blog', href: '/blog' },
  { label: 'Contact', href: '/contact' },
]

export function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false)
  const [mounted, setMounted] = useState(false)
  const { theme, setTheme } = useTheme()

  useEffect(() => {
    setMounted(true)
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 10)
    }
    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  if (!mounted) return null

  return (
    <nav
      className={`sticky top-0 z-50 w-full transition-all duration-300 ${
        isScrolled
          ? 'bg-background/95 backdrop-blur-sm shadow-scroll dark:shadow-scroll-dark border-b border-border'
          : 'bg-background/90 backdrop-blur-sm'
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16 md:h-20">
          {/* Logo */}
          <Link href="/" className="flex items-center gap-2 flex-shrink-0">
            {/* Mobile Logo */}
            <div className="md:hidden w-10 h-10">
              <Image
                src="/logo-icon.png"
                alt="TAO Logo"
                width={40}
                height={40}
                priority
                className="w-full h-full"
              />
            </div>
            {/* Desktop Logo */}
            <div className="hidden md:block h-16">
              <Image
                src="/logo-full.png"
                alt="TAO Association of Nepal"
                height={64}
                width={300}
                priority
                className="h-full w-auto"
              />
            </div>
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden md:flex items-center gap-1 flex-1 ml-12">
            {NAV_LINKS.map((link) => (
              <div key={link.href} className="relative group">
                <Link
                  href={link.href}
                  className="px-3 py-2 text-sm font-medium text-foreground hover:text-primary transition-colors"
                >
                  {link.label}
                </Link>
                {link.submenu && (
                  <div className="absolute left-0 mt-0 w-48 bg-card border border-border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 py-2">
                    {link.submenu.map((sublink) => (
                      <Link
                        key={sublink.href}
                        href={sublink.href}
                        className="block px-4 py-2 text-sm text-foreground hover:bg-accent hover:text-accent-foreground"
                      >
                        {sublink.label}
                      </Link>
                    ))}
                  </div>
                )}
              </div>
            ))}
          </div>

          {/* Right Actions */}
          <div className="flex items-center gap-2 md:gap-4">
            {/* Search Button */}
            <Link href="/search">
              <Button variant="ghost" size="icon" className="h-10 w-10">
                <Search className="h-5 w-5" />
                <span className="sr-only">Search</span>
              </Button>
            </Link>

            {/* Dark Mode Toggle */}
            <Button
              variant="ghost"
              size="icon"
              onClick={() => setTheme(theme === 'dark' ? 'light' : 'dark')}
              className="h-10 w-10"
            >
              {theme === 'dark' ? (
                <Sun className="h-5 w-5" />
              ) : (
                <Moon className="h-5 w-5" />
              )}
              <span className="sr-only">Toggle theme</span>
            </Button>

            {/* Donate Button */}
            <Link href="/donations">
              <Button className="hidden sm:flex gap-2 bg-primary hover:bg-primary/90 text-white">
                <Heart className="h-4 w-4" />
                <span className="hidden md:inline">Donate</span>
              </Button>
            </Link>

            {/* Mobile Menu */}
            <Sheet>
              <SheetTrigger asChild className="md:hidden">
                <Button variant="ghost" size="icon">
                  <Menu className="h-6 w-6" />
                  <span className="sr-only">Open menu</span>
                </Button>
              </SheetTrigger>
              <SheetContent side="right" className="w-64">
                <div className="flex flex-col gap-4 mt-8">
                  {NAV_LINKS.map((link) => (
                    <div key={link.href}>
                      {link.submenu ? (
                        <>
                          <p className="font-semibold text-foreground mb-2">
                            {link.label}
                          </p>
                          <div className="pl-4 space-y-2">
                            {link.submenu.map((sublink) => (
                              <Link
                                key={sublink.href}
                                href={sublink.href}
                                className="block text-sm text-muted-foreground hover:text-primary"
                              >
                                {sublink.label}
                              </Link>
                            ))}
                          </div>
                        </>
                      ) : (
                        <Link
                          href={link.href}
                          className="text-foreground hover:text-primary font-medium"
                        >
                          {link.label}
                        </Link>
                      )}
                    </div>
                  ))}
                  <Link href="/donations" className="mt-4">
                    <Button className="w-full gap-2 bg-primary hover:bg-primary/90 text-white">
                      <Heart className="h-4 w-4" />
                      Donate
                    </Button>
                  </Link>
                </div>
              </SheetContent>
            </Sheet>
          </div>
        </div>
      </div>
    </nav>
  )
}
