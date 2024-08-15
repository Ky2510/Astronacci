<div class="card position-relative">

    <img src="https://images.unsplash.com/photo-1722316805351-d5a56965f926?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        class="card-img" style="width: 100%; height: 50vh; object-fit: cover;" alt="...">
    <div class="card-img-overlay d-flex flex-column justify-content-center">
        <h1 class="card-title text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            Welcome, {{ auth()->user()->name }}</h1>
        <h3 class="card-text text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            Membership Type <strong>"{{ auth()->user()->role }}"</strong>
        </h3>
    </div>
</div>