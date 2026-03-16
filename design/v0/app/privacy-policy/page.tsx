import { PageHero } from '@/components/page-hero'

export const metadata = {
  title: 'Privacy Policy | TAO Association of Nepal',
  description: 'Our privacy policy and data protection practices.',
}

export default function PrivacyPolicyPage() {
  return (
    <>
      <PageHero
        title="Privacy Policy"
        breadcrumbs={[
          { label: 'Home', href: '/' },
          { label: 'Privacy Policy', href: '/privacy-policy' },
        ]}
      />

      <article className="py-16 md:py-24">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="prose prose-invert max-w-none space-y-8">
            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                1. Introduction
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                TAO Association of Nepal ("we," "us," "our," or "Company") is
                committed to protecting your privacy. This Privacy Policy explains
                how we collect, use, disclose, and safeguard your information
                when you visit our website and use our services.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                2. Information We Collect
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                We collect information you provide directly to us, such as when
                you register for events, make donations, contact us, or subscribe
                to our newsletter. This may include:
              </p>
              <ul className="list-disc pl-6 text-muted-foreground space-y-2 mt-4">
                <li>Name and contact information</li>
                <li>Email address and phone number</li>
                <li>Event registration details</li>
                <li>Donation information</li>
                <li>Communication preferences</li>
              </ul>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                3. How We Use Your Information
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                We use the information we collect for various purposes,
                including:
              </p>
              <ul className="list-disc pl-6 text-muted-foreground space-y-2 mt-4">
                <li>Processing event registrations and donations</li>
                <li>Sending newsletters and updates</li>
                <li>Responding to your inquiries</li>
                <li>Improving our website and services</li>
                <li>Complying with legal obligations</li>
              </ul>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                4. Data Protection
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                We implement appropriate technical and organizational measures to
                protect your personal information against unauthorized access,
                alteration, disclosure, or destruction. However, no method of
                transmission over the internet or electronic storage is
                completely secure.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                5. Cookies
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                Our website may use cookies to enhance your browsing experience.
                These small files allow us to remember your preferences and
                understand how you use our site. You can control cookie settings
                through your browser.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                6. Third-Party Links
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                Our website may contain links to external sites. We are not
                responsible for the privacy practices of these external websites.
                We encourage you to review their privacy policies before
                providing any personal information.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                7. Your Rights
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                Depending on your location, you may have the right to access,
                correct, or delete your personal information. You can also
                request to unsubscribe from our mailing lists at any time.
              </p>
            </section>

            <section>
              <h2 className="text-2xl font-bold text-foreground mb-4">
                8. Contact Us
              </h2>
              <p className="text-muted-foreground leading-relaxed">
                If you have questions about this Privacy Policy or our privacy
                practices, please contact us at:
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
                Last updated: March 2025. We may update this Privacy Policy
                periodically. Any changes will be posted on this page.
              </p>
            </section>
          </div>
        </div>
      </article>
    </>
  )
}
