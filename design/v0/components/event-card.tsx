import Link from 'next/link'
import Image from 'next/image'
import { Calendar, MapPin, User, Users } from 'lucide-react'
import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'

interface EventCardProps {
  id: string
  title: string
  date: string
  time: string
  location: string
  speaker?: string
  image: string
  seatsLeft?: number
  category?: string
  excerpt?: string
}

export function EventCard({
  id,
  title,
  date,
  time,
  location,
  speaker,
  image,
  seatsLeft,
  category,
  excerpt,
}: EventCardProps) {
  const [eventDate, eventMonth] = date.split(' ')
  const isUpcoming = new Date(date) > new Date()

  return (
    <Link href={`/seminars/${id}`}>
      <div className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all duration-300 h-full flex flex-col">
        {/* Image Container */}
        <div className="relative h-48 overflow-hidden bg-muted">
          <Image
            src={image}
            alt={title}
            fill
            className="object-cover group-hover:scale-105 transition-transform duration-300"
          />
          {category && (
            <div className="absolute top-3 right-3">
              <Badge className="bg-primary/90 text-white">{category}</Badge>
            </div>
          )}
          {seatsLeft !== undefined && (
            <div className="absolute top-3 left-3">
              <Badge
                variant={seatsLeft > 0 ? 'default' : 'destructive'}
                className={seatsLeft > 0 ? 'bg-accent text-accent-foreground' : ''}
              >
                {seatsLeft > 0 ? `${seatsLeft} seats left` : 'Full'}
              </Badge>
            </div>
          )}
        </div>

        {/* Content */}
        <div className="p-4 flex flex-col flex-1">
          {/* Date Badge */}
          <div className="flex gap-2 items-center mb-3">
            <div className="w-12 h-12 rounded-lg bg-primary/10 flex flex-col items-center justify-center border border-primary/20">
              <span className="text-sm font-bold text-primary">{eventMonth.slice(0, 3)}</span>
              <span className="text-xs font-bold text-primary">{eventDate}</span>
            </div>
            <div className="flex-1">
              <p className="text-sm font-semibold text-foreground">{time}</p>
              <div className="flex items-center gap-1 text-xs text-muted-foreground">
                <MapPin className="h-3 w-3" />
                {location}
              </div>
            </div>
          </div>

          {/* Title */}
          <h3 className="font-bold text-lg mb-2 line-clamp-2 group-hover:text-primary transition-colors">
            {title}
          </h3>

          {/* Speaker */}
          {speaker && (
            <div className="flex items-center gap-2 text-sm text-muted-foreground mb-3">
              <User className="h-4 w-4" />
              <span>{speaker}</span>
            </div>
          )}

          {/* Excerpt */}
          {excerpt && (
            <p className="text-sm text-muted-foreground mb-4 line-clamp-2">
              {excerpt}
            </p>
          )}

          {/* CTA */}
          <Button
            className="w-full mt-auto bg-primary hover:bg-primary/90 text-white"
            asChild
          >
            <span>{isUpcoming ? 'Register Now' : 'View Details'}</span>
          </Button>
        </div>
      </div>
    </Link>
  )
}
