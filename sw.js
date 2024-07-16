const staticCacheName = 'site-static-v2'
const dynamicCacheName = "site-dynamic-v2"
const assets = [
    '/',
    '/Home.html',
    '/js/app.js',
    '/css/mystyle.css',
    '/css/images/hero_1.jpg',
    '/css/login.css',
    'css/images/books_1.jpg',
    '/fallback.html',
    '/images/books2.jpg'
];

const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
        cache.keys().then(keys => {
            if(keys.length > size){
                cache.delete(keys[0]).then(limitCacheSize(name,size));
            }
        })
    })
};

self.addEventListener('install', evt =>{

    //console.log('service worker has been installed');
    evt.waitUntil(
        caches.open(staticCacheName).then(cache => {
        console.log('caching shell assets');
        cache.addAll(assets);
        })
    );
});

self.addEventListener('activate',evt =>{
    //console.log('service worker has been activated');
    evt.waitUntil(
        caches.keys().then(keys =>{
            //console.log(keys);
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key))
            )
        })
    );
});

self.addEventListener('fetch',evt => {
    //console.log('fetch event',evt);
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request).then(fetchRes => {
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    limitCacheSize(dynamicCacheName, 15);
                    return fetchRes;
                })
            });
        }).catch(() => {
            if(evt.request.url.indexOf('.html') > -1)
            {
            caches.match('/fallback.html');
            }
            })
    );
});

