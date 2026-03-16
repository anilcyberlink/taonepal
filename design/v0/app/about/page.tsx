import { PageHero } from '@/components/page-hero'
import { SectionHeader } from '@/components/section-header'
import { GuruCard } from '@/components/guru-card'
import { mockGurus } from '@/lib/data/mock-data'
import { Button } from '@/components/ui/button'
import Link from 'next/link'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'

export const metadata = {
  title: 'About TAO Association of Nepal',
  description: 'Learn about our history, mission, vision, and the gurus who guide us.',
}

export default function AboutPage() {
  const timeline = [
    {
      year: '2020',
      title: 'Foundation & Registration',
      description: 'TAO Association formally registered in Nepal with government approval.',
    },
    {
      year: '2021',
      title: 'First Seminar',
      description: 'Hosted our inaugural seminar with over 200 participants.',
    },
    {
      year: '2022',
      title: 'Sitapaila Temple Completion',
      description: 'Opened our main temple and spiritual center in Kathmandu.',
    },
    {
      year: '2023',
      title: 'Expansion',
      description: 'Established branches in Pokhara, Bhaktapur, and Patan.',
    },
    {
      year: '2024',
      title: 'International Programs',
      description: 'Launched travel programs and extended retreat offerings.',
    },
    {
      year: '2025',
      title: 'Growth & Impact',
      description: 'Serving over 2,500 active members with 50+ annual programs.',
    },
  ]

  return (
    <>
      <PageHero
        title="About TAO Association of Nepal"
        subtitle="Our Journey of Spiritual Wisdom"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'About', href: '/about' }]}
      />

      {/* History Timeline */}
      <section className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            title="Our Journey"
            description="How we grew from a vision to a thriving spiritual community"
          />

          {/* Timeline */}
          <div className="space-y-8">
            {timeline.map((event, idx) => (
              <div key={event.year} className="flex gap-6">
                <div className="flex flex-col items-center">
                  <div className="w-16 h-16 rounded-full bg-primary/10 border-2 border-primary flex items-center justify-center flex-shrink-0">
                    <span className="font-bold text-primary text-sm">{event.year}</span>
                  </div>
                  {idx < timeline.length - 1 && (
                    <div className="w-1 h-12 bg-gradient-to-b from-primary to-transparent mt-2" />
                  )}
                </div>
                <div className="pb-8">
                  <h3 className="text-xl font-bold text-foreground mb-2">
                    {event.title}
                  </h3>
                  <p className="text-muted-foreground">{event.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Mission & Vision */}
      <section className="py-16 md:py-24 bg-secondary/5">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-12">
            <div className="bg-card rounded-lg border border-border p-8">
              <h3 className="text-2xl font-bold text-foreground mb-4">Our Mission</h3>
              <p className="text-muted-foreground leading-relaxed mb-4">
                To promote understanding and practice of Tao philosophy, facilitating spiritual growth and personal transformation through authentic teachings and community engagement.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                We bridge ancient wisdom with modern life, making Taoist teachings accessible to all who seek spiritual enlightenment and inner peace.
              </p>
            </div>

            <div className="bg-card rounded-lg border border-border p-8">
              <h3 className="text-2xl font-bold text-foreground mb-4">Our Vision</h3>
              <p className="text-muted-foreground leading-relaxed mb-4">
                A world where Tao philosophy enriches the lives of practitioners across all cultures and backgrounds.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                We envision Nepal as a beacon of Taoist spiritual wisdom, with thriving meditation centers and temples serving seekers of enlightenment.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Tao Philosophy */}
      <section className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            title="Tao Philosophy Essentials"
            description="The core principles that guide our teachings and practices"
          />

          <Tabs defaultValue="tao" className="w-full">
            <TabsList className="grid w-full grid-cols-3 md:grid-cols-5 mb-8">
              <TabsTrigger value="tao">Tao (道)</TabsTrigger>
              <TabsTrigger value="yinyang">Yin Yang</TabsTrigger>
              <TabsTrigger value="wuwei">Wu Wei</TabsTrigger>
              <TabsTrigger value="elements">Five Elements</TabsTrigger>
              <TabsTrigger value="chi">Chi (氣)</TabsTrigger>
            </TabsList>

            <TabsContent value="tao" className="space-y-4">
              <h4 className="text-xl font-bold text-foreground">The Tao: The Way</h4>
              <p className="text-muted-foreground leading-relaxed">
                Tao (道), literally meaning "the Way," is the fundamental principle underlying the universe. It is the ultimate reality that transcends all categories and descriptions. The Tao cannot be named or fully understood intellectually—it must be experienced through practice and meditation.
              </p>
              <blockquote className="border-l-4 border-primary pl-4 italic text-muted-foreground">
                "The Tao that can be spoken is not the eternal Tao. The name that can be named is not the eternal name." - Tao Te Ching
              </blockquote>
            </TabsContent>

            <TabsContent value="yinyang" className="space-y-4">
              <h4 className="text-xl font-bold text-foreground">Yin and Yang (陰陽)</h4>
              <p className="text-muted-foreground leading-relaxed">
                The concept of Yin and Yang represents complementary opposites—dark and light, passive and active, inner and outer. They are not in conflict but in dynamic balance, creating harmony. Everything contains both yin and yang in varying proportions.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                Health, happiness, and spiritual development come from maintaining balance between these opposing forces.
              </p>
            </TabsContent>

            <TabsContent value="wuwei" className="space-y-4">
              <h4 className="text-xl font-bold text-foreground">Wu Wei: Non-Action</h4>
              <p className="text-muted-foreground leading-relaxed">
                Wu Wei (無為), often misunderstood as "doing nothing," actually means "non-forced action" or "effortless action." It's about flowing with natural processes rather than forcing outcomes.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                Practice Wu Wei by aligning your actions with the natural flow of the universe, like water flowing around obstacles rather than resisting them.
              </p>
            </TabsContent>

            <TabsContent value="elements" className="space-y-4">
              <h4 className="text-xl font-bold text-foreground">The Five Elements</h4>
              <p className="text-muted-foreground leading-relaxed">
                Wood, Fire, Earth, Metal, and Water represent different energies and qualities in nature and within us. Each element has associated organs, emotions, colors, seasons, and tastes.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                Understanding the five elements helps balance our physical health, emotional wellbeing, and spiritual development.
              </p>
            </TabsContent>

            <TabsContent value="chi" className="space-y-4">
              <h4 className="text-xl font-bold text-foreground">Chi (氣): Life Energy</h4>
              <p className="text-muted-foreground leading-relaxed">
                Chi (or Qi) is the vital life force flowing through all living beings and the universe. It circulates through meridians in the body and can be cultivated through meditation, breathing exercises, and movement practices.
              </p>
              <p className="text-muted-foreground leading-relaxed">
                Free-flowing chi brings health and vitality, while blocked chi leads to illness and stagnation.
              </p>
            </TabsContent>
          </Tabs>
        </div>
      </section>

      {/* Our Gurus */}
      <section className="py-16 md:py-24 bg-secondary/5">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            subtitle="Meet Our Teachers"
            title="Our Gurus & Masters"
            description="Experienced spiritual teachers dedicated to sharing Tao wisdom"
          />

          <div className="grid md:grid-cols-3 gap-8 mb-12">
            {mockGurus.map((guru) => (
              <GuruCard
                key={guru.id}
                id={guru.id}
                name={guru.name}
                title={guru.title}
                image={guru.image}
                bio={guru.bio}
              />
            ))}
          </div>

          <div className="text-center">
            <Link href="/gurus">
              <Button size="lg" className="bg-primary hover:bg-primary/90 text-white">
                Explore All Gurus
              </Button>
            </Link>
          </div>
        </div>
      </section>

      {/* Org Chart */}
      <section className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <SectionHeader
            title="Organization Structure"
            description="How we organize to serve our community"
          />

          <div className="bg-card border border-border rounded-lg p-8">
            <div className="space-y-8">
              {/* Level 1 */}
              <div className="flex justify-center">
                <div className="bg-primary text-white rounded-lg px-6 py-4 font-bold text-center">
                  General Assembly
                </div>
              </div>

              <div className="flex justify-center">
                <div className="w-1 h-8 bg-border" />
              </div>

              {/* Level 2 */}
              <div className="flex justify-center">
                <div className="bg-secondary text-white rounded-lg px-6 py-4 font-bold text-center">
                  Board of Directors
                </div>
              </div>

              <div className="flex justify-center">
                <div className="w-1 h-8 bg-border" />
              </div>

              {/* Level 3 */}
              <div className="grid md:grid-cols-3 gap-4 justify-center max-w-2xl mx-auto">
                {[
                  'Spiritual Council',
                  'Administrative Department',
                  'Community Outreach',
                ].map((dept) => (
                  <div
                    key={dept}
                    className="bg-accent/10 border border-accent rounded-lg px-4 py-3 text-center font-semibold text-foreground"
                  >
                    {dept}
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
