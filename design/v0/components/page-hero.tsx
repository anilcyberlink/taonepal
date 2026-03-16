import { ReactNode } from 'react'

interface PageHeroProps {
  title: string
  subtitle?: string
  description?: ReactNode
  backgroundImage?: string
  breadcrumbs?: Array<{ label: string; href: string }>
  cta?: {
    label: string
    href: string
  }
}

export function PageHero({
  title,
  subtitle,
  description,
  backgroundImage,
  breadcrumbs,
  cta,
}: PageHeroProps) {
  return (
    <div
      className="relative w-full py-12 md:py-20 lg:py-28 bg-gradient-to-b from-primary/10 to-accent/5 overflow-hidden"
      style={
        backgroundImage
          ? {
              backgroundImage: `linear-gradient(rgba(196, 30, 58, 0.7), rgba(31, 58, 147, 0.7)), url('${backgroundImage}')`,
              backgroundSize: 'cover',
              backgroundPosition: 'center',
            }
          : undefined
      }
    >
      {/* Decorative elements */}
      <div className="absolute inset-0 overflow-hidden pointer-events-none">
        <div className="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl" />
        <div className="absolute bottom-0 left-0 w-96 h-96 bg-secondary/5 rounded-full blur-3xl" />
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Breadcrumbs */}
        {breadcrumbs && breadcrumbs.length > 0 && (
          <nav className="mb-8" aria-label="Breadcrumb">
            <ol className="flex items-center gap-2 text-sm">
              {breadcrumbs.map((crumb, idx) => (
                <li key={idx} className="flex items-center gap-2">
                  <a
                    href={crumb.href}
                    className="text-muted-foreground hover:text-foreground transition-colors"
                  >
                    {crumb.label}
                  </a>
                  {idx < breadcrumbs.length - 1 && (
                    <span className="text-muted-foreground">/</span>
                  )}
                </li>
              ))}
            </ol>
          </nav>
        )}

        {/* Content */}
        <div className="text-center max-w-3xl mx-auto">
          <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-4 text-balance">
            {title}
          </h1>

          {subtitle && (
            <p className="text-xl md:text-2xl text-primary mb-6 font-medium">
              {subtitle}
            </p>
          )}

          {description && (
            <div className="text-lg text-muted-foreground mb-8">
              {description}
            </div>
          )}

          {/* Decorative divider */}
          <div className="w-16 h-1 bg-gradient-to-r from-primary via-accent to-primary mx-auto my-8 rounded-full" />
        </div>
      </div>
    </div>
  )
}
