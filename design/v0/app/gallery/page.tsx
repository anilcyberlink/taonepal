'use client'

import { useState } from 'react'
import { PageHero } from '@/components/page-hero'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import { GalleryLightbox } from '@/components/gallery-lightbox'

const categories = ['All', 'Seminars', 'Temples', 'Travel', 'Community', 'Gurus']

const galleryImages = Array.from({ length: 24 }, (_, i) => ({
  id: i + 1,
  src: `https://placehold.co/800x600?text=Gallery+${i + 1}`,
  category: categories[Math.floor(Math.random() * (categories.length - 1)) + 1],
  caption: `Sacred Moment ${i + 1}`,
  date: '2025-03-15',
}))

export default function GalleryPage() {
  const [selectedImageId, setSelectedImageId] = useState<number | null>(null)

  const selectedImage = galleryImages.find((img) => img.id === selectedImageId)
  const filteredForLightbox = selectedImage
    ? galleryImages.filter((img) => img.category === selectedImage.category || selectedImage.category === 'All')
    : []

  return (
    <>
      <PageHero
        title="Photo Gallery"
        subtitle="Moments from our spiritual community"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Gallery', href: '/gallery' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <Tabs defaultValue="All" className="w-full">
            <TabsList className="grid w-full grid-cols-3 md:grid-cols-6 mb-12">
              {categories.map((cat) => (
                <TabsTrigger key={cat} value={cat}>
                  {cat}
                </TabsTrigger>
              ))}
            </TabsList>

            {categories.map((cat) => (
              <TabsContent key={cat} value={cat}>
                <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                  {(cat === 'All'
                    ? galleryImages
                    : galleryImages.filter((img) => img.category === cat)
                  ).map((image) => (
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
              </TabsContent>
            ))}
          </Tabs>
        </div>
      </section>

      {selectedImage && (
        <GalleryLightbox
          images={filteredForLightbox}
          onClose={() => setSelectedImageId(null)}
        />
      )}
    </>
  )
}
