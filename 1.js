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


var CACHE_NAME = 'my-web-app-cache';
var urlsToCache = [
  '/',
  '/styles/main.css',
  '/scripts/app.js',
  '/scripts/lib.js'
];

self.addEventListener('install', function(event) {
  // event.waitUntil принимает промис для того, чтобы узнать,
  // сколько времени займёт установка, и успешно
  // или нет она завершилась.
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});