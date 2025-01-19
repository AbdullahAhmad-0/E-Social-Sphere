<div class="grid-item">
    <div class="contact-container">
        <form class="contact-form">
            <div class="form-group">
                <label for="name">ID: {{ $item['id'] }}</label>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                {{ $item['name'] }}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {{ $item['email'] }}
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                {{ $item['phone'] }}
            </div>
            <div class="form-group">
                <label for="phone">Company Name</label>
                {{ $item['phone'] }}
            </div>
            <div class="form-group">
                <label for="phone">Website Address</label>
                {{ $item['phone'] }}
            </div>
            <div class="form-group">
                <label for="phone">Job Title</label>
                {{ $item['phone'] }}
            </div>
            <div class="form-group">
                <label for="phone">How do you hear About Us</label>
                {{ $item['phone'] }}
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                {{ $item['message'] }}
            </div>
            <div class="form-group">
                <label for="message">Operation</label>
                {{ $item['operation'] }}
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                {{ $item['created_at'] }}
            </div>
        </form>
        <br>
        <a href="/admin/work">Back To Work Page</a>
    </div>
</div>