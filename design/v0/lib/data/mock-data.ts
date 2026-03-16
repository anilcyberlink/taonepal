// Mock data for TAO Association of Nepal website

export const mockEvents = [
  {
    id: 'seminar-001',
    title: 'Introduction to Tao Philosophy',
    date: '25 Apr',
    time: '10:00 AM - 12:00 PM',
    location: 'Kathmandu Main Center',
    speaker: 'Guru Ashok',
    image: 'https://placehold.co/400x300?text=Tao+Seminar',
    seatsLeft: 15,
    category: 'Seminar',
    excerpt: 'Learn the fundamental principles of Tao philosophy and its practical applications in daily life.',
    fullDescription:
      'This comprehensive seminar introduces the core concepts of Tao philosophy, exploring the balance of yin and yang, the concept of Wu Wei (non-action), and the five elements. Perfect for beginners seeking spiritual guidance.',
    schedule: [
      { time: '10:00 AM', activity: 'Welcome & Opening meditation' },
      { time: '10:30 AM', activity: 'Core Tao philosophy lecture' },
      { time: '11:15 AM', activity: 'Q&A session' },
      { time: '11:45 AM', activity: 'Closing ceremony' },
    ],
  },
  {
    id: 'seminar-002',
    title: 'Advanced Meditation Practices',
    date: '30 Apr',
    time: '4:00 PM - 6:00 PM',
    location: 'Sitapaila Temple',
    speaker: 'Guru Maya',
    image: 'https://placehold.co/400x300?text=Meditation',
    seatsLeft: 8,
    category: 'Workshop',
    excerpt: 'Deepen your meditation practice with traditional Taoist techniques.',
  },
  {
    id: 'seminar-003',
    title: 'Tao and Health: Energy Flow',
    date: '10 May',
    time: '2:00 PM - 4:00 PM',
    location: 'Pokhara Center',
    speaker: 'Dr. Rajesh',
    image: 'https://placehold.co/400x300?text=Health',
    seatsLeft: 20,
    category: 'Health Workshop',
    excerpt: 'Explore the connection between Tao principles and physical wellbeing.',
  },
]

export const mockGurus = [
  {
    id: 'guru-ashok',
    name: 'Guru Ashok',
    title: 'Master of Tao Philosophy',
    image: 'https://placehold.co/300x400?text=Guru+Ashok',
    bio: 'With over 30 years of experience in Taoist teachings and meditation practices.',
    lineage: 'Chen Style',
    specialty: 'Philosophy & Meditation',
    biography: `Guru Ashok has dedicated his life to the study and practice of Tao philosophy. He spent two decades in China studying under traditional masters and has trained hundreds of students in Nepal.`,
    teachings:
      'Focuses on the practical application of Tao principles to modern life, emphasizing balance and harmony.',
    books: [
      'The Way of Living: A Modern Guide to Tao',
      'Meditations on the Tao Te Ching',
    ],
  },
  {
    id: 'guru-maya',
    name: 'Guru Maya',
    title: 'Meditation Master',
    image: 'https://placehold.co/300x400?text=Guru+Maya',
    bio: 'Specializes in meditation and mindfulness with 20 years of practice.',
    lineage: 'Buddhist-Taoist',
    specialty: 'Meditation & Mindfulness',
    biography: `Guru Maya's unique approach blends Buddhist and Taoist traditions to create accessible meditation practices for modern practitioners.`,
    teachings:
      'Teaches transformative meditation techniques that cultivate inner peace and spiritual awareness.',
  },
  {
    id: 'guru-rajesh',
    name: 'Dr. Rajesh Sharma',
    title: 'Medical Practitioner & Tao Scholar',
    image: 'https://placehold.co/300x400?text=Dr+Rajesh',
    bio: 'Bridges modern medicine with ancient Tao wisdom.',
    lineage: 'Integrated Traditional Medicine',
    specialty: 'Health & Wellness',
    biography: `Dr. Rajesh combines his medical background with Taoist principles to promote holistic health and wellness.`,
    teachings:
      'Explores the scientific basis of Tao practices and their health benefits.',
  },
]

