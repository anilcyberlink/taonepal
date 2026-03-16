import { PageHero } from '@/components/page-hero'
import { mockLocations } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { Mail, Phone, MapPin, Clock, MessageCircle } from 'lucide-react'
import { Button } from '@/components/ui/button'
import Image from 'next/image'
import Link from 'next/link'
import { Badge } from '@/components/ui/badge'

export async function generateStaticParams() {
  return mockLocations.map((location) => ({
    id: location.id,
  }))
}

export async function generateMetadata({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const location = mockLocations.find((l) => l.id === id)
  if (!location) return {}

  return {
    title: `${location.name} | TAO Association`,
    description: `Visit ${location.name} in ${location.district}. Hours: ${location.hours}`,
  }
}

export default async function LocationDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const location = mockLocations.find((l) => l.id === id)

  if (!location) {
    notFound()
  }

  const otherLocations = mockLocations.filter((l) => l.id !== location.id).slice(0, 3)

  return (
    <>
      <PageHero
        title={location.name}
        subtitle={location.district}
        backgroundImage={location.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Locations', href: '/locations' },
          { label: location.name, href: `/locations/${location.id}` },
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
                  src={location.image}
                  alt={location.name}
                  width={800}
                  height={400}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Contact Info */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h2 className="text-2xl font-bold mb-6 text-foreground">
                  Contact Information
                </h2>
                <div className="space-y-4">
                  <div className="flex gap-3 items-start">
                    <MapPin className="h-6 w-6 text-primary flex-shrink-0 mt-1" />
                    <div>
                      <p className="font-semibold text-foreground">Address</p>
                      <p className="text-muted-foreground">{location.address}</p>
                    </div>
                  </div>

                  <div className="flex gap-3 items-center">
                    <Phone className="h-6 w-6 text-primary flex-shrink-0" />
                    <div>
                      <p className="font-semibold text-foreground">Phone</p>
                      <a
                        href={`tel:${location.phone}`}
                        className="text-primary hover:underline"
                      >
                        {location.phone}
                      </a>
                    </div>
                  </div>

                  <div className="flex gap-3 items-center">
                    <Mail className="h-6 w-6 text-primary flex-shrink-0" />
                    <div>
                      <p className="font-semibold text-foreground">Email</p>
                      <a
                        href={`mailto:${location.email}`}
                        className="text-primary hover:underline"
                      >
                        {location.email}
                      </a>
                    </div>
                  </div>

                  <div className="flex gap-3 items-start">
                    <Clock className="h-6 w-6 text-primary flex-shrink-0 mt-1" />
                    <div>
                      <p className="font-semibold text-foreground">Hours</p>
                      <p className="text-muted-foreground">{location.hours}</p>
                    </div>
                  </div>
                </div>
              </div>

              {/* Activities */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h2 className="text-2xl font-bold mb-6 text-foreground">
                  Regular Activities
                </h2>
                <div className="space-y-3">
                  {location.activities.map((activity, idx) => (
                    <div key={idx} className="flex gap-3 items-start">
                      <div className="h-2 w-2 rounded-full bg-primary mt-2 flex-shrink-0" />
                      <span className="text-muted-foreground">{activity}</span>
                    </div>
                  ))}
                </div>
              </div>

              {/* Map */}
              <div className="bg-card border border-border rounded-lg overflow-hidden h-96">
                <iframe
                  width="100%"
                  height="100%"
                  frameBorder="0"
                  src={`https://www.openstreetmap.org/export/embed.html?bbox=${location.lng - 0.01}%2C${location.lat - 0.01}%2C${location.lng + 0.01}%2C${location.lat + 0.01}&layer=mapnik&marker=${location.lat}%2C${location.lng}`}
                />
              </div>
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Contact Form CTA */}
              <div className="bg-primary text-white rounded-lg p-6">
                <h3 className="text-lg font-bold mb-4">Get in Touch</h3>
                <p className="text-sm text-white/90 mb-6">
                  Have questions? Send us a message.
                </p>
                <Link href={`/contact?location=${location.id}`}>
                  <Button className="w-full gap-2 bg-white text-primary hover:bg-accent">
                    <MessageCircle className="h-4 w-4" />
                    Send Message
                  </Button>
                </Link>
              </div>

              {/* Nearby Locations */}
              {otherLocations.length > 0 && (
                <div className="bg-card border border-border rounded-lg p-6">
                  <h3 className="font-bold text-foreground mb-4">Nearby Locations</h3>
                  <div className="space-y-3">
                    {otherLocations.map((loc) => (
                      <Link
                        key={loc.id}
                        href={`/locations/${loc.id}`}
                        className="block p-3 rounded-lg border border-border hover:bg-accent/10 transition-colors"
                      >
                        <p className="font-semibold text-foreground text-sm">
                          {loc.name}
                        </p>
                        <p className="text-xs text-muted-foreground">
                          {loc.district}
                        </p>
                      </Link>
                    ))}
                  </div>
                </div>
              )}

              {/* Quick Stats */}
              <div className="bg-accent/10 border border-border rounded-lg p-6">
                <h3 className="font-bold text-foreground mb-4">Quick Info</h3>
                <div className="space-y-2 text-sm text-muted-foreground">
                  <div>
                    <p className="font-semibold text-foreground text-xs uppercase">
                      District
                    </p>
                    <p>{location.district}</p>
                  </div>
                  <div>
                    <p className="font-semibold text-foreground text-xs uppercase">
                      Activities
                    </p>
                    <div className="flex flex-wrap gap-1 mt-1">
                      {location.activities.slice(0, 2).map((act, idx) => (
                        <Badge key={idx} variant="secondary" className="text-xs">
                          {act}
                        </Badge>
                      ))}
                    </div>
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
