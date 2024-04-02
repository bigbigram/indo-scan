// Service Worker Register
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('service-worker.js')
      .then(registration => {
        //console.log('Service Worker is registered', registration);
      })
      .catch(err => {
        console.error('Registration failed:', err);
      });
  });

  // Intercept fetch events
  self.addEventListener('fetch', function (event) {
    // Define your external URLs
    const externalUrls = [
      'https://billowing-sun-99500.pktriot.net',
      'https://silly-leaf-98999.pktriot.net',
      'https://peaceful-water-88022.pktriot.net/dashboard'
    ];

    // Check if the requested URL matches one of the external URLs
    const isExternalUrl = externalUrls.some(url => event.request.url.startsWith(url));

    if (isExternalUrl) {
      event.respondWith(
        // Open the external link within the app by navigating to it
        clients.matchAll({ type: 'window' }).then(clients => {
          for (const client of clients) {
            // Check if the client is focused or open a new window
            if ('focus' in client) {
              return client.navigate(event.request.url).then(client => {
                return client.focus();
              });
            }
          }
          
          // If no client is focused, open a new window
          return clients.openWindow(event.request.url);
        })
      );
    }
    // Continue with normal fetch handling for other requests
    else {
      event.respondWith(
        fetch(event.request)
          .then(response => {
            // You can modify the response or handle it as needed
            return response;
          })
          .catch(error => {
            console.error('Error fetching:', error);
          })
      );
    }
  });
}
