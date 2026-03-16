import { PageHero } from '@/components/page-hero'
import { mockTravelPrograms } from '@/lib/data/mock-data'
import Link from 'next/link'
import Image from 'next/image'
import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'
import { MapPin, Calendar, Users, TrendingUp } from 'lucide-react'

export const metadata = {
  title: 'Travel Programs | TAO Association of Nepal',
  description: 'Join our guided spiritual journeys to sacred temples worldwide.',
}

export default function TravelPage() {
  return (
    <>
      <PageHero
        title="Spiritual Travel Programs"
        subtitle="Pilgrimage journeys to sacred destinations"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Travel', href: '/travel' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <p className="text-center text-lg text-muted-foreground max-w-2xl mx-auto mb-12">
            Join our guided spiritual journeys to sacred destinations worldwide.
            Experience authentic teachings and connect with enlightened masters.
          </p>

          <div className="grid md:grid-cols-1 lg:grid-cols-2 gap-8">
            {mockTravelPrograms.map((program) => (
              <Link key={program.id} href={`/travel/${program.id}`}>
                <div className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all h-full flex flex-col">
                  {/* Image */}
                  <div className="relative h-64 overflow-hidden bg-muted">
                    <Image
                      src={program.image}
                      alt={program.destination}
                      width={600}
                      height={400}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                  </div>

                  {/* Content */}
                  <div className="p-8 flex flex-col flex-1">
                    {/* Title */}
                    <h3 className="text-2xl font-bold mb-2 group-hover:text-primary transition-colors">
                      {program.destination}
                    </h3>
                    <p className="text-sm text-muted-foreground mb-4">
                      {program.country}
                    </p>

                    {/* Description */}
                    <p className="text-muted-foreground mb-6 flex-1">
                      {program.shortDescription}
                    </p>

                    {/* Details Grid */}
                    <div className="grid grid-cols-3 gap-4 mb-6 py-6 border-t border-b border-border">
                      <div className="text-center">
                        <div className="font-bold text-foreground">
                          {program.duration}
                        </div>
                        <div className="text-xs text-muted-foreground">Duration</div>
                      </div>
                      <div className="text-center">
                        <div className="font-bold text-foreground">
                          {program.groupSize}
                        </div>
                        <div className="text-xs text-muted-foreground">Group Size</div>
                      </div>
                      <div className="text-center">
                        <div className="font-bold text-foreground">
                          Rs. {(program.cost / 1000).toFixed(0)}k
                        </div>
                        <div className="text-xs text-muted-foreground">Cost</div>
                      </div>
                    </div>

                    {/* CTA */}
                    <Button className="w-full bg-primary hover:bg-primary/90 text-white">
                      Learn More
                    </Button>
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
