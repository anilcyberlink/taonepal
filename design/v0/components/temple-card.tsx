import Link from 'next/link'
import Image from 'next/image'
import { MapPin } from 'lucide-react'
import { Badge } from '@/components/ui/badge'
import { Button } from '@/components/ui/button'
import { Progress } from '@/components/ui/progress'

interface TempleCardProps {
  id: string
  name: string
  location: string
  image: string
  status: 'completed' | 'under-construction' | 'planned'
  description: string
  progress?: number
  raisedAmount?: number
  goalAmount?: number
}

export function TempleCard({
  id,
  name,
  location,
  image,
  status,
  description,
  progress = 0,
  raisedAmount,
  goalAmount,
}: TempleCardProps) {
  const statusConfig = {
    completed: { label: 'Completed', color: 'bg-green-500' },
    'under-construction': { label: 'Under Construction', color: 'bg-primary' },
    planned: { label: 'Planned', color: 'bg-secondary' },
  }

  const config = statusConfig[status]

  return (
    <Link href={`/temples/${id}`}>
      <div className="group overflow-hidden rounded-lg border border-border bg-card hover:shadow-lg transition-all duration-300 flex flex-col h-full">
        {/* Image */}
        <div className="relative h-56 overflow-hidden bg-muted">
          <Image
            src={image}
            alt={name}
            fill
            className="object-cover group-hover:scale-105 transition-transform duration-300"
          />
          <div className="absolute top-3 right-3">
            <Badge className={`${config.color} text-white`}>
              {config.label}
            </Badge>
          </div>
        </div>

        {/* Content */}
        <div className="p-6 flex flex-col flex-1">
          {/* Title & Location */}
          <h3 className="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
            {name}
          </h3>
          <div className="flex items-center gap-1 text-sm text-muted-foreground mb-3">
            <MapPin className="h-4 w-4" />
            {location}
          </div>

          {/* Description */}
          <p className="text-sm text-muted-foreground mb-4 flex-1 line-clamp-2">
            {description}
          </p>

          {/* Progress */}
          {status !== 'planned' && progress !== undefined && (
            <div className="mb-4">
              <div className="flex items-center justify-between mb-2">
                <span className="text-xs font-semibold text-foreground">
                  Progress
                </span>
                <span className="text-xs text-muted-foreground">
                  {progress}%
                </span>
              </div>
              <Progress value={progress} className="h-2" />
            </div>
          )}

          {/* Funding */}
          {raisedAmount !== undefined && goalAmount !== undefined && (
            <div className="mb-4 p-3 bg-accent/10 rounded-lg">
              <div className="text-xs text-muted-foreground mb-1">
                Funding Goal
              </div>
              <div className="font-bold text-sm text-foreground">
                Rs. {raisedAmount.toLocaleString()} / Rs. {goalAmount.toLocaleString()}
              </div>
            </div>
          )}

          {/* CTA */}
          <Button
            className="w-full bg-primary hover:bg-primary/90 text-white"
            asChild
          >
            <span>Learn More</span>
          </Button>
        </div>
      </div>
    </Link>
  )
}
