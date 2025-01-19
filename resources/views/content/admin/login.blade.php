<x-main.main-template title="Login">
    <x-main.header acttab="login" header="False" h1="Login" />
    <div id="login" class="contact-s cmn-padding">
        <div class="grid-item"></div>

        <div class="grid-item">
            <h2 class="heading-common-s">For Opening Admin Panel Enter Your Credentials.</h2>

            <div class="contact-container">
                <form class="contact-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    @if (session('error'))
                        <h4>{{ session('error') }}</h4>
                    @endif
                    <button type="submit" class="submit-btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-main>
