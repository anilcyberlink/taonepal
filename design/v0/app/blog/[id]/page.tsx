import { PageHero } from '@/components/page-hero'
import { mockBlogPosts } from '@/lib/data/mock-data'
import { notFound } from 'next/navigation'
import { Calendar, User } from 'lucide-react'
import Image from 'next/image'
import { Badge } from '@/components/ui/badge'

export async function generateStaticParams() {
  return mockBlogPosts.map((post) => ({
    id: post.id,
  }))
}

export async function generateMetadata({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const post = mockBlogPosts.find((p) => p.id === id)
  if (!post) return {}

  return {
    title: `${post.title} | TAO Blog`,
    description: post.excerpt,
  }
}

export default async function BlogDetailPage({ params }: { params: Promise<{ id: string }> }) {
  const { id } = await params
  const post = mockBlogPosts.find((p) => p.id === id)
  const otherPosts = mockBlogPosts.filter((p) => p.id !== id).slice(0, 3)

  if (!post) {
    notFound()
  }

  return (
    <>
      <PageHero
        title={post.title}
        backgroundImage={post.image}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Blog', href: '/blog' },
          { label: post.title, href: `/blog/${post.id}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Article Header */}
          <div className="mb-12 pb-8 border-b border-border">
            <div className="flex items-center gap-4 mb-6 flex-wrap">
              <Badge className="bg-primary text-white">{post.category}</Badge>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <Calendar className="h-4 w-4" />
                {post.date}
              </div>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                {post.readTime && `${post.readTime} min read`}
              </div>
            </div>

            <div className="flex items-center gap-4 mb-6">
              <div className="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center">
                <User className="h-6 w-6 text-primary" />
              </div>
              <div>
                <p className="font-semibold text-foreground">{post.author}</p>
                <p className="text-sm text-muted-foreground">Contributor</p>
              </div>
            </div>
          </div>

          {/* Featured Image */}
          <div className="rounded-lg overflow-hidden h-96 mb-12">
            <Image
              src={post.image}
              alt={post.title}
              width={800}
              height={400}
              className="w-full h-full object-cover"
            />
          </div>

          {/* Article Content */}
          <article className="prose prose-invert max-w-none mb-16">
            <p className="text-xl text-muted-foreground leading-relaxed mb-6">
              {post.excerpt}
            </p>

            <p className="text-lg text-muted-foreground leading-relaxed mb-6">
              {post.content}
            </p>

            {/* Pull Quote */}
            <blockquote className="border-l-4 border-primary pl-6 italic text-lg text-muted-foreground my-8">
              "The path to enlightenment is not found in chasing what is beyond,
              but in understanding what is within." - Ancient Tao wisdom
            </blockquote>

            <p className="text-lg text-muted-foreground leading-relaxed mb-6">
              Through regular practice and meditation, we begin to understand the
              deeper principles of Tao and how they apply to our daily lives. The
              journey is not about reaching a destination, but about transforming
              ourselves along the way.
            </p>
          </article>

          {/* Tags */}
          <div className="mb-12 pb-12 border-b border-border">
            <p className="text-sm font-semibold text-muted-foreground mb-3 uppercase">
              Tags
            </p>
            <div className="flex flex-wrap gap-2">
              {['Tao Philosophy', 'Meditation', 'Spiritual Practice'].map(
                (tag) => (
                  <Badge key={tag} variant="outline">
                    {tag}
                  </Badge>
                )
              )}
            </div>
          </div>

          {/* Related Posts */}
          <section>
            <h2 className="text-2xl font-bold mb-8 text-foreground">
              Related Articles
            </h2>
            <div className="grid md:grid-cols-3 gap-6">
              {otherPosts.map((relatedPost) => (
                <a
                  key={relatedPost.id}
                  href={`/blog/${relatedPost.id}`}
                  className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all"
                >
                  <div className="relative h-40 overflow-hidden bg-muted">
                    <Image
                      src={relatedPost.image}
                      alt={relatedPost.title}
                      width={400}
                      height={300}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform"
                    />
                  </div>
                  <div className="p-4">
                    <h3 className="font-bold text-sm line-clamp-2 group-hover:text-primary transition-colors">
                      {relatedPost.title}
                    </h3>
                    <p className="text-xs text-muted-foreground mt-2">
                      {relatedPost.date}
                    </p>
                  </div>
                </a>
              ))}
            </div>
          </section>
        </div>
      </section>
    </>
  )
}
