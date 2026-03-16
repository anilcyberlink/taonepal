'use client'

import { useState } from 'react'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { Badge } from '@/components/ui/badge'
import { Heart } from 'lucide-react'

interface DonationFormProps {
  projectName: string
  projectId: string
}

const predefinedAmounts = [500, 1000, 5000, 10000]
const paymentMethods = [
  { id: 'esewa', name: 'eSewa', icon: '💳' },
  { id: 'khalti', name: 'Khalti', icon: '📱' },
  { id: 'bank', name: 'Bank Transfer', icon: '🏦' },
]

export function DonationForm({ projectName, projectId }: DonationFormProps) {
  const [selectedAmount, setSelectedAmount] = useState<number | null>(1000)
  const [customAmount, setCustomAmount] = useState('')
  const [selectedPayment, setSelectedPayment] = useState<string | null>(null)
  const [submitted, setSubmitted] = useState(false)
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
  })

  const amount = customAmount ? parseInt(customAmount) : selectedAmount
  const isComplete = formData.name && formData.email && formData.phone && amount && selectedPayment

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault()
    if (isComplete) {
      setSubmitted(true)
      setTimeout(() => {
        setSubmitted(false)
        setFormData({ name: '', email: '', phone: '' })
        setSelectedAmount(1000)
        setCustomAmount('')
        setSelectedPayment(null)
      }, 3000)
    }
  }

  return (
    <Card className="sticky top-24">
      <CardHeader>
        <CardTitle className="flex items-center gap-2">
          <Heart className="h-5 w-5 text-primary" />
          Make a Donation
        </CardTitle>
      </CardHeader>
      <CardContent>
        {submitted ? (
          <div className="text-center py-12">
            <div className="text-4xl mb-4">✓</div>
            <h3 className="text-lg font-bold text-primary mb-2">Thank You!</h3>
            <p className="text-muted-foreground text-sm">
              Your donation of Rs. {amount?.toLocaleString()} has been received.
            </p>
          </div>
        ) : (
          <form onSubmit={handleSubmit} className="space-y-6">
            {/* Preset Amounts */}
            <div>
              <label className="text-sm font-medium text-foreground block mb-3">
                Select Amount
              </label>
              <div className="space-y-2">
                {predefinedAmounts.map((amt) => (
                  <button
                    key={amt}
                    type="button"
                    onClick={() => {
                      setSelectedAmount(amt)
                      setCustomAmount('')
                    }}
                    className={`w-full py-3 px-4 rounded-lg border-2 transition-all text-sm font-medium ${
                      selectedAmount === amt && !customAmount
                        ? 'border-primary bg-primary/10 text-primary'
                        : 'border-border hover:border-primary text-foreground'
                    }`}
                  >
                    Rs. {amt.toLocaleString()}
                  </button>
                ))}
              </div>
            </div>

            {/* Custom Amount */}
            <div>
              <label className="text-sm font-medium text-foreground block mb-2">
                Or Enter Custom Amount (Rs.)
              </label>
              <input
                type="number"
                value={customAmount}
                onChange={(e) => {
                  setCustomAmount(e.target.value)
                  setSelectedAmount(null)
                }}
                placeholder="Enter amount"
                className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
              />
            </div>

            {/* Donor Info */}
            <div className="space-y-3">
              <div>
                <label className="text-sm font-medium text-foreground block mb-2">
                  Full Name
                </label>
                <input
                  type="text"
                  value={formData.name}
                  onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                  required
                  placeholder="Your name"
                  className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                />
              </div>

              <div>
                <label className="text-sm font-medium text-foreground block mb-2">
                  Email
                </label>
                <input
                  type="email"
                  value={formData.email}
                  onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                  required
                  placeholder="your@email.com"
                  className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                />
              </div>

              <div>
                <label className="text-sm font-medium text-foreground block mb-2">
                  Phone (Nepal)
                </label>
                <input
                  type="tel"
                  value={formData.phone}
                  onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                  required
                  placeholder="+977-98XXXXXXXX"
                  className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                />
              </div>
            </div>

            {/* Payment Method */}
            <div>
              <label className="text-sm font-medium text-foreground block mb-3">
                Payment Method
              </label>
              <div className="space-y-2">
                {paymentMethods.map((method) => (
                  <button
                    key={method.id}
                    type="button"
                    onClick={() => setSelectedPayment(method.id)}
                    className={`w-full py-3 px-4 rounded-lg border-2 transition-all flex items-center gap-3 ${
                      selectedPayment === method.id
                        ? 'border-primary bg-primary/10'
                        : 'border-border hover:border-primary'
                    }`}
                  >
                    <span className="text-xl">{method.icon}</span>
                    <span className="font-medium">{method.name}</span>
                  </button>
                ))}
              </div>
            </div>

            {/* Summary */}
            {amount && (
              <div className="bg-accent/20 rounded-lg p-4 border border-accent">
                <p className="text-sm text-muted-foreground mb-1">Donation Amount</p>
                <p className="text-2xl font-bold text-primary">
                  Rs. {amount.toLocaleString()}
                </p>
              </div>
            )}

            {/* Submit Button */}
            <Button
              type="submit"
              disabled={!isComplete}
              className="w-full bg-primary hover:bg-primary/90 text-white py-6 text-lg disabled:opacity-50"
            >
              Donate Now
            </Button>

            <p className="text-xs text-muted-foreground text-center">
              Your donation is secure and tax-deductible in Nepal.
            </p>
          </form>
        )}
      </CardContent>
    </Card>
  )
}
