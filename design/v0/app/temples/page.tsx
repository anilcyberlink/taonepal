import { PageHero } from '@/components/page-hero'
import { TempleCard } from '@/components/temple-card'
import { mockTemples } from '@/lib/data/mock-data'

export const metadata = {
  title: 'Temple Projects | TAO Association of Nepal',
  description: 'Explore our sacred temple construction and restoration projects.',
}

export default function TemplesPage() {
  const completed = mockTemples.filter((t) => t.status === 'completed')
  const underConstruction = mockTemples.filter((t) => t.status === 'under-construction')
  const planned = mockTemples.filter((t) => t.status === 'planned')

  return (
    <>
      <PageHero
        title="Temple Projects"
        subtitle="Sacred spaces for spiritual practice"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Temples', href: '/temples' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
          {/* Completed */}
          {completed.length > 0 && (
            <div>
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Completed Projects
              </h2>
              <div className="grid md:grid-cols-3 gap-8">
                {completed.map((temple) => (
                  <TempleCard key={temple.id} {...temple} />
                ))}
              </div>
            </div>
          )}

          {/* Under Construction */}
          {underConstruction.length > 0 && (
            <div>
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Under Construction
              </h2>
              <div className="grid md:grid-cols-3 gap-8">
                {underConstruction.map((temple) => (
                  <TempleCard key={temple.id} {...temple} />
                ))}
              </div>
            </div>
          )}

          {/* Planned */}
          {planned.length > 0 && (
            <div>
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Planned Projects
              </h2>
              <div className="grid md:grid-cols-3 gap-8">
                {planned.map((temple) => (
                  <TempleCard key={temple.id} {...temple} />
                ))}
              </div>
            </div>
          )}
        </div>
      </section>
    </>
  )
}
