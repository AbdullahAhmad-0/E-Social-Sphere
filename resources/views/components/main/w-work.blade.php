<div id="work-with-us" class="contact-s cmn-padding">
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
            <form class="contact-form" action="work-with-us" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name*</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Enter Your E-mail" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number*</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter Your Whatsapp or Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company" placeholder="Enter Your Company Name" required>
                </div>
                <div class="form-group">
                    <label for="website">Website URL</label>
                    <input type="url" id="website" name="website" placeholder="Enter Your Website URL">
                </div>
                <div class="form-group">
                    <label for="job">Job title*</label>
                    <input type="text" id="job" name="job" placeholder="Enter Your Job title" required>
                </div>
                <div class="form-group">
                    <label for="about">How Did you hear about us?*</label>
                    <textarea id="about" name="about" rows="2" placeholder="How Did you hear about us" required></textarea>
                </div>
                <div class="form-group">
                    <label for="message">Tell us what you are looking for?*</label>
                    <textarea id="message" name="message" rows="4" placeholder="How we can help you?
How you help us?
Tell us what you are looking for?" required></textarea>
                </div>
                @if (session('contact_message_send'))
                    <h4>Hello {{ session('contact_message_send') }}, your message has been sent successfully!</h4>
                @endif
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</div>
