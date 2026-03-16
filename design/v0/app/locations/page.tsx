import { PageHero } from '@/components/page-hero'
import { mockLocations } from '@/lib/data/mock-data'
import Link from 'next/link'
import Image from 'next/image'
import { MapPin, Phone, Mail, Clock } from 'lucide-react'
import { Badge } from '@/components/ui/badge'

export const metadata = {
  title: 'Our Locations | TAO Association of Nepal',
  description: 'Find TAO Association centers and branches across Nepal.',
}

export default function LocationsPage() {
  return (
    <>
      <PageHero
        title="Our Centers & Branches"
        subtitle="Visit us in your region"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Locations', href: '/locations' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Filter Info */}
          <div className="mb-12 p-4 bg-accent/10 rounded-lg border border-border">
            <p className="text-sm text-muted-foreground">
              Showing all {mockLocations.length} locations across Nepal
            </p>
          </div>

          {/* Locations Grid */}
          <div className="grid md:grid-cols-2 gap-8">
            {mockLocations.map((location) => (
              <Link key={location.id} href={`/locations/${location.id}`}>
                <div className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all h-full flex flex-col">
                  {/* Image */}
                  <div className="relative h-56 overflow-hidden bg-muted">
                    <Image
                      src={location.image}
                      alt={location.name}
                      width={600}
                      height={400}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                  </div>

                  {/* Content */}
                  <div className="p-6 flex flex-col flex-1">
                    <h3 className="text-xl font-bold text-foreground mb-1 group-hover:text-primary transition-colors">
                      {location.name}
                    </h3>
                    <Badge variant="outline" className="w-fit mb-4">
                      {location.district}
                    </Badge>

                    {/* Address */}
                    <div className="space-y-2 mb-6 flex-1 text-sm text-muted-foreground">
                      <div className="flex gap-2 items-start">
                        <MapPin className="h-4 w-4 mt-0.5 flex-shrink-0 text-primary" />
                        <span>{location.address}</span>
                      </div>

                      <div className="flex gap-2 items-center">
                        <Phone className="h-4 w-4 flex-shrink-0 text-primary" />
                        <a href={`tel:${location.phone}`} className="hover:text-primary">
                          {location.phone}
                        </a>
                      </div>

                      <div className="flex gap-2 items-center">
                        <Mail className="h-4 w-4 flex-shrink-0 text-primary" />
                        <a href={`mailto:${location.email}`} className="hover:text-primary">
                          {location.email}
                        </a>
                      </div>

                      <div className="flex gap-2 items-start">
                        <Clock className="h-4 w-4 mt-0.5 flex-shrink-0 text-primary" />
                        <span>{location.hours}</span>
                      </div>
                    </div>

                    {/* Activities */}
                    <div className="mb-4">
                      <p className="text-xs font-semibold text-foreground mb-2 uppercase">
                        Activities
                      </p>
                      <div className="flex flex-wrap gap-2">
                        {location.activities.map((activity, idx) => (
                          <Badge key={idx} variant="secondary" className="text-xs">
                            {activity}
                          </Badge>
                        ))}
                      </div>
                    </div>

                    {/* CTA */}
                    <span className="block text-center py-2 bg-primary/10 text-primary font-medium rounded group-hover:bg-primary group-hover:text-white transition-colors cursor-pointer">
                      View Details
                    </span>
                  </div>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>
    </>
  )
}
