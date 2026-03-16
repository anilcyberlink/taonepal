'use client'

import { PageHero } from '@/components/page-hero'
import { mockEvents } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { Calendar, MapPin, User, Users } from 'lucide-react'
import { Button } from '@/components/ui/button'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import Image from 'next/image'
import { useState } from 'react'
import { use } from 'react'

export default function SeminarDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = use(params)
  const event = mockEvents.find((e) => e.id === id)
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    message: '',
  })

  if (!event) {
    notFound()
  }

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    alert('Thank you for registering! We will contact you soon.')
    setFormData({ name: '', email: '', phone: '', message: '' })
  }

  return (
    <>
      <PageHero
        title={event.title}
        subtitle={`${event.date} at ${event.time}`}
        backgroundImage={event.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Seminars', href: '/seminars' },
          { label: event.title, href: `/seminars/${event.id}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12">
            {/* Main Content */}
            <div className="md:col-span-2 space-y-8">
              {/* Event Image */}
              <div className="rounded-lg overflow-hidden h-96">
                <Image
                  src={event.image}
                  alt={event.title}
                  width={800}
                  height={400}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Details Grid */}
              <div className="grid md:grid-cols-2 gap-6 bg-card border border-border rounded-lg p-6">
                <div className="flex gap-4">
                  <Calendar className="h-6 w-6 text-primary flex-shrink-0" />
                  <div>
                    <p className="text-sm text-muted-foreground uppercase font-semibold">Date & Time</p>
                    <p className="font-bold text-foreground">{event.date}</p>
                    <p className="text-sm text-muted-foreground">{event.time}</p>
                  </div>
                </div>

                <div className="flex gap-4">
                  <MapPin className="h-6 w-6 text-primary flex-shrink-0" />
                  <div>
                    <p className="text-sm text-muted-foreground uppercase font-semibold">Location</p>
                    <p className="font-bold text-foreground">{event.location}</p>
                  </div>
                </div>

                {event.speaker && (
                  <div className="flex gap-4">
                    <User className="h-6 w-6 text-primary flex-shrink-0" />
                    <div>
                      <p className="text-sm text-muted-foreground uppercase font-semibold">Speaker</p>
                      <p className="font-bold text-foreground">{event.speaker}</p>
                    </div>
                  </div>
                )}

                {event.seatsLeft !== undefined && (
                  <div className="flex gap-4">
                    <Users className="h-6 w-6 text-primary flex-shrink-0" />
                    <div>
                      <p className="text-sm text-muted-foreground uppercase font-semibold">Availability</p>
                      <p className="font-bold text-foreground">
                        {event.seatsLeft} seats left
                      </p>
                    </div>
                  </div>
                )}
              </div>

              {/* Tabs */}
              <Tabs defaultValue="description" className="w-full">
                <TabsList className="grid w-full grid-cols-2 md:grid-cols-3">
                  <TabsTrigger value="description">About</TabsTrigger>
                  <TabsTrigger value="schedule">Schedule</TabsTrigger>
                  <TabsTrigger value="gallery">Gallery</TabsTrigger>
                </TabsList>

                <TabsContent value="description" className="space-y-4">
                  <p className="text-lg text-muted-foreground leading-relaxed">
                    {event.fullDescription}
                  </p>
                </TabsContent>

                <TabsContent value="schedule" className="space-y-4">
                  <div className="space-y-3">
                    {event.schedule?.map((item, idx) => (
                      <div key={idx} className="flex gap-4 pb-3 border-b border-border last:border-b-0">
                        <span className="font-bold text-primary whitespace-nowrap">
                          {item.time}
                        </span>
                        <span className="text-foreground">{item.activity}</span>
                      </div>
                    ))}
                  </div>
                </TabsContent>

                <TabsContent value="gallery">
                  <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                    {[1, 2, 3, 4, 5, 6].map((idx) => (
                      <div
                        key={idx}
                        className="rounded-lg overflow-hidden h-48 bg-muted"
                      >
                        <img
                          src={`https://placehold.co/400x300?text=Gallery+${idx}`}
                          alt="Event gallery"
                          className="w-full h-full object-cover hover:scale-105 transition-transform"
                        />
                      </div>
                    ))}
                  </div>
                </TabsContent>
              </Tabs>
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Registration Form */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h3 className="text-xl font-bold mb-6 text-foreground">Register Now</h3>
                <form onSubmit={handleSubmit} className="space-y-4">
                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Full Name
                    </label>
                    <input
                      type="text"
                      value={formData.name}
                      onChange={(e) => setFormData({ ...formData, name: e.target.value })}
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
                      onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                      required
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="your@email.com"
                    />
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Phone
                    </label>
                    <input
                      type="tel"
                      value={formData.phone}
                      onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                      required
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="+977-XX-XXXXXXX"
                    />
                  </div>

                  <div>
                    <label className="text-sm font-medium text-foreground block mb-2">
                      Message
                    </label>
                    <textarea
                      value={formData.message}
                      onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="Any questions?"
                      rows={3}
                    />
                  </div>

                  <Button type="submit" className="w-full bg-primary hover:bg-primary/90 text-white">
                    Register
                  </Button>
                </form>
              </div>

              {/* Quick Info */}
              <div className="bg-accent/10 border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Event Info</h4>
                <div className="space-y-3 text-sm text-muted-foreground">
                  <div>
                    <p className="font-semibold text-foreground">Category</p>
                    <p>{event.category}</p>
                  </div>
                  <div>
                    <p className="font-semibold text-foreground">Level</p>
                    <p>All levels welcome</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
