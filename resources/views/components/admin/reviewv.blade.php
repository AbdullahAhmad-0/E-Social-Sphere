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
                <label for="rating">Rating</label>
                {{ $item['rating'] }} Star
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                {{ $item['message'] }}
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                {{ $item['created_at'] }}
            </div>
        </form>
        <br>
        <a href="/admin/review">Back To Review Page</a>
    </div>
</div>