export const mockTemples = [
  {
    id: 'temple-sitapaila',
    name: 'Sitapaila Tao Temple',
    location: 'Sitapaila, Kathmandu',
    image: 'https://placehold.co/400x300?text=Sitapaila+Temple',
    status: 'completed',
    description: 'Our main temple dedicated to Tao philosophy and spiritual practice.',
    progress: 100,
    raisedAmount: 50000000,
    goalAmount: 50000000,
    significance:
      'This temple serves as the primary spiritual center for the TAO Association, hosting daily meditation sessions, seminars, and cultural events.',
    fullDescription: `The Sitapaila Tao Temple represents the culmination of years of dedication to establishing a sacred space for Tao practice in Nepal. Built with traditional architectural elements, it stands as a beacon of spiritual wisdom.`,
    constructionPhases: [
      { name: 'Foundation & Planning', status: 'completed', date: '2020-2021' },
      { name: 'Main Structure', status: 'completed', date: '2021-2022' },
      { name: 'Interior Design', status: 'completed', date: '2022-2023' },
      { name: 'Consecration', status: 'completed', date: '2023' },
    ],
    gallery: [
      'https://placehold.co/600x400?text=Temple+View+1',
      'https://placehold.co/600x400?text=Temple+Interior',
      'https://placehold.co/600x400?text=Temple+Ceremony',
    ],
  },
  {
    id: 'temple-pokhara',
    name: 'Pokhara Meditation Center',
    location: 'Pokhara, Western Nepal',
    image: 'https://placehold.co/400x300?text=Pokhara+Center',
    status: 'under-construction',
    description: 'A peaceful retreat center for extended meditation and spiritual programs.',
    progress: 65,
    raisedAmount: 30000000,
    goalAmount: 45000000,
    significance:
      'This center will provide an ideal environment for residential meditation retreats with views of the Himalayas.',
    fullDescription: `The Pokhara center is being built to complement our Kathmandu headquarters, offering a serene mountain setting for intensive spiritual practice.`,
    constructionPhases: [
      { name: 'Foundation', status: 'completed', date: '2022-2023' },
      { name: 'Main Building', status: 'in-progress', date: '2023-2024' },
      { name: 'Meditation Halls', status: 'in-progress', date: '2024' },
      { name: 'Residential Areas', status: 'planned', date: '2024-2025' },
    ],
  },
  {
    id: 'temple-bhaktapur',
    name: 'Ancient Temple Restoration',
    location: 'Bhaktapur, Kathmandu Valley',
    image: 'https://placehold.co/400x300?text=Bhaktapur+Temple',
    status: 'planned',
    description: 'Restoration of historic Tao temple with modern facilities.',
    progress: 0,
    raisedAmount: 5000000,
    goalAmount: 60000000,
  },
]

export const mockBlogPosts = [
  {
    id: 'blog-001',
    title: 'Understanding the Concept of Wu Wei',
    excerpt:
      'Explore the principle of non-action and effortless doing in Taoist philosophy.',
    image: 'https://placehold.co/600x400?text=Wu+Wei',
    author: 'Guru Ashok',
    date: 'March 15, 2025',
    category: 'Philosophy',
    readTime: 8,
    content: `Wu Wei, often translated as "non-action" or "inaction," is one of the most misunderstood concepts in Taoist philosophy...`,
  },
  {
    id: 'blog-002',
    title: 'Meditation Retreat: A Report from Our Sitapaila Center',
    excerpt:
      'Insights and experiences from our latest 7-day meditation retreat.',
    image: 'https://placehold.co/600x400?text=Retreat',
    author: 'Guru Maya',
    date: 'March 10, 2025',
    category: 'Seminars',
    readTime: 6,
    content: `Last month, we hosted an incredible 7-day meditation retreat at our Sitapaila center...`,
  },
  {
    id: 'blog-003',
    title: 'The Five Elements in Traditional Chinese Medicine',
    excerpt:
      'How Taoist principles intersect with ancient healing practices.',
    image: 'https://placehold.co/600x400?text=Elements',
    author: 'Dr. Rajesh',
    date: 'March 5, 2025',
    category: 'Health',
    readTime: 10,
    content: `The five elements—wood, fire, earth, metal, and water—form the foundation of both Taoist philosophy and Traditional Chinese Medicine...`,
  },
]

export const mockLocations = [
  {
    id: 'location-kathmandu',
    name: 'Kathmandu Main Center',
    district: 'Kathmandu',
    address: 'Sitapaila, Kathmandu, Nepal',
    phone: '+977-1-4700000',
    email: 'kathmandu@taoassociation.org',
    hours: 'Daily: 9:00 AM - 8:00 PM',
    activities: [
      'Daily meditation sessions',
      'Weekly philosophy classes',
      'Monthly seminars',
      'Yoga & breathing exercises',
    ],
    image: 'https://placehold.co/400x300?text=Kathmandu+Center',
    lat: 27.7172,
    lng: 85.2898,
  },
  {
    id: 'location-pokhara',
    name: 'Pokhara Branch',
    district: 'Kaski',
    address: 'Lakeside, Pokhara, Nepal',
    phone: '+977-61-123456',
    email: 'pokhara@taoassociation.org',
    hours: 'Tue-Sun: 10:00 AM - 6:00 PM',
    activities: [
      'Meditation classes',
      'Nature retreat programs',
      'Spiritual guidance',
    ],
    image: 'https://placehold.co/400x300?text=Pokhara+Center',
    lat: 28.2096,
    lng: 83.9856,
  },
  {
    id: 'location-bhaktapur',
    name: 'Bhaktapur Center',
    district: 'Bhaktapur',
    address: 'Durbar Square, Bhaktapur, Nepal',
    phone: '+977-61-987654',
    email: 'bhaktapur@taoassociation.org',
    hours: 'Wed-Mon: 11:00 AM - 5:00 PM',
    activities: [
      'Philosophy discussion groups',
      'Cultural programs',
      'Community gatherings',
    ],
    image: 'https://placehold.co/400x300?text=Bhaktapur+Center',
    lat: 27.6728,
    lng: 85.8278,
  },
  {
    id: 'location-patan',
    name: 'Patan Meditation Center',
    district: 'Lalitpur',
    address: 'Jawalakhel, Patan, Nepal',
    phone: '+977-1-5123456',
    email: 'patan@taoassociation.org',
    hours: 'Daily: 8:00 AM - 7:00 PM',
    activities: [
      'Advanced meditation',
      'One-on-one spiritual guidance',
      'Healing sessions',
    ],
    image: 'https://placehold.co/400x300?text=Patan+Center',
    lat: 27.6716,
    lng: 85.3212,
  },
]

