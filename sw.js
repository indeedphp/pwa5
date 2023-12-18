const staticCacheName = 's-app-v9'

const assetUrls = [
  'index.html',
  'bootstrap.min.css'
]

self.addEventListener('install', async event => {
 const cache = await caches.open(staticCacheName)
  await cache.addAll(assetUrls)
})

self.addEventListener('activate', event => {
console.log('Service worker acte')
})

self.addEventListener('fetch', event => {
  console.log('fetch', event.request.url)
  event.respondWith(cacheFirst(event.request))
})

async function cacheFirst(request){

const cached = await caches.match(request)
return cached ?? await fetch (request)
}

