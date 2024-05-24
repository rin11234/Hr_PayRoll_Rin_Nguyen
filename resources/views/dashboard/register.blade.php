@include('dashboard.head')
<div class="main-wrapper">
    <div class="account-content">
        <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
        <div class="container">
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
            </div>
            <!-- /Account Logo -->

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Register</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <!-- Account Form -->
                    <form action="{{ route('postRegister') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="text">name</label>
                            <input id="name" name="name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" name="email" class="form-control" type="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" name="password" class="form-control" type="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Repeat Password</label>
                            <input id="password_confirmation" name="password_confirmation" class="form-control" type="password" required>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Register</button>
                        </div>
                    </form>
                    <!-- /Account Form -->

                    <div class="account-footer">
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.footer')
