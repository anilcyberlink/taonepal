import { PageHero } from '@/components/page-hero'
import { BlogCard } from '@/components/blog-card'
import { mockBlogPosts } from '@/lib/data/mock-data'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'

export const metadata = {
  title: 'Blog | TAO Association of Nepal',
  description: 'Articles, teachings, and insights from the TAO community.',
}

export default function BlogPage() {
  const categories = ['All', ...new Set(mockBlogPosts.map((p) => p.category))]
  const featured = mockBlogPosts[0]
  const rest = mockBlogPosts.slice(1)

  return (
    <>
      <PageHero
        title="Blog & Articles"
        subtitle="Insights, teachings, and community stories"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Blog', href: '/blog' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Featured Post */}
          {featured && (
            <div className="mb-16 grid md:grid-cols-2 gap-8 bg-card border border-border rounded-lg overflow-hidden">
              <div className="relative h-64 md:h-auto">
                <img
                  src={featured.image}
                  alt={featured.title}
                  className="w-full h-full object-cover"
                />
              </div>
              <div className="p-8 flex flex-col justify-center">
                <p className="text-sm font-bold text-primary uppercase mb-2">
                  Featured
                </p>
                <h2 className="text-3xl font-bold mb-4 text-foreground">
                  {featured.title}
                </h2>
                <p className="text-lg text-muted-foreground mb-4">
                  {featured.excerpt}
                </p>
                <div className="flex items-center gap-4 text-sm text-muted-foreground mb-6">
                  <span>{featured.author}</span>
                  <span>•</span>
                  <span>{featured.date}</span>
                  <span>•</span>
                  <span>{featured.readTime} min read</span>
                </div>
                <a
                  href={`/blog/${featured.id}`}
                  className="inline-block px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium w-fit"
                >
                  Read Article
                </a>
              </div>
            </div>
          )}

          {/* Category Filter */}
          <Tabs defaultValue="All" className="w-full mb-12">
            <TabsList className="grid w-full gap-2 auto-cols-max">
              {categories.map((cat) => (
                <TabsTrigger key={cat} value={cat}>
                  {cat}
                </TabsTrigger>
              ))}
            </TabsList>

            {categories.map((cat) => (
              <TabsContent key={cat} value={cat}>
                <div className="grid md:grid-cols-3 gap-8 mt-8">
                  {(cat === 'All'
                    ? rest
                    : rest.filter((p) => p.category === cat)
                  ).map((post) => (
                    <BlogCard key={post.id} {...post} />
                  ))}
                </div>
              </TabsContent>
            ))}
          </Tabs>
        </div>
      </section>
    </>
  )
}
