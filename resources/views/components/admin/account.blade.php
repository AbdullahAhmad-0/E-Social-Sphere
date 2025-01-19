<div class="grid-item">
    <div class="contact-container">
        <form class="contact-form" id="webdet" action="/admin/account/save_webdet" method="POST">
            @csrf
            <h2 class="heading-common-s">Website Details</h2>
            <div class="form-group">
                <label for="website_name">Website Name</label>
                <input type="text" id="website_name" name="website_name" placeholder="Enter Your Website Name" value="{{ config('webdet.website_name') }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter Your Phone Number (tel:+92XX1234567)" value="{{ config('webdet.phone') }}" required>
            </div>

            <div class="form-group">
                <label for="phonel">Phone URL</label>
                <input type="text" id="phonel" name="phonel" placeholder="Enter Phone Direct Link" value="{{ config('webdet.phonel') }}" required>
            </div>

            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="text" id="whatsapp" name="whatsapp" placeholder="Enter Your WhatsApp Number" value="{{ config('webdet.whatsapp') }}" required>
            </div>

            <div class="form-group">
                <label for="whatsappl">WhatsApp URL</label>
                <input type="text" id="whatsappl" name="whatsappl" placeholder="Enter WhatsApp Direct Link (https://wa.me/92XX1234567?text=)" value="{{ config('webdet.whatsappl') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" value="{{ config('webdet.email') }}" required>
            </div>

            <div class="form-group">
                <label for="emaill">Email URL</label>
                <input type="text" id="emaill" name="emaill" placeholder="Enter Email Direct Link (mailto:admin@something.com)" value="{{ config('webdet.emaill') }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter Your Address" value="{{ config('webdet.address') }}" required>
            </div>

            <div class="form-group">
                <label for="addressl">Address URL</label>
                <input type="text" id="addressl" name="addressl" placeholder="Enter Your Address Link (https://maps.google.com/?q=33.5395777822157,73.1732368469238)"
                    value="{{ config('webdet.addressl') }}" required>
            </div>
            @if (session('success-web'))
                <div class="alert alert-success">
                    {{ session('success-web') }}
                </div>
            @endif
            
            <button type="submit" id="webdet-btn" class="submit-btn">Save</button>
        </form>
        <hr>
        <form class="contact-form" id="usrdet" action="/admin/account/save_usrdet" method="POST">
            @csrf
            <h2 class="heading-common-s">User Details</h2>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="{{ $item['email'] }}" placeholder="Enter Your E-Mail Address." required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                @if (isset($item['password']))
                Password is already set, enter a new one to change it.
                    <input type="password" id="password" name="password" placeholder="Enter your new secret password.">
                    @else
                    <input type="password" id="password" name="password" placeholder="Enter your secret password, no password has been entered before.">
                    @endif
                </div>
                @if (session('success-usr'))
                    <div class="alert alert-success">
                        {{ session('success-usr') }}
                    </div>
                @endif
            <button type="submit" id="usrdet-btn" class="submit-btn">Save</button>
        </form>
    </div>
</div>
