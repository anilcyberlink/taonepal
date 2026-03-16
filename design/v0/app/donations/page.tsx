'use client'

import { PageHero } from '@/components/page-hero'
import { useState } from 'react'
import { Button } from '@/components/ui/button'
import { Heart, Building2, Users } from 'lucide-react'
import {
  PieChart,
  Pie,
  Cell,
  ResponsiveContainer,
  Legend,
  Tooltip,
} from 'recharts'

const CHART_COLORS = [
  'var(--primary)',
  'var(--secondary)',
  'var(--accent)',
  '#D4A574',
]

const FUND_ALLOCATION = [
  { name: 'Temple Projects', value: 40 },
  { name: 'Educational Programs', value: 25 },
  { name: 'Community Support', value: 20 },
  { name: 'Operations', value: 15 },
]

export const metadata = {
  title: 'Donations | TAO Association of Nepal',
  description: 'Support our mission to advance Tao wisdom and spiritual growth.',
}

export default function DonationsPage() {
  const [selectedAmount, setSelectedAmount] = useState('5000')
  const [customAmount, setCustomAmount] = useState('')
  const [paymentMethod, setPaymentMethod] = useState<'esewa' | 'khalti' | 'bank'>('esewa')

  const donationTiers = [
    {
      id: 'temples',
      name: 'Temple Construction',
      icon: Building2,
      description: 'Support sacred temple projects',
      color: 'bg-primary/10 border-primary',
    },
    {
      id: 'general',
      name: 'General Charity',
      icon: Heart,
      description: 'Support our overall mission',
      color: 'bg-accent/10 border-accent',
    },
    {
      id: 'community',
      name: 'Community Programs',
      icon: Users,
      description: 'Support local spiritual programs',
      color: 'bg-secondary/10 border-secondary',
    },
  ]

  const recentDonors = [
    { name: 'Anonymous', amount: 50000, date: '2025-03-15' },
    { name: 'Anonymous', amount: 25000, date: '2025-03-12' },
    { name: 'Anonymous', amount: 10000, date: '2025-03-10' },
    { name: 'Anonymous', amount: 100000, date: '2025-03-08' },
  ]

  const displayAmount = customAmount || selectedAmount

  return (
    <>
      <PageHero
        title="Support Our Mission"
        subtitle="Make a meaningful contribution to spiritual growth"
        breadcrumbs={[{ label: 'Home', href: '/' }, { label: 'Donations', href: '/donations' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Donation Tiers */}
          <div className="mb-16">
            <h2 className="text-3xl font-bold mb-8 text-foreground">Choose a Focus Area</h2>
            <div className="grid md:grid-cols-3 gap-6">
              {donationTiers.map((tier) => {
                const Icon = tier.icon
                return (
                  <div
                    key={tier.id}
                    className={`p-6 rounded-lg border-2 cursor-pointer transition-all ${tier.color}`}
                  >
                    <Icon className="h-8 w-8 mb-3 text-primary" />
                    <h3 className="font-bold text-lg mb-2 text-foreground">
                      {tier.name}
                    </h3>
                    <p className="text-sm text-muted-foreground">
                      {tier.description}
                    </p>
                  </div>
                )
              })}
            </div>
          </div>

          <div className="grid md:grid-cols-3 gap-12">
            {/* Donation Form */}
            <div className="md:col-span-2 space-y-8">
              {/* Amount Selection */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h3 className="text-2xl font-bold mb-6 text-foreground">
                  Select Amount
                </h3>
                <div className="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
                  {['500', '1000', '5000', '10000'].map((amount) => (
                    <button
                      key={amount}
                      onClick={() => {
                        setSelectedAmount(amount)
                        setCustomAmount('')
                      }}
                      className={`p-4 rounded-lg border-2 font-bold transition-all ${
                        selectedAmount === amount && !customAmount
                          ? 'border-primary bg-primary/10 text-primary'
                          : 'border-border hover:border-primary text-foreground'
                      }`}
                    >
                      Rs. {amount}
                    </button>
                  ))}
                </div>
                <div>
                  <label className="text-sm font-medium text-foreground block mb-2">
                    Custom Amount (Rs.)
                  </label>
                  <input
                    type="number"
                    value={customAmount}
                    onChange={(e) => {
                      setCustomAmount(e.target.value)
                      if (e.target.value) setSelectedAmount('')
                    }}
                    className="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary"
                    placeholder="Enter custom amount"
                  />
                </div>
              </div>

              {/* Payment Methods */}
              <div className="bg-card border border-border rounded-lg p-8">
                <h3 className="text-2xl font-bold mb-6 text-foreground">
                  Payment Method
                </h3>
                <div className="space-y-4 mb-6">
                  {[
                    {
                      id: 'esewa',
                      name: 'eSewa',
                      desc: 'Pay securely via eSewa',
                    },
                    {
                      id: 'khalti',
                      name: 'Khalti',
                      desc: 'Mobile payment via Khalti',
                    },
                    {
                      id: 'bank',
                      name: 'Bank Transfer',
                      desc: 'Direct bank deposit',
                    },
                  ].map((method) => (
                    <label
                      key={method.id}
                      className={`p-4 rounded-lg border-2 cursor-pointer transition-all ${
                        paymentMethod === method.id
                          ? 'border-primary bg-primary/10'
                          : 'border-border hover:border-primary'
                      }`}
                    >
                      <input
                        type="radio"
                        name="payment"
                        value={method.id}
                        checked={paymentMethod === method.id}
                        onChange={(e) =>
                          setPaymentMethod(e.target.value as any)
                        }
                        className="mr-3"
                      />
                      <span className="font-medium text-foreground">
                        {method.name}
                      </span>
                      <p className="text-sm text-muted-foreground">
                        {method.desc}
                      </p>
                    </label>
                  ))}
                </div>

                {/* Payment Info */}
                {paymentMethod === 'bank' && (
                  <div className="bg-accent/10 border border-border rounded-lg p-4 text-sm text-muted-foreground mb-6">
                    <p className="font-semibold text-foreground mb-2">
                      Bank Account Details
                    </p>
                    <p>Bank Name: Nepal Bank Limited</p>
                    <p>Account: TAO Association of Nepal</p>
                    <p>Account No: 1234567890</p>
                  </div>
                )}

                <Button className="w-full bg-primary hover:bg-primary/90 text-white text-lg py-6">
                  Donate Rs. {displayAmount}
                </Button>
              </div>
            </div>

            {/* Sidebar */}
            <div className="space-y-6">
              {/* Fund Allocation Chart */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Fund Allocation</h4>
                <ResponsiveContainer width="100%" height={300}>
                  <PieChart>
                    <Pie
                      data={FUND_ALLOCATION}
                      cx="50%"
                      cy="50%"
                      labelLine={false}
                      label={({ value }) => `${value}%`}
                      outerRadius={80}
                      fill="#C41E3A"
                      dataKey="value"
                    >
                      {FUND_ALLOCATION.map((entry, index) => (
                        <Cell
                          key={`cell-${index}`}
                          fill={CHART_COLORS[index % CHART_COLORS.length]}
                        />
                      ))}
                    </Pie>
                    <Tooltip />
                  </PieChart>
                </ResponsiveContainer>
                <div className="mt-4 space-y-2 text-sm">
                  {FUND_ALLOCATION.map((item, idx) => (
                    <div key={idx} className="flex items-center gap-2">
                      <div
                        className="w-3 h-3 rounded-full"
                        style={{
                          backgroundColor:
                            CHART_COLORS[idx % CHART_COLORS.length],
                        }}
                      />
                      <span className="text-muted-foreground">
                        {item.name} ({item.value}%)
                      </span>
                    </div>
                  ))}
                </div>
              </div>

              {/* Donors List */}
              <div className="bg-card border border-border rounded-lg p-6">
                <h4 className="font-bold text-foreground mb-4">Recent Donors</h4>
                <div className="space-y-3">
                  {recentDonors.map((donor, idx) => (
                    <div
                      key={idx}
                      className="flex items-center justify-between py-2 border-b border-border last:border-b-0"
                    >
                      <div>
                        <p className="font-medium text-foreground text-sm">
                          {donor.name}
                        </p>
                        <p className="text-xs text-muted-foreground">
                          {new Date(donor.date).toLocaleDateString()}
                        </p>
                      </div>
                      <p className="font-bold text-primary">Rs. {donor.amount}</p>
                    </div>
                  ))}
                </div>
              </div>

              {/* Tax Info */}
              <div className="bg-accent/10 border border-border rounded-lg p-4 text-sm text-muted-foreground">
                <p className="font-semibold text-foreground mb-2">
                  Tax Exemption
                </p>
                <p>
                  Donations to TAO Association may be tax-deductible. Please
                  consult your tax advisor. Registration: CDORN: 87/055/056
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
