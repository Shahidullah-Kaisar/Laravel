# Laravel Authentication Helpers

## Overview

Laravel provides a set of global helper functions to work with authentication. These helpers allow you to check login status, access the currently logged-in user, and retrieve user attributes — all without importing any classes.

These helpers are essential for building features like navigation bars, profile sections, and user-specific content.

---

## 1. auth()

**Description:**
`auth()` is a global helper function that gives you access to the authentication guard. It allows you to interact with the authentication system, check login status, or retrieve the current user.

**Usage:**

```php
auth(); // Returns the authentication guard instance
```

**Notes:**

* No import is needed; `auth()` is globally available in Laravel.
* You can chain other methods like `check()` or `user()`.

---

## 2. auth()->check()

**Description:**
Checks whether a user is currently logged in.

**Returns:**

* `true` → if a user is logged in
* `false` → if no user is logged in

**Usage:**

```php
if (auth()->check()) {
    // The user is logged in
} else {
    // No user is logged in
}
```

**Typical Use Cases:**

* Showing/hiding login or logout buttons
* Displaying user-specific navigation items
* Protecting parts of a view based on login status

---

## 3. auth()->user()

**Description:**
Returns the currently authenticated user object.

**Usage:**

```php
$user = auth()->user();
echo $user->name;
echo $user->email;
```

**Notes:**

* Returns `null` if no user is logged in.
* You can access all user model attributes defined in your database.
* Works globally in controllers, Blade templates, and middleware.

---

## 4. Accessing User Properties

Once a user is logged in, you can directly access any column of the `users` table through `auth()->user()`:

```php
auth()->user()->name     // User's full name
auth()->user()->email    // User's email address
auth()->user()->avatar   // User's avatar filename or URL
```

---

## 5. Why No Import is Needed

Laravel automatically loads global helper functions, including:

* `auth()`
* `route()`
* `view()`
* `asset()`
* `csrf_field()`

So you can use these helpers directly in Blade templates, controllers, and middleware without `use` statements.

---

## 6. Important Notes

* Always check login status with `auth()->check()` before accessing `auth()->user()`, otherwise you may get an error if the user is not logged in.
* `auth()->user()` returns a User model instance, so all methods and relationships defined in your User model are available.
* These helpers work with Laravel’s default session-based authentication, including Breeze, Jetstream, and manual Auth setups.

---

## Example in a Blade Template

```blade
@if(auth()->check())
    <p>Welcome, {{ auth()->user()->name }}</p>
    <img src="{{ auth()->user()->avatar ?? 'default-avatar.png' }}" alt="Profile">
@else
    <a href="{{ route('login') }}">Login</a>
@endif
```
