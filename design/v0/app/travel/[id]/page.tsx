'use client'

import { PageHero } from '@/components/page-hero'
import { mockTravelPrograms, mockGurus } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { Button } from '@/components/ui/button'
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from '@/components/ui/accordion'
import { GuruCard } from '@/components/guru-card'
import Image from 'next/image'
import { Badge } from '@/components/ui/badge'
import { Calendar, Users, TrendingUp } from 'lucide-react'
import Link from 'next/link'
import { useState } from 'react'
import { use } from 'react'

export default function TravelDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = use(params)
  const program = mockTravelPrograms.find((p) => p.id === id)
  const [selectedDate, setSelectedDate] = useState(program?.upcomingDates[0])
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    passport: '',
    emergency: '',
  })

  if (!program) {
    notFound()
  }

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    alert('Thank you for your registration! We will contact you shortly.')
    setFormData({ name: '', email: '', phone: '', passport: '', emergency: '' })
  }

  return (
    <>
      <PageHero
        title={program.destination}
        subtitle={program.country}
        backgroundImage={program.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Travel', href: '/travel' },
          { label: program.destination, href: `/travel/${program.id}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12">
            {/* Main Content */}
            <div className="md:col-span-2 space-y-8">
              {/* Hero Image */}
              <div className="rounded-lg overflow-hidden h-96">
                <Image
                  src={program.image}
                  alt={program.destination}
                  width={800}
                  height={400}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Overview */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h2 className="text-2xl font-bold mb-4 text-foreground">
                  Program Overview
                </h2>
                <p className="text-lg text-muted-foreground mb-6 leading-relaxed">
                  {program.fullDescription}
                </p>

                {/* Details Grid */}
                <div className="grid md:grid-cols-4 gap-6">
                  <div>
                    <div className="text-3xl font-bold text-primary mb-2">
                      {program.duration}
                    </div>
                    <div className="text-sm text-muted-foreground">Duration</div>
                  </div>
                  <div>
                    <div className="text-3xl font-bold text-primary mb-2">
                      {program.groupSize}
                    </div>
                    <div className="text-sm text-muted-foreground">Group Size</div>
                  </div>
                  <div>
                    <div className="text-3xl font-bold text-primary mb-2">
                      Rs. {(program.cost / 1000).toFixed(0)}k
                    </div>
                    <div className="text-sm text-muted-foreground">Cost per Person</div>
                  </div>
                  <div>
                    <div className="text-3xl font-bold text-primary mb-2">
                      {program.difficulty}
                    </div>
                    <div className="text-sm text-muted-foreground">Difficulty</div>
                  </div>
                </div>
              </div>

              {/* Itinerary */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h2 className="text-2xl font-bold mb-6 text-foreground">
                  Day by Day Itinerary
                </h2>
                <Accordion type="single" collapsible className="w-full">
                  {program.itinerary?.map((day, idx) => (
                    <AccordionItem key={idx} value={`day-${day.day}`}>
                      <AccordionTrigger className="text-lg font-bold hover:text-primary">
                        <span>Day {day.day}: {day.title}</span>
                      </AccordionTrigger>
                      <AccordionContent className="text-muted-foreground">
                        {day.description}
                      </AccordionContent>
                    </AccordionItem>
                  ))}
                </Accordion>
              </div>

              {/* What's Included */}
              <div className="grid md:grid-cols-2 gap-8">
                <div className="bg-green-500/10 border border-green-500/30 rounded-lg p-6">
                  <h3 className="font-bold text-lg text-foreground mb-4">
                    What's Included
                  </h3>
                  <ul className="space-y-2">
                    {program.included?.map((item, idx) => (
                      <li key={idx} className="flex gap-3 text-muted-foreground">
                        <span className="text-green-500 font-bold">✓</span>
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="bg-destructive/10 border border-destructive/30 rounded-lg p-6">
                  <h3 className="font-bold text-lg text-foreground mb-4">
                    Not Included
                  </h3>
                  <ul className="space-y-2">
                    {program.notIncluded?.map((item, idx) => (
                      <li key={idx} className="flex gap-3 text-muted-foreground">
                        <span className="text-destructive font-bold">✗</span>
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Registration Form */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h3 className="text-xl font-bold mb-6 text-foreground">
                  Register Now
                </h3>
                <form onSubmit={handleSubmit} className="space-y-4">
                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Departure Date
                    </label>
                    <select
                      value={selectedDate || ''}
                      onChange={(e) => setSelectedDate(e.target.value)}
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                    >
                      {program.upcomingDates?.map((date) => (
                        <option key={date} value={date}>
                          {date}
                        </option>
                      ))}
                    </select>
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Full Name
                    </label>
                    <input
                      type="text"
                      value={formData.name}
                      onChange={(e) =>
                        setFormData({ ...formData, name: e.target.value })
                      }
                      required
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="Your name"
                    />
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Email
                    </label>
                    <input
                      type="email"
                      value={formData.email}
                      onChange={(e) =>
                        setFormData({ ...formData, email: e.target.value })
                      }
                      required
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                    />
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Phone
                    </label>
                    <input
                      type="tel"
                      value={formData.phone}
                      onChange={(e) =>
                        setFormData({ ...formData, phone: e.target.value })
                      }
                      required
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                    />
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Passport Info
                    </label>
                    <input
                      type="text"
                      value={formData.passport}
                      onChange={(e) =>
                        setFormData({ ...formData, passport: e.target.value })
                      }
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="Passport number"
                    />
                  </div>

                  <Button type="submit" className="w-full bg-primary hover:bg-primary/90 text-white">
                    Register
                  </Button>
                </form>
              </div>

              {/* Quick Info */}
              <div className="bg-accent/10 border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Requirements</h4>
                <ul className="space-y-2 text-sm text-muted-foreground">
                  <li>• Valid passport</li>
                  <li>• Visa (if required)</li>
                  <li>• Travel insurance recommended</li>
                  <li>• Physical fitness level: {program.difficulty}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
