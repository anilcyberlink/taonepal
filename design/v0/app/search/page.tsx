'use client'

import { useState, useMemo } from 'react'
import { PageHero } from '@/components/page-hero'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import { mockEvents, mockTemples, mockBlogPosts, mockGurus, mockLocations } from '@/lib/data/mock-data'
import { EventCard } from '@/components/event-card'
import { TempleCard } from '@/components/temple-card'
import { BlogCard } from '@/components/blog-card'
import { GuruCard } from '@/components/guru-card'
import { Card, CardContent } from '@/components/ui/card'
import Link from 'next/link'
import { Search } from 'lucide-react'

export default function SearchPage() {
  const [searchQuery, setSearchQuery] = useState('')

  const results = useMemo(() => {
    const query = searchQuery.toLowerCase()

    if (!query.trim()) {
      return {
        events: [],
        temples: [],
        blog: [],
        gurus: [],
        locations: [],
      }
    }

    return {
      events: mockEvents.filter(
        (e) =>
          e.title.toLowerCase().includes(query) ||
          e.description?.toLowerCase().includes(query)
      ),
      temples: mockTemples.filter(
        (t) =>
          t.name.toLowerCase().includes(query) ||
          t.location.toLowerCase().includes(query)
      ),
      blog: mockBlogPosts.filter(
        (b) =>
          b.title.toLowerCase().includes(query) ||
          b.excerpt.toLowerCase().includes(query)
      ),
      gurus: mockGurus.filter(
        (g) =>
          g.name.toLowerCase().includes(query) ||
          g.title.toLowerCase().includes(query)
      ),
      locations: mockLocations.filter(
        (l) =>
          l.name.toLowerCase().includes(query) ||
          l.district.toLowerCase().includes(query)
      ),
    }
  }, [searchQuery])

  const totalResults =
    results.events.length +
    results.temples.length +
    results.blog.length +
    results.gurus.length +
    results.locations.length

  return (
    <>
      <PageHero
        title="Search"
        subtitle="Find what you're looking for"
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Search', href: '/search' },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Search Bar */}
          <div className="mb-12">
            <div className="relative">
              <Search className="absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-muted-foreground" />
              <input
                type="text"
                value={searchQuery}
                onChange={(e) => setSearchQuery(e.target.value)}
                placeholder="Search seminars, temples, gurus, blog posts..."
                className="w-full pl-12 pr-4 py-4 text-lg border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                autoFocus
              />
            </div>
          </div>

          {/* Results */}
          {searchQuery.trim() === '' ? (
            <div className="text-center py-20">
              <Search className="h-16 w-16 text-muted-foreground mx-auto mb-4 opacity-20" />
              <p className="text-xl text-muted-foreground">
                Enter a search term to find seminars, temples, gurus, and more
              </p>
            </div>
          ) : totalResults === 0 ? (
            <div className="text-center py-20">
              <p className="text-xl text-muted-foreground mb-4">
                No results found for "{searchQuery}"
              </p>
              <p className="text-muted-foreground">
                Try searching with different keywords
              </p>
            </div>
          ) : (
            <>
              <p className="text-sm text-muted-foreground mb-8">
                Found {totalResults} result{totalResults !== 1 ? 's' : ''} for "
                {searchQuery}"
              </p>

              <Tabs defaultValue="all" className="w-full">
                <TabsList className="grid w-full grid-cols-3 md:grid-cols-6 mb-8">
                  <TabsTrigger value="all">
                    All ({totalResults})
                  </TabsTrigger>
                  {results.events.length > 0 && (
                    <TabsTrigger value="events">
                      Events ({results.events.length})
                    </TabsTrigger>
                  )}
                  {results.temples.length > 0 && (
                    <TabsTrigger value="temples">
                      Temples ({results.temples.length})
                    </TabsTrigger>
                  )}
                  {results.blog.length > 0 && (
                    <TabsTrigger value="blog">
                      Blog ({results.blog.length})
                    </TabsTrigger>
                  )}
                  {results.gurus.length > 0 && (
                    <TabsTrigger value="gurus">
                      Gurus ({results.gurus.length})
                    </TabsTrigger>
                  )}
                  {results.locations.length > 0 && (
                    <TabsTrigger value="locations">
                      Locations ({results.locations.length})
                    </TabsTrigger>
                  )}
                </TabsList>

                {/* All Results */}
                <TabsContent value="all" className="space-y-8">
                  {results.events.length > 0 && (
                    <div>
                      <h3 className="text-2xl font-bold mb-4">Events</h3>
                      <div className="grid md:grid-cols-2 gap-6">
                        {results.events.slice(0, 4).map((event) => (
                          <EventCard key={event.id} event={event} />
                        ))}
                      </div>
                    </div>
                  )}

                  {results.temples.length > 0 && (
                    <div>
                      <h3 className="text-2xl font-bold mb-4">Temples</h3>
                      <div className="grid md:grid-cols-2 gap-6">
                        {results.temples.slice(0, 4).map((temple) => (
                          <TempleCard key={temple.id} temple={temple} />
                        ))}
                      </div>
                    </div>
                  )}

                  {results.gurus.length > 0 && (
                    <div>
                      <h3 className="text-2xl font-bold mb-4">Gurus</h3>
                      <div className="grid md:grid-cols-2 gap-6">
                        {results.gurus.slice(0, 4).map((guru) => (
                          <GuruCard key={guru.id} guru={guru} />
                        ))}
                      </div>
                    </div>
                  )}

                  {results.blog.length > 0 && (
                    <div>
                      <h3 className="text-2xl font-bold mb-4">Blog Posts</h3>
                      <div className="grid md:grid-cols-2 gap-6">
                        {results.blog.slice(0, 4).map((post) => (
                          <BlogCard key={post.id} post={post} />
                        ))}
                      </div>
                    </div>
                  )}

                  {results.locations.length > 0 && (
                    <div>
                      <h3 className="text-2xl font-bold mb-4">Locations</h3>
                      <div className="grid gap-4">
                        {results.locations.slice(0, 6).map((location) => (
                          <Link key={location.id} href={`/locations/${location.id}`}>
                            <Card className="hover:shadow-lg transition-shadow cursor-pointer">
                              <CardContent className="pt-6">
                                <h4 className="font-bold text-foreground">
                                  {location.name}
                                </h4>
                                <p className="text-sm text-muted-foreground">
                                  {location.district}
                                </p>
                              </CardContent>
                            </Card>
                          </Link>
                        ))}
                      </div>
                    </div>
                  )}
                </TabsContent>

                {/* Events Tab */}
                <TabsContent value="events" className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    {results.events.map((event) => (
                      <EventCard key={event.id} event={event} />
                    ))}
                  </div>
                </TabsContent>

                {/* Temples Tab */}
                <TabsContent value="temples" className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    {results.temples.map((temple) => (
                      <TempleCard key={temple.id} temple={temple} />
                    ))}
                  </div>
                </TabsContent>

                {/* Blog Tab */}
                <TabsContent value="blog" className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    {results.blog.map((post) => (
                      <BlogCard key={post.id} post={post} />
                    ))}
                  </div>
                </TabsContent>

                {/* Gurus Tab */}
                <TabsContent value="gurus" className="space-y-6">
                  <div className="grid md:grid-cols-3 gap-6">
                    {results.gurus.map((guru) => (
                      <GuruCard key={guru.id} guru={guru} />
                    ))}
                  </div>
                </TabsContent>

                {/* Locations Tab */}
                <TabsContent value="locations" className="space-y-4">
                  {results.locations.map((location) => (
                    <Link key={location.id} href={`/locations/${location.id}`}>
                      <Card className="hover:shadow-lg transition-shadow cursor-pointer">
                        <CardContent className="pt-6">
                          <h4 className="font-bold text-foreground">{location.name}</h4>
                          <p className="text-sm text-muted-foreground">
                            {location.district}
                          </p>
                          <p className="text-sm text-muted-foreground mt-2">
                            {location.phone}
                          </p>
                        </CardContent>
                      </Card>
                    </Link>
                  ))}
                </TabsContent>
              </Tabs>
            </>
          )}
        </div>
      </section>
    </>
  )
}
