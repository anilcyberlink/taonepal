import { PageHero } from '@/components/page-hero'
import { mockTemples } from '@/lib/data/mock-data'
import { Progress } from '@/components/ui/progress'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { DonationForm } from '@/components/donation-form'
import Image from 'next/image'

interface DonationDetailProps {
  params: Promise<{ projectId: string }>
}

export async function generateStaticParams() {
  return mockTemples.map((temple) => ({
    projectId: temple.id,
  }))
}

export async function generateMetadata({ params }: DonationDetailProps) {
  const { projectId } = await params
  const temple = mockTemples.find((t) => t.id === projectId)
  return {
    title: `Donate to ${temple?.name} | TAO Association`,
    description: `Help us build ${temple?.name}. Your donation makes a difference.`,
  }
}

export default async function DonationDetailPage({ params }: DonationDetailProps) {
  const { projectId } = await params
  const temple = mockTemples.find((t) => t.id === projectId) || mockTemples[0]
  const progressPercentage = (temple.amountRaised / temple.amountGoal) * 100

  const impactBreakdown = [
    { amount: 'Rs. 500', impact: 'Provides meals for 10 volunteers for a day' },
    { amount: 'Rs. 1,000', impact: 'Buys construction materials for a section' },
    { amount: 'Rs. 5,000', impact: 'Funds one day of labor for 5 workers' },
    { amount: 'Rs. 10,000', impact: 'Supports construction for one week' },
  ]

  return (
    <>
      <PageHero
        title={`Help Build ${temple.name}`}
        subtitle={`Join us in constructing this sacred space`}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Donations', href: '/donations' },
          { label: temple.name, href: `/donations/${params.projectId}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-12">
            {/* Project Details */}
            <div className="space-y-8">
              {/* Hero Image */}
              <div className="relative aspect-video rounded-lg overflow-hidden">
                <img
                  src={`https://placehold.co/600x400?text=${temple.name}`}
                  alt={temple.name}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Progress */}
              <Card>
                <CardHeader>
                  <CardTitle>Construction Progress</CardTitle>
                </CardHeader>
                <CardContent className="space-y-4">
                  <div className="space-y-2">
                    <div className="flex justify-between text-sm">
                      <span className="text-muted-foreground">Funds Raised</span>
                      <span className="font-bold">
                        Rs. {temple.amountRaised.toLocaleString()} / Rs. {temple.amountGoal.toLocaleString()}
                      </span>
                    </div>
                    <Progress value={progressPercentage} className="h-3" />
                    <p className="text-xs text-muted-foreground text-right">
                      {progressPercentage.toFixed(1)}% complete
                    </p>
                  </div>
                </CardContent>
              </Card>

              {/* Description */}
              <Card>
                <CardHeader>
                  <CardTitle>About This Project</CardTitle>
                </CardHeader>
                <CardContent className="prose max-w-none">
                  <p className="text-muted-foreground">
                    {temple.significance}
                  </p>
                  <p className="text-muted-foreground mt-4">
                    Located in {temple.location}, this temple project aims to create a spiritual sanctuary for the community. Your contribution directly supports the construction of this sacred space.
                  </p>
                </CardContent>
              </Card>

              {/* Impact Breakdown */}
              <Card>
                <CardHeader>
                  <CardTitle>Your Impact</CardTitle>
                </CardHeader>
                <CardContent>
                  <div className="space-y-4">
                    {impactBreakdown.map((item, idx) => (
                      <div key={idx} className="pb-4 border-b last:border-b-0 last:pb-0">
                        <p className="font-semibold text-primary">{item.amount}</p>
                        <p className="text-sm text-muted-foreground">{item.impact}</p>
                      </div>
                    ))}
                  </div>
                </CardContent>
              </Card>
            </div>

            {/* Donation Form */}
            <div>
              <DonationForm projectName={temple.name} projectId={params.projectId} />
            </div>
          </div>

          {/* Recent Donations */}
          <div className="mt-20">
            <h3 className="text-2xl font-bold mb-8 text-foreground">
              Recent Donors
            </h3>
            <div className="grid md:grid-cols-2 gap-4">
              {[
                { name: 'Anonymous', amount: 'Rs. 25,000', date: 'Mar 15, 2025' },
                { name: 'Rajesh Poudel', amount: 'Rs. 10,000', date: 'Mar 14, 2025' },
                { name: 'Anonymous', amount: 'Rs. 5,000', date: 'Mar 13, 2025' },
                { name: 'Priya Sharma', amount: 'Rs. 10,000', date: 'Mar 12, 2025' },
              ].map((donor, idx) => (
                <Card key={idx}>
                  <CardContent className="pt-6">
                    <p className="font-semibold text-foreground">{donor.name}</p>
                    <p className="text-primary font-bold">{donor.amount}</p>
                    <p className="text-xs text-muted-foreground">{donor.date}</p>
                  </CardContent>
                </Card>
              ))}
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
