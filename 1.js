self.addEventListener('install', event => {
 console.log('Service worker install')
})

self.addEventListener('activate', event => {
console.log('Service worker activate')
})




const staticCacheName = 's-app-v3'

const assetUrls = [
  'index.html'
]

self.addEventListener('install', event => {
 event.waitUntil(
  caches.open(staticCacheName).then(cache => cache.addAll(assetUrls) )
 )
})

self.addEventListener('activate', event => {
console.log('Service worker activate')
})




const staticCacheName = 's-app-v1'

const assetUrls = [
  'index.html',
  'bootstrap.min.css'
]

self.addEventListener('install', async event => {
 const cache = await caches.open(staticCacheName)
  await cache.addAll(assetUrls)

})

self.addEventListener('activate', event => {
console.log('Service worker activate')
})