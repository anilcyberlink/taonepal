'use client'

import { PageHero } from '@/components/page-hero'
import { mockTemples } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { Button } from '@/components/ui/button'
import { Progress } from '@/components/ui/progress'
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from '@/components/ui/accordion'
import Image from 'next/image'
import Link from 'next/link'
import { Heart } from 'lucide-react'
import { useState } from 'react'
import { use } from 'react'

export default function TempleDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = use(params)
  const temple = mockTemples.find((t) => t.id === id)
  const [donationAmount, setDonationAmount] = useState('5000')

  if (!temple) {
    notFound()
  }

  const progressPercent = temple.progress || 0

  return (
    <>
      <PageHero
        title={temple.name}
        subtitle={temple.location}
        backgroundImage={temple.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Temples', href: '/temples' },
          { label: temple.name, href: `/temples/${temple.id}` },
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
                  src={temple.image}
                  alt={temple.name}
                  width={800}
                  height={400}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Description */}
              <div className="space-y-4">
                <h2 className="text-3xl font-bold text-foreground">About</h2>
                <p className="text-lg text-muted-foreground leading-relaxed">
                  {temple.fullDescription}
                </p>
                <p className="text-lg text-muted-foreground leading-relaxed">
                  {temple.significance}
                </p>
              </div>

              {/* Progress Timeline */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h2 className="text-2xl font-bold mb-6 text-foreground">
                  Construction Phases
                </h2>
                <div className="space-y-4">
                  {temple.constructionPhases?.map((phase, idx) => (
                    <div key={idx} className="flex gap-4">
                      <div className="flex flex-col items-center">
                        <div className="w-10 h-10 rounded-full bg-primary/20 border-2 border-primary flex items-center justify-center flex-shrink-0">
                          <div className="w-3 h-3 rounded-full bg-primary" />
                        </div>
                        {idx < (temple.constructionPhases?.length || 0) - 1 && (
                          <div className="w-1 h-12 bg-primary/20 mt-2" />
                        )}
                      </div>
                      <div className="pb-4">
                        <h4 className="font-bold text-foreground">{phase.name}</h4>
                        <p className="text-sm text-muted-foreground">{phase.date}</p>
                        <div className="text-xs mt-2">
                          <span
                            className={`px-2 py-1 rounded ${
                              phase.status === 'completed'
                                ? 'bg-green-500/20 text-green-700'
                                : phase.status === 'in-progress'
                                  ? 'bg-primary/20 text-primary'
                                  : 'bg-muted text-muted-foreground'
                            }`}
                          >
                            {phase.status.charAt(0).toUpperCase() +
                              phase.status.slice(1)}
                          </span>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>

              {/* Gallery */}
              {temple.gallery && temple.gallery.length > 0 && (
                <div>
                  <h2 className="text-2xl font-bold mb-6 text-foreground">Gallery</h2>
                  <div className="grid md:grid-cols-3 gap-4">
                    {temple.gallery.map((image, idx) => (
                      <div key={idx} className="rounded-lg overflow-hidden h-48">
                        <img
                          src={image}
                          alt={`${temple.name} gallery ${idx + 1}`}
                          className="w-full h-full object-cover hover:scale-105 transition-transform"
                        />
                      </div>
                    ))}
                  </div>
                </div>
              )}
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Funding Progress */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h3 className="text-xl font-bold mb-6 text-foreground">Funding</h3>

                <div className="mb-6">
                  <div className="flex justify-between items-center mb-3">
                    <span className="font-semibold text-foreground">
                      Rs. {(temple.raisedAmount || 0).toLocaleString()}
                    </span>
                    <span className="text-sm text-muted-foreground">
                      of Rs. {(temple.goalAmount || 0).toLocaleString()}
                    </span>
                  </div>
                  <Progress
                    value={
                      ((temple.raisedAmount || 0) / (temple.goalAmount || 1)) *
                      100
                    }
                    className="h-3"
                  />
                </div>

                {/* Donation Form */}
                <div className="space-y-4">
                  <div>
                    <label className="text-sm font-medium text-foreground block mb-3">
                      Donation Amount (Rs.)
                    </label>
                    <div className="grid grid-cols-2 gap-2 mb-3">
                      {['500', '1000', '5000', '10000'].map((amt) => (
                        <button
                          key={amt}
                          onClick={() => setDonationAmount(amt)}
                          className={`p-2 rounded-lg border transition-colors text-sm font-medium ${
                            donationAmount === amt
                              ? 'bg-primary text-white border-primary'
                              : 'border-border bg-background text-foreground hover:border-primary'
                          }`}
                        >
                          {amt}
                        </button>
                      ))}
                    </div>
                    <input
                      type="number"
                      value={donationAmount}
                      onChange={(e) => setDonationAmount(e.target.value)}
                      className="w-full px-3 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                      placeholder="Custom amount"
                    />
                  </div>

                  <Link href="/donations">
                    <Button className="w-full gap-2 bg-primary hover:bg-primary/90 text-white">
                      <Heart className="h-4 w-4" />
                      Donate
                    </Button>
                  </Link>
                </div>
              </div>

              {/* Quick Info */}
              <div className="bg-accent/10 border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Project Info</h4>
                <div className="space-y-3 text-sm text-muted-foreground">
                  <div>
                    <p className="font-semibold text-foreground">Status</p>
                    <p className="capitalize">{temple.status.replace('-', ' ')}</p>
                  </div>
                  <div>
                    <p className="font-semibold text-foreground">Location</p>
                    <p>{temple.location}</p>
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
