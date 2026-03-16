import Link from 'next/link'
import Image from 'next/image'
import { Button } from '@/components/ui/button'

interface GuruCardProps {
  id: string
  name: string
  title: string
  image: string
  bio: string
}

export function GuruCard({ id, name, title, image, bio }: GuruCardProps) {
  return (
    <Link href={`/gurus/${id}`}>
      <div className="group overflow-hidden rounded-lg bg-card border border-border hover:shadow-lg transition-all duration-300 flex flex-col h-full">
        {/* Image */}
        <div className="relative h-64 overflow-hidden bg-muted">
          <Image
            src={image}
            alt={name}
            fill
            className="object-cover group-hover:scale-110 transition-transform duration-300"
          />
        </div>

        {/* Content */}
        <div className="p-6 flex flex-col flex-1">
          <h3 className="font-bold text-xl text-foreground group-hover:text-primary transition-colors mb-1">
            {name}
          </h3>
          <p className="text-sm text-primary font-medium mb-3">{title}</p>
          <p className="text-sm text-muted-foreground flex-1 line-clamp-3 mb-4">
            {bio}
          </p>
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
