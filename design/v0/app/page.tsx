import Link from 'next/link'
import { Button } from '@/components/ui/button'
import { PageHero } from '@/components/page-hero'
import { SectionHeader } from '@/components/section-header'
import { EventCard } from '@/components/event-card'
import { TempleCard } from '@/components/temple-card'
import { BlogCard } from '@/components/blog-card'
import { mockEvents, mockTemples, mockBlogPosts } from '@/lib/data/mock-data'
import { MapPin, Users, Heart, BookOpen } from 'lucide-react'

export const metadata = {
  title: 'TAO Association of Nepal - Home',
  description:
    'Discover Tao wisdom, spiritual seminars, temple projects, and travel programs with the TAO Association of Nepal.',
}

export default function HomePage() {
  const upcomingEvents = mockEvents.slice(0, 3)
  const temples = mockTemples.slice(0, 3)
  const recentBlogs = mockBlogPosts.slice(0, 3)

  return (
    <>
      {/* Hero Section */}
      <PageHero
        title="Welcome to TAO Association of Nepal"
        subtitle="Exploring Tao Wisdom and Spiritual Growth"
        description={
          <p className="text-lg">
            Join us on a journey of spiritual discovery, meditation, and cultural exploration.
          </p>
        }
        backgroundImage="https://placehold.co/1920x600?text=Tao+Temple"
      />

      {/* Philosophy Intro */}
      <section className="py-16 md:py-24 bg-gradient-to-b from-accent/5 to-transparent">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold mb-6 text-foreground">
                Understanding Tao Philosophy
              </h2>
              <p className="text-lg text-muted-foreground mb-4 leading-relaxed">
                Tao, often translated as "the Way," represents the fundamental nature of the universe. It encompasses the balance of opposites—yin and yang—and the principle of flowing with nature rather than against it.
              </p>
              <p className="text-lg text-muted-foreground mb-6 leading-relaxed">
                At TAO Association of Nepal, we explore these ancient teachings through meditation, seminars, and spiritual practices adapted to modern life.
              </p>
              <Link href="/about">
                <Button className="gap-2 bg-primary hover:bg-primary/90 text-white">
                  <BookOpen className="h-5 w-5" />
                  Learn Our Story
                </Button>
              </Link>
            </div>
            <div className="rounded-lg overflow-hidden shadow-lg h-96">
              <iframe
                className="w-full h-full"
                src="https://www.youtube.com/embed/dQw4w9WgXcQ?start=0"
                title="Tao Philosophy Introduction"
                allowFullScreen
              />
            </div>
          </div>
        </div>
      </section>

      {/* Decorative Divider */}
      <div className="max-w-7xl mx-auto px-4 py-8">
        <div className="h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full" />
      </div>

      {/* Upcoming Seminars */}
      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            subtitle="Coming Soon"
            title="Upcoming Seminars & Events"
            description="Join our community for transformative learning experiences"
          />
          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {upcomingEvents.map((event) => (
              <EventCard
                key={event.id}
                id={event.id}
                title={event.title}
                date={event.date}
                time={event.time}
                location={event.location}
                speaker={event.speaker}
                image={event.image}
                seatsLeft={event.seatsLeft}
                category={event.category}
                excerpt={event.excerpt}
              />
            ))}
          </div>
          <div className="text-center">
            <Link href="/seminars">
              <Button size="lg" className="bg-primary hover:bg-primary/90 text-white">
                View All Events
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Temples Section */}
      <section className="py-16 md:py-24 bg-secondary/5">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            subtitle="Sacred Projects"
            title="Temple Construction & Restoration"
            description="Supporting the creation and restoration of sacred spaces for spiritual practice"
          />
          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {temples.map((temple) => (
              <TempleCard
                key={temple.id}
                id={temple.id}
                name={temple.name}
                location={temple.location}
                image={temple.image}
                status={temple.status}
                description={temple.description}
                progress={temple.progress}
                raisedAmount={temple.raisedAmount}
                goalAmount={temple.goalAmount}
              />
            ))}
          </div>
          <div className="text-center">
            <Link href="/temples">
              <Button size="lg" className="bg-primary hover:bg-primary/90 text-white">
                Explore All Projects
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Travel Programs Teaser */}
      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            subtitle="Spiritual Journeys"
            title="Travel Programs"
            description="Join our guided pilgrimages to sacred destinations around the world"
          />
          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {[
              {
                destination: 'Thailand',
                image: 'https://placehold.co/400x300?text=Thailand',
                description: 'Sacred temples and meditation retreats',
              },
              {
                destination: 'India',
                image: 'https://placehold.co/400x300?text=India',
                description: 'Holy pilgrimage sites and spiritual teachings',
              },
              {
                destination: 'China',
                image: 'https://placehold.co/400x300?text=China',
                description: 'Birthplace of Taoism and ancient monasteries',
              },
            ].map((program) => (
              <div
                key={program.destination}
                className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all"
              >
                <div className="relative h-48 overflow-hidden bg-muted">
                  <img
                    src={program.image}
                    alt={program.destination}
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
                <div className="p-6">
                  <h3 className="text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                    {program.destination}
                  </h3>
                  <p className="text-muted-foreground mb-4">{program.description}</p>
                  <Button className="w-full bg-primary hover:bg-primary/90 text-white" asChild>
                    <Link href="/travel">Learn More</Link>
                  </Button>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Donation CTA */}
      <section className="py-16 md:py-24 bg-gradient-to-r from-primary/90 to-secondary/90 text-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl font-bold mb-4">
            Support Our Mission
          </h2>
          <p className="text-lg mb-8 text-white/90">
            Your contributions help us maintain our centers, support temple projects, and offer programs to the community.
          </p>
          <Link href="/donations">
            <Button size="lg" className="gap-2 bg-white text-primary hover:bg-accent">
              <Heart className="h-5 w-5" />
              Make a Donation
            </Button>
          </Link>
        </div>
      </section>

      {/* Latest Blog Posts */}
      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            subtitle="Insights & Stories"
            title="Latest Articles"
            description="Explore teachings, retreats, and spiritual insights from our community"
          />
          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {recentBlogs.map((post) => (
              <BlogCard
                key={post.id}
                id={post.id}
                title={post.title}
                excerpt={post.excerpt}
                image={post.image}
                author={post.author}
                date={post.date}
                category={post.category}
                readTime={post.readTime}
              />
            ))}
          </div>
          <div className="text-center">
            <Link href="/blog">
              <Button size="lg" className="bg-primary hover:bg-primary/90 text-white">
                Read All Articles
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Quick Stats */}
      <section className="py-12 md:py-16 bg-secondary/10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-4 gap-8 text-center">
            {[
              { icon: Users, label: 'Active Members', value: '2,500+' },
              { label: 'Branches', value: '4' },
              { label: 'Annual Events', value: '50+' },
              { label: 'Gurus', value: '12' },
            ].map((stat, idx) => (
              <div key={idx}>
                {stat.icon && <stat.icon className="h-12 w-12 mx-auto mb-3 text-primary" />}
                <div className="text-3xl font-bold text-foreground mb-2">
                  {stat.value}
                </div>
                <div className="text-muted-foreground">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  )
}
