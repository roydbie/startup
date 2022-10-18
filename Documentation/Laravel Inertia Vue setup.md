# Laravel / Inertia / Vue setup

First, I installed Laravel the way you'd normally install Laravel. I personally use composer for the installation, but it can be done in various ways. 
Check out: https://laravel.com/docs/9.x/installation. At the time of creating this repository, Laravel 9.x was the latest version.

```bash
composer create-project laravel/laravel mvp
```

Afterwards I created a MySQL database and added the credentials to the .env file.

The step that followed was to install Inertia to both the server-side as the client-side.

Server-side documentation: https://inertiajs.com/server-side-setup

Client-side documentation: https://inertiajs.com/client-side-setup

Install Inertia.js for Laravel:

```bash
composer require inertiajs/inertia-laravel
```

Create a 'app.blade.php' file in resources/views:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
```

Next, setup the Inertia middleware. In the Rails adapter, this is configured automatically for you. 
However, in Laravel you need to publish the HandleInertiaRequests middleware to your application, 
which can be done using this artisan command:

```bash
php artisan inertia:middleware
```

Once generated, register the HandleInertiaRequests middleware in your 
App\Http\Kernel, as the last item in your web middleware group.

```injectablephp
'web' => [
    // ...
    \App\Http\Middleware\HandleInertiaRequests::class,
],
```

Install the Inertia client-side adapters using NPM.

```bash
npm install @inertiajs/inertia @inertiajs/inertia-vue3
```

Next, update your main JavaScript file to boot your Inertia app. 
All we're doing here is initializing the client-side framework with the 
base Inertia component.

```javascript
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
```

Since Inertia requests are made via XHR, there's no default browser 
loading indicator when navigating from one page to another. 
To solve this, Inertia provides an optional progress library, 
which shows a loading bar whenever you make an Inertia visit.

To use it, start by installing it:

```bash
npm install @inertiajs/progress
```

Once it's been installed, initialize it in your app.

```javascript
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()
```

For some reason, Laravel changed from Mix to Vite in order to use Vue and Laravel together.
To make sure everything is switched correctly, use this link to make sure Vite is installed correctly.

https://github.com/laravel/vite-plugin/blob/main/UPGRADE.md#migrating-from-laravel-mix-to-vite





