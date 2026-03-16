import Link from 'next/link'
import { Button } from '@/components/ui/button'

export const metadata = {
  title: 'Page Not Found - TAO Association',
  description: 'The page you are looking for does not exist.',
}

export default function NotFound() {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gradient-to-b from-accent/5 to-transparent">
      <div className="max-w-md mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div className="mb-8">
          <h1 className="text-7xl md:text-8xl font-bold text-primary mb-4">
            404
          </h1>
          <h2 className="text-4xl font-bold text-foreground mb-4">
            Page Not Found
          </h2>
          <p className="text-lg text-muted-foreground mb-8">
            "The Way that can be walked is not the eternal Way." - Tao Te Ching
          </p>
          <p className="text-muted-foreground mb-8">
            The page you seek does not exist on this path. Let us guide you back
            to the way of wisdom.
          </p>
        </div>

        <div className="space-y-4">
          <Link href="/">
            <Button size="lg" className="w-full bg-primary hover:bg-primary/90 text-white">
              Return Home
            </Button>
          </Link>
          <Link href="/contact">
            <Button
              size="lg"
              variant="outline"
              className="w-full border-border text-foreground hover:bg-accent/10"
            >
              Contact Support
            </Button>
          </Link>
        </div>

        {/* Decorative Quote */}
        <div className="mt-12 pt-8 border-t border-border">
          <p className="italic text-muted-foreground text-sm">
            In the garden of knowledge, sometimes we find ourselves on unfamiliar
            paths. Such is the nature of the journey toward enlightenment.
          </p>
        </div>
      </div>
    </div>
  )
}