export const mockTravelPrograms = [
  {
    id: 'travel-001',
    destination: 'Sacred Temples of Thailand',
    country: 'Thailand',
    image: 'https://placehold.co/600x400?text=Thailand',
    duration: '10 days',
    cost: 150000,
    groupSize: 20,
    difficulty: 'Moderate',
    shortDescription: 'Journey through ancient Thai temples and meet enlightened masters.',
    fullDescription:
      'Experience the spiritual essence of Thailand as we visit some of the most sacred temples in Southeast Asia. Learn from renowned Tao teachers and participate in authentic meditation retreats.',
    itinerary: [
      {
        day: 1,
        title: 'Arrival in Bangkok',
        description: 'Arrive in Bangkok, settle into our retreat center, welcome ceremony.',
      },
      {
        day: 2,
        title: 'Temple Visits',
        description: 'Visit Wat Pho and other major temples with spiritual guides.',
      },
      {
        day: 3,
        title: 'Meditation Retreat',
        description: '5-hour intensive meditation session with local masters.',
      },
      {
        day: 4,
        title: 'Spiritual Teaching',
        description: 'Teachings on Thai Buddhism and Tao philosophy.',
      },
      {
        day: 5,
        title: 'Chiang Mai Journey',
        description: 'Travel to Chiang Mai, visit elephant sanctuary.',
      },
    ],
    included: [
      'All accommodation and meals',
      'Local transportation',
      'All seminar materials',
      'Guided temple tours',
      'Professional interpreter',
    ],
    notIncluded: [
      'International flights',
      'Travel insurance',
      'Personal expenses',
      'Visa fees',
    ],
    testimonials: [
      {
        author: 'Ram Kumar',
        text: 'A life-changing experience that deepened my spiritual practice.',
      },
    ],
    upcomingDates: ['May 15-25, 2025', 'August 10-20, 2025', 'October 5-15, 2025'],
  },
  {
    id: 'travel-002',
    destination: 'Spiritual Journey Through India',
    country: 'India',
    image: 'https://placehold.co/600x400?text=India',
    duration: '14 days',
    cost: 200000,
    groupSize: 25,
    difficulty: 'Moderate',
    shortDescription: 'Explore the birthplace of Eastern philosophy and spirituality.',
    fullDescription:
      'Journey through India\'s most sacred spiritual sites. Visit holy pilgrimage destinations and study with renowned spiritual teachers.',
    itinerary: [
      { day: 1, title: 'Delhi Arrival', description: 'Explore Delhi\'s spiritual heritage.' },
      { day: 2, title: 'Varanasi', description: 'Holy city on the Ganges river.' },
    ],
    included: [
      'Accommodation',
      'Meals',
      'Local guides',
      'Seminar materials',
    ],
    notIncluded: [
      'International flights',
      'Travel insurance',
    ],
    upcomingDates: ['June 1-15, 2025', 'September 1-15, 2025'],
  },
  {
    id: 'travel-003',
    destination: 'China: Ancient Tao Homeland',
    country: 'China',
    image: 'https://placehold.co/600x400?text=China',
    duration: '12 days',
    cost: 250000,
    groupSize: 18,
    difficulty: 'Challenging',
    shortDescription:
      'Visit the sacred mountains and temples where Taoism originated.',
    fullDescription:
      'Experience the birthplace of Tao philosophy. Visit Mount Wudang and study at ancient Taoist monasteries.',
    itinerary: [
      {
        day: 1,
        title: 'Beijing',
        description: 'Explore the Great Wall and ancient temples.',
      },
      {
        day: 2,
        title: 'Mount Wudang',
        description: 'Sacred Taoist mountain, traditional kung fu training.',
      },
    ],
    included: [
      'Accommodation',
      'Meals',
      'All transportation',
      'Expert guides',
    ],
    notIncluded: [
      'International flights',
      'Visa',
      'Travel insurance',
    ],
    upcomingDates: ['July 1-13, 2025', 'October 15-27, 2025'],
  },
]
