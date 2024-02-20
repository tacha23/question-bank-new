import Layout from './Layout'
import { Head } from '@inertiajs/react'

export default function Welcome({ event }) {
  return (
    <Layout>
      <Head title="Welcome" />
      <h1>Welcome</h1>
      <p>{event.id} - Hello {event.title}, welcome to your first Inertia app!</p>
    </Layout>
  )
}