import { PageHero } from '@/components/page-hero'
import { GuruCard } from '@/components/guru-card'
import { mockGurus } from '@/lib/data/mock-data'

export const metadata = {
  title: 'Gurus & Masters | TAO Association of Nepal',
  description: 'Meet the experienced spiritual teachers who guide our community.',
}

export default function GurusPage() {
  return (
    <>
      <PageHero
        title="Our Gurus & Masters"
        subtitle="Experienced spiritual teachers"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Gurus', href: '/gurus' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <p className="text-center text-lg text-muted-foreground max-w-2xl mx-auto mb-12">
            Our gurus bring decades of spiritual practice and teaching experience.
            Learn from masters dedicated to authentic Tao wisdom.
          </p>

          <div className="grid md:grid-cols-3 gap-8">
            {mockGurus.map((guru) => (
              <GuruCard key={guru.id} {...guru} />
            ))}
          </div>
        </div>
      </section>
    </>
  )
}
