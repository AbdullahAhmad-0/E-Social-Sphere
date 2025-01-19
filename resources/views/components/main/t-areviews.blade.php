<div id="contact" class="contact-s cmn-padding-stb">
    <div class="grid-item">
        <h5 class="txt-center">Contact Details</h5>
        <div class="grid-s-item">
            <p><i class="fas fa-phone"></i><a href="{{ config('webdet.phonel') }}">{{ config('webdet.phone') }}</a></p>
        </div>
        <div class="grid-s-item">
            <p><i class="far fa-envelope"></i><a href="{{ config('webdet.emaill') }}">{{ config('webdet.email') }}</a></p>
        </div>
        <div class="grid-s-item">
            <p><i class="fas fa-map-marker-alt"></i><a href="{{ config('webdet.addressl') }}">{{ config('webdet.address') }}</a></p>
        </div>
        <h5 class="txt-center">Social Media</h5>
        <div class="grid-s-item">
            <div class="social-media-od content-center">
                <x-main.socialmedia />
            </div>
        </div>
    </div>

    <div class="grid-item">
        <h2 class="heading-common-s">Fill the form below so we can get to know you and your needs better.</h2>

        <div class="contact-container">
            <form class="contact-form" action="testimonials" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for="rating">Rating (1-5)</label>
                    <input type="number" id="rating" name="rating" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Enter Your Message" required></textarea>
                </div>
                @if (session('contact_message_send'))
                    <h4>Hello {{ session('contact_message_send') }}, your message has been added successfully!</h4>
                @endif
                <button type="submit" class="submit-btn">Add Review</button>
            </form>
        </div>
    </div>
</div>
