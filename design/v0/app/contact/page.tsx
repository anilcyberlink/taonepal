import { PageHero } from '@/components/page-hero'
import { ContactForm } from '@/components/contact-form'
import { mockLocations } from '@/lib/data/mock-data'
import { Mail, Phone, MapPin, Clock } from 'lucide-react'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from '@/components/ui/accordion'

export const metadata = {
  title: 'Contact Us | TAO Association of Nepal',
  description: 'Get in touch with TAO Association. Find locations and contact information.',
}

export default function ContactPage() {
  return (
    <>
      <PageHero
        title="Contact Us"
        subtitle="We'd love to hear from you"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Contact', href: '/contact' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12">
            {/* Contact Form */}
            <div className="md:col-span-2">
              <ContactForm />
            </div>

            {/* Contact Info */}
            <div className="space-y-6">
              {/* Main Office */}
              <Card>
                <CardHeader>
                  <CardTitle>Head Office</CardTitle>
                </CardHeader>
                <CardContent className="space-y-4">
                  <div className="flex gap-3">
                    <MapPin className="h-5 w-5 text-primary flex-shrink-0 mt-1" />
                    <div>
                      <p className="font-semibold text-foreground text-sm">Address</p>
                      <p className="text-sm text-muted-foreground">
                        Sitapaila, Kathmandu, Nepal
                      </p>
                    </div>
                  </div>

                  <div className="flex gap-3">
                    <Phone className="h-5 w-5 text-primary flex-shrink-0" />
                    <div>
                      <p className="font-semibold text-foreground text-sm">Phone</p>
                      <a
                        href="tel:+977-1-4700000"
                        className="text-sm text-primary hover:underline"
                      >
                        +977-1-4700000
                      </a>
                    </div>
                  </div>

                  <div className="flex gap-3">
                    <Mail className="h-5 w-5 text-primary flex-shrink-0" />
                    <div>
                      <p className="font-semibold text-foreground text-sm">Email</p>
                      <a
                        href="mailto:info@taoassociation.org"
                        className="text-sm text-primary hover:underline"
                      >
                        info@taoassociation.org
                      </a>
                    </div>
                  </div>

                  <div className="flex gap-3">
                    <Clock className="h-5 w-5 text-primary flex-shrink-0" />
                    <div>
                      <p className="font-semibold text-foreground text-sm">Hours</p>
                      <p className="text-sm text-muted-foreground">
                        Mon - Fri: 9AM - 6PM<br/>Sat: 10AM - 4PM<br/>Sun: Closed
                      </p>
                    </div>
                  </div>
                </CardContent>
              </Card>

              {/* Emergency Contact */}
              <Card className="bg-primary/10 border-primary">
                <CardHeader>
                  <CardTitle className="text-lg">Spiritual Guidance</CardTitle>
                </CardHeader>
                <CardContent>
                  <p className="text-sm text-muted-foreground mb-4">
                    Need immediate spiritual support or guidance?
                  </p>
                  <a
                    href="tel:+977-1-4700000"
                    className="block text-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium"
                  >
                    Call Now
                  </a>
                </CardContent>
              </Card>
            </div>
          </div>

          {/* Branches */}
          <div className="mt-16">
            <h2 className="text-3xl font-bold mb-8 text-foreground">
              Our Branches
            </h2>
            <Accordion type="single" collapsible className="w-full">
              {mockLocations.map((location) => (
                <AccordionItem key={location.id} value={location.id}>
                  <AccordionTrigger className="text-lg font-bold hover:text-primary">
                    {location.name} - {location.district}
                  </AccordionTrigger>
                  <AccordionContent className="space-y-4">
                    <div>
                      <p className="font-semibold text-foreground text-sm">
                        Address
                      </p>
                      <p className="text-muted-foreground text-sm">
                        {location.address}
                      </p>
                    </div>
                    <div>
                      <p className="font-semibold text-foreground text-sm">
                        Contact
                      </p>
                      <p className="text-muted-foreground text-sm">
                        {location.phone} | {location.email}
                      </p>
                    </div>
                    <div>
                      <p className="font-semibold text-foreground text-sm">
                        Hours
                      </p>
                      <p className="text-muted-foreground text-sm">
                        {location.hours}
                      </p>
                    </div>
                  </AccordionContent>
                </AccordionItem>
              ))}
            </Accordion>
          </div>
        </div>
      </section>
    </>
  )
}
