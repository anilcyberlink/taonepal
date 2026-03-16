'use client'

import { useState } from 'react'
import { use } from 'react'
import { PageHero } from '@/components/page-hero'
import { GalleryLightbox } from '@/components/gallery-lightbox'
import Link from 'next/link'
import { Button } from '@/components/ui/button'
import { ArrowLeft } from 'lucide-react'

interface GalleryPageProps {
  params: Promise<{ category: string }>
}

const categories = ['Seminars', 'Temples', 'Travel', 'Community', 'Gurus']

export async function generateStaticParams() {
  return categories.map((category) => ({
    category: category.toLowerCase(),
  }))
}

export default function GalleryCategoryPage({ params }: GalleryPageProps) {
  const { category } = use(params)
  const categoryName = category.charAt(0).toUpperCase() + category.slice(1)
  const [selectedImageId, setSelectedImageId] = useState<number | null>(null)

  const galleryImages = Array.from({ length: 16 }, (_, i) => ({
    id: i + 1,
    src: `https://placehold.co/800x600?text=${categoryName}+${i + 1}`,
    category: categoryName,
    caption: `${categoryName} Moment ${i + 1}`,
    date: '2025-03-15',
  }))

  const selectedImage = galleryImages.find((img) => img.id === selectedImageId)

  return (
    <>
      <PageHero
        title={`${categoryName} Gallery`}
        subtitle={`Photos from our ${categoryName.toLowerCase()} programs`}
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Gallery', href: '/gallery' },
          { label: categoryName, href: `/gallery/${params.category}` },
        ]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="mb-8">
            <Link href="/gallery">
              <Button variant="outline" className="flex items-center gap-2">
                <ArrowLeft className="h-4 w-4" />
                Back to Gallery
              </Button>
            </Link>
          </div>

          <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            {galleryImages.map((image) => (
              <div
                key={image.id}
                onClick={() => setSelectedImageId(image.id)}
                className="group relative overflow-hidden rounded-lg aspect-square bg-muted cursor-pointer"
              >
                <img
                  src={image.src}
                  alt={image.caption}
                  className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div className="absolute inset-0 bg-black/0 group-hover:bg-black/50 transition-colors duration-300 flex items-end p-4">
                  <div className="text-white opacity-0 group-hover:opacity-100 transition-opacity">
                    <p className="font-bold text-sm">{image.caption}</p>
                    <p className="text-xs text-white/80">{image.date}</p>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {selectedImage && (
        <GalleryLightbox
          images={galleryImages}
          onClose={() => setSelectedImageId(null)}
        />
      )}
    </>
  )
}
