import { PageHero } from '@/components/page-hero'
import { EventCard } from '@/components/event-card'
import { mockEvents } from '@/lib/data/mock-data'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'

export const metadata = {
  title: 'Seminars & Events | TAO Association of Nepal',
  description: 'Explore our upcoming seminars, workshops, and spiritual events.',
}

export default function SeminarsPage() {
  const upcomingEvents = mockEvents.filter((e) => e.date !== 'past').slice(0, 6)
  const pastEvents = mockEvents.slice(3)

  return (
    <>
      <PageHero
        title="Seminars & Events"
        subtitle="Transform your spiritual journey"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Seminars', href: '/seminars' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <Tabs defaultValue="upcoming" className="w-full">
            <TabsList className="grid w-full grid-cols-2 md:grid-cols-3 mb-12">
              <TabsTrigger value="upcoming">Upcoming</TabsTrigger>
              <TabsTrigger value="all">All Events</TabsTrigger>
              <TabsTrigger value="past">Past</TabsTrigger>
            </TabsList>

            {/* Upcoming */}
            <TabsContent value="upcoming">
              <div className="grid md:grid-cols-3 gap-8">
                {upcomingEvents.map((event) => (
                  <EventCard key={event.id} {...event} />
                ))}
              </div>
            </TabsContent>

            {/* All */}
            <TabsContent value="all">
              <div className="grid md:grid-cols-3 gap-8">
                {mockEvents.map((event) => (
                  <EventCard key={event.id} {...event} />
                ))}
              </div>
            </TabsContent>

            {/* Past */}
            <TabsContent value="past">
              <div className="grid md:grid-cols-3 gap-8">
                {pastEvents.map((event) => (
                  <EventCard key={event.id} {...event} />
                ))}
              </div>
            </TabsContent>
          </Tabs>
        </div>
      </section>
    </>
  )
}
