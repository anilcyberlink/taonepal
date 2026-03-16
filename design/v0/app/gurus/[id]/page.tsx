import { PageHero } from '@/components/page-hero'
import { mockGurus, mockEvents } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { EventCard } from '@/components/event-card'
import Image from 'next/image'
import { Button } from '@/components/ui/button'
import Link from 'next/link'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'

export async function generateStaticParams() {
  return mockGurus.map((guru) => ({
    id: guru.id,
  }))
}

export async function generateMetadata({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const guru = mockGurus.find((g) => g.id === id)
  if (!guru) return {}

  return {
    title: `${guru.name} | TAO Association`,
    description: `Learn about ${guru.name}, ${guru.title.toLowerCase()}`,
  }
}

export default async function GuruDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const guru = mockGurus.find((g) => g.id === id)
  const guruEvents = mockEvents.filter((e) => e.speaker === guru?.name)

  if (!guru) {
    notFound()
  }

  return (
    <>
      <PageHero
        title={guru.name}
        subtitle={guru.title}
        backgroundImage={guru.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Gurus', href: '/gurus' },
          { label: guru.name, href: `/gurus/${guru.id}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12">
            {/* Main Content */}
            <div className="md:col-span-2 space-y-8">
              {/* Profile Image */}
              <div className="rounded-lg overflow-hidden h-96">
                <Image
                  src={guru.image}
                  alt={guru.name}
                  width={600}
                  height={400}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Content Tabs */}
              <Tabs defaultValue="biography" className="w-full">
                <TabsList className="grid w-full grid-cols-3 md:grid-cols-4">
                  <TabsTrigger value="biography">Biography</TabsTrigger>
                  <TabsTrigger value="teachings">Teachings</TabsTrigger>
                  <TabsTrigger value="books">Works</TabsTrigger>
                  <TabsTrigger value="events">Events</TabsTrigger>
                </TabsList>

                <TabsContent value="biography" className="space-y-4 mt-6">
                  <p className="text-lg text-muted-foreground leading-relaxed">
                    {guru.biography}
                  </p>
                </TabsContent>

                <TabsContent value="teachings" className="space-y-4 mt-6">
                  <p className="text-lg text-muted-foreground leading-relaxed">
                    {guru.teachings}
                  </p>
                </TabsContent>

                <TabsContent value="books" className="space-y-4 mt-6">
                  {guru.books && guru.books.length > 0 ? (
                    <div className="space-y-3">
                      <p className="font-semibold text-foreground">Published Works</p>
                      {guru.books.map((book, idx) => (
                        <div
                          key={idx}
                          className="p-4 bg-card border border-border rounded-lg"
                        >
                          <p className="font-medium text-foreground">{book}</p>
                        </div>
                      ))}
                    </div>
                  ) : (
                    <p className="text-muted-foreground">
                      No published works at this time.
                    </p>
                  )}
                </TabsContent>

                <TabsContent value="events" className="space-y-4 mt-6">
                  {guruEvents.length > 0 ? (
                    <div className="grid md:grid-cols-2 gap-6">
                      {guruEvents.map((event) => (
                        <EventCard key={event.id} {...event} />
                      ))}
                    </div>
                  ) : (
                    <p className="text-muted-foreground">
                      No upcoming events with this guru at this time.
                    </p>
                  )}
                </TabsContent>
              </Tabs>
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Quick Info */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h3 className="text-xl font-bold mb-6 text-foreground">About</h3>
                <div className="space-y-4">
                  <div>
                    <p className="text-xs font-semibold text-muted-foreground uppercase">
                      Title
                    </p>
                    <p className="text-foreground font-medium">{guru.title}</p>
                  </div>
                  <div>
                    <p className="text-xs font-semibold text-muted-foreground uppercase">
                      Lineage
                    </p>
                    <p className="text-foreground font-medium">{guru.lineage}</p>
                  </div>
                  <div>
                    <p className="text-xs font-semibold text-muted-foreground uppercase">
                      Specialty
                    </p>
                    <p className="text-foreground font-medium">{guru.specialty}</p>
                  </div>
                  <div>
                    <p className="text-xs font-semibold text-muted-foreground uppercase">
                      Bio
                    </p>
                    <p className="text-foreground text-sm">{guru.bio}</p>
                  </div>
                </div>
              </div>

              {/* Contact CTA */}
              <div className="bg-primary text-white rounded-lg p-6">
                <h4 className="font-bold mb-4">Learn from {guru.name}</h4>
                <p className="text-sm text-white/90 mb-4">
                  Join an upcoming seminar or book a one-on-one session.
                </p>
                <Link href="/contact">
                  <Button className="w-full bg-white text-primary hover:bg-accent">
                    Get in Touch
                  </Button>
                </Link>
              </div>

              {/* Video Section */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Video Messages</h4>
                <div className="bg-muted rounded-lg h-48 flex items-center justify-center">
                  <p className="text-sm text-muted-foreground">
                    Video coming soon
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
