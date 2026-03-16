'use client'

import { useState } from 'react'
import { Dialog, DialogContent } from '@/components/ui/dialog'
import { ChevronLeft, ChevronRight, X } from 'lucide-react'
import { Button } from '@/components/ui/button'

interface GalleryImage {
  id: number
  src: string
  category: string
  caption: string
  date: string
}

interface GalleryLightboxProps {
  images: GalleryImage[]
  onClose: () => void
}

export function GalleryLightbox({ images, onClose }: GalleryLightboxProps) {
  const [currentIndex, setCurrentIndex] = useState(0)

  const goToPrevious = () => {
    setCurrentIndex((prevIndex) =>
      prevIndex === 0 ? images.length - 1 : prevIndex - 1
    )
  }

  const goToNext = () => {
    setCurrentIndex((prevIndex) =>
      prevIndex === images.length - 1 ? 0 : prevIndex + 1
    )
  }

  const currentImage = images[currentIndex]

  return (
    <Dialog open={true} onOpenChange={onClose}>
      <DialogContent className="max-w-4xl p-0 overflow-hidden bg-black border-0">
        <div className="relative w-full aspect-video bg-black flex items-center justify-center">
          <img
            src={currentImage.src}
            alt={currentImage.caption}
            className="max-w-full max-h-full object-contain"
          />

          {/* Navigation Buttons */}
          <Button
            onClick={goToPrevious}
            variant="ghost"
            size="icon"
            className="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full"
          >
            <ChevronLeft className="h-6 w-6" />
          </Button>

          <Button
            onClick={goToNext}
            variant="ghost"
            size="icon"
            className="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/40 text-white rounded-full"
          >
            <ChevronRight className="h-6 w-6" />
          </Button>

          {/* Close Button */}
          <Button
            onClick={onClose}
            variant="ghost"
            size="icon"
            className="absolute top-4 right-4 bg-white/20 hover:bg-white/40 text-white rounded-full"
          >
            <X className="h-6 w-6" />
          </Button>

          {/* Counter */}
          <div className="absolute bottom-4 left-4 text-white text-sm font-medium">
            {currentIndex + 1} / {images.length}
          </div>
        </div>

        {/* Image Info */}
        <div className="bg-card border-t border-border p-6">
          <h3 className="text-lg font-bold text-foreground mb-2">
            {currentImage.caption}
          </h3>
          <p className="text-sm text-muted-foreground">
            {currentImage.category} • {currentImage.date}
          </p>
        </div>
      </DialogContent>
    </Dialog>
  )
}
