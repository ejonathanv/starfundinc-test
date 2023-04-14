## Installation

<p>
    <code>git clone this repository</code>
    <br>
    <code>cd</code>
    <br>
    <code>composer install</code>
    <br>
    <code>npm install</code>
    <br>
    <code>npm run dev</code>
    <br>
    <code>cp .env.example .env</code>
    <br>
    <code>php artisan key:generate</code>
    <br>
    <code>php artisan migrate</code>
    <br>
    <code>php artisan db:seed</code>
    <br>
    <code>php artisan serve</code>
</p>


## Endpoints for API
<p>
    Route: <code>/</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to specific dashboard based on user role</code>
</p>

## Admin

<p>
    Credentials for admin:
    <br>
    <code>email: admin@admin.com password: password</code>
</p>

<p>
    Route: <code>/admin</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to admin dashboard</code>
</p>

## Services
<p>
    Route: <code>/admin/services</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Get all services with their schedules</code>
</p>

<p>
    Route: <code>/admin/services/create</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to create new service</code>
</p>

<p>
    Route: <code>/admin/services</code>
    <br>
    Method: <code>POST</code>
    <br>
    Description: <code>Create a new service</code>
</p>


## Service schedules
<p>
    Route: <code>/admin/services/:id/schedules</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to setup schedules for a service</code>
</p>

<p>
    Route: <code>/admin/services/:id/schedules</code>
    <br>
    Method: <code>POST</code>
    <br>
    Description: <code>Setup schedules for a service</code>
</p>

<p>
    Route: <code>/admin/services/:id/schedules/:id</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to show a schedule for a service</code>
</p>

<p>
    Route: <code>/admin/services/:id/schedules/:id</code>
    <br>
    Method: <code>DELETE</code>
    <br>
    Description: <code>Delete a schedule for a service</code>
</p>


## User

<p>
    Credentials for user:
    <br>
    <code>email: user@user.com password: password</code>
</p>

## Booking

<p>
    Route: <code>/user/bookings</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to select date and time for booking</code>
</p>

<p>
    Route: <code>/user/bookings/:id/people</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Go to add the people for booking</code>
</p>

<p>
    Route: <code>/user/bookings/:slotId/people</code>
    <br>
    Method: <code>POST</code>
    <br>
    Description: <code>Add the people for booking</code>
</p>

<p>
    Route: <code>/user/schedules</code>
    <br>
    Method: <code>GET</code>
    <br>
    Description: <code>Get all user schedules</code>
</p>