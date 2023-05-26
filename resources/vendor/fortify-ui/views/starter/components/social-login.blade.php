@if (config('fortify-ui.use_socialite'))
    <!-- Splitter -->
    <div class="splitter-container">
        <div class="splitter">
            <!-- Splitter Background -->
            <div class="splitter-background">
                <span>
                    {{ __('fortify-ui::auth.splitter_or_login_with') }}
                </span>
            </div>
        </div>
    </div>
@endif
