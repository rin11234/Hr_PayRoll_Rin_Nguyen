@include('dashboard.head')

<div class="main-wrapper">
    <div class="account-content">
        <div class="container">

            <!-- /Account Logo -->

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Login</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <!-- Account Form -->
                    <form action="{{ route('postLogin') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input id="email" name="email" class="form-control" type="text" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="password">Password</label>
                                    <input id="password" name="password" class="form-control" type="password" required>
                                </div>
                                <div class="col-auto">
                                    <a class="text-muted" href="#">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Login</button>
                        </div>
                    </form>
                    <!-- /Account Form -->

                    <div class="account-footer">
                        <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.footer')
