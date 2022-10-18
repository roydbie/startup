# Basic Inertia usage

## Basic routing

If you have a page that doesn't need a corresponding controller method, like an FAQ or about page, you can route directly to a component.

```injectablephp
Route::get('/werkorders', function () {
    return Inertia::render('Werkorders');
});
```

