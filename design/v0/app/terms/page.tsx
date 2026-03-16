import { PageHero } from '@/components/page-hero'

export const metadata = {
  title: 'Terms & Conditions | TAO Association of Nepal',
  description: 'Terms and conditions for using TAO Association services.',
}

export default function TermsPage() {
  return (
    <>
      <PageHero
        title="Terms & Conditions"
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Terms', href: '/terms' },
        ]}
      />

      <article className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="prose prose-invert max-w-none space-y-8">
            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                1. Acceptance of Terms
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                By accessing and using this website, you accept and agree to be
                bound by the terms and provision of this agreement. If you do
                not agree to abide by the above, please do not use this service.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                2. Intellectual Property Rights
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                Unless otherwise stated, TAO Association of Nepal owns the
                intellectual property rights for all material on this website.
                All intellectual property rights are reserved. You may access
                this from our website for personal use, subject to restrictions
                set in these terms and conditions.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                3. User Responsibilities
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                As a user of our website and services, you agree to:
              </p>
              <ul className="list-disc pl-6 text-muted-foreground space-y-2 mt-4">
                <li>Provide accurate and complete information</li>
                <li>
                  Not engage in any conduct that restricts or inhibits anyone
                  from using the website
                </li>
                <li>Not transmit obscene, offensive, or incendiary content</li>
                <li>Not disrupt normal flow of dialogue in our services</li>
                <li>Respect the intellectual property rights of others</li>
              </ul>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                4. Event Registrations
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                When you register for our events and seminars, you agree to:
              </p>
              <ul className="list-disc pl-6 text-muted-foreground space-y-2 mt-4">
                <li>Pay all applicable fees</li>
                <li>Abide by event rules and conduct expectations</li>
                <li>Accept potential changes in event schedules or formats</li>
                <li>
                  Release organizers from liability for unforeseen circumstances
                </li>
              </ul>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                5. Donations and Payments
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                All donations are voluntary and non-refundable unless otherwise
                specified. By making a donation, you confirm that you have the
                legal right to donate and that the funds are not from illegal
                sources.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                6. Disclaimer of Warranties
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                Our website and services are provided on an "as is" basis. TAO
                Association makes no warranties, expressed or implied, and
                hereby disclaims and negates all other warranties including,
                without limitation, implied warranties or conditions of
                merchantability, fitness for a particular purpose.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                7. Limitation of Liability
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                In no event shall TAO Association of Nepal or its suppliers be
                liable for any damages (including, without limitation, damages
                for loss of data or profit, or due to business interruption)
                arising out of the use or inability to use the materials on our
                website.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                8. Modifications
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                TAO Association may revise these terms of service for its
                website at any time without notice. By using this website, you
                are agreeing to be bound by the then current version of these
                terms of service.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                9. Governing Law
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                These terms and conditions are governed by and construed in
                accordance with the laws of Nepal, and you irrevocably submit to
                the exclusive jurisdiction of the courts located in Kathmandu.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                10. Contact Information
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                If you have any questions about these Terms & Conditions, please
                contact us at:
              </p>
              <div className="bg-card border border-border rounded-lg p-4 mt-4">
                <p className="text-foreground font-semibold">
                  TAO Association of Nepal
                </p>
                <p className="text-muted-foreground">Email: info@taoassociation.org</p>
                <p className="text-muted-foreground">Phone: +977-1-4700000</p>
              </div>
            </section>

            <section className="pt-8 border-t border-border">
              <p className="text-sm text-muted-foreground">
                Last updated: March 2025. TAO Association reserves the right to
                modify these terms at any time.
              </p>
            </section>
          </div>
        </div>
      </article>
    </>
  )
}
