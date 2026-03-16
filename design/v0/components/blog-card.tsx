import Link from 'next/link'
import Image from 'next/image'
import { Calendar, User, ArrowRight } from 'lucide-react'
import { Badge } from '@/components/ui/badge'

interface BlogCardProps {
  id: string
  title: string
  excerpt: string
  image: string
  author: string
  date: string
  category: string
  readTime?: number
}

export function BlogCard({
  id,
  title,
  excerpt,
  image,
  author,
  date,
  category,
  readTime,
}: BlogCardProps) {
  return (
    <Link href={`/blog/${id}`}>
      <article className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all duration-300 flex flex-col h-full">
        {/* Image */}
        <div className="relative h-48 overflow-hidden bg-muted">
          <Image
            src={image}
            alt={title}
            fill
            className="object-cover group-hover:scale-105 transition-transform duration-300"
          />
        </div>

        {/* Content */}
        <div className="p-6 flex flex-col flex-1">
          {/* Meta */}
          <div className="flex items-center gap-2 mb-3">
            <Badge variant="outline">{category}</Badge>
            {readTime && (
              <span className="text-xs text-muted-foreground">
                {readTime} min read
              </span>
            )}
          </div>

          {/* Title */}
          <h3 className="font-bold text-xl mb-2 line-clamp-2 group-hover:text-primary transition-colors">
            {title}
          </h3>

          {/* Excerpt */}
          <p className="text-sm text-muted-foreground mb-4 flex-1 line-clamp-2">
            {excerpt}
          </p>

          {/* Footer */}
          <div className="flex items-center justify-between pt-4 border-t border-border">
            <div className="flex flex-col gap-1 text-xs text-muted-foreground">
              <div className="flex items-center gap-1">
                <User className="h-3 w-3" />
                {author}
              </div>
              <div className="flex items-center gap-1">
                <Calendar className="h-3 w-3" />
                {date}
              </div>
            </div>
            <ArrowRight className="h-4 w-4 group-hover:translate-x-1 transition-transform" />
          </div>
        </div>
      </article>
    </Link>
  )
}
