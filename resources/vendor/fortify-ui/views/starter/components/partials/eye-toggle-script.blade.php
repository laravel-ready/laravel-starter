@section('footerScripts')
    <script>
        window.addEventListener('load', function() {
            // #region Password Eye Toggler

            const eyeToggleButtons = document.querySelectorAll('#eye-toggle');

            if (eyeToggleButtons && eyeToggleButtons.length > 0) {
                eyeToggleButtons.forEach(eyeToggleButton => {
                    const dataInputId = eyeToggleButton.getAttribute('data-input-id');

                    if (dataInputId) {
                        const passwordInput = document.querySelector(`input[id="${dataInputId}"]`),
                            eyeOpen = eyeToggleButton.querySelector('#eye-open'),
                            eyeClose = eyeToggleButton.querySelector('#eye-close');

                        eyeToggleButton.addEventListener('click', function() {
                            passwordInput.type = passwordInput.type === 'password' ? 'text' :
                                'password';
                            eyeOpen.style.display = passwordInput.type === 'password' ? 'block' :
                                'none';
                            eyeClose.style.display = passwordInput.type === 'password' ? 'none' :
                                'block';
                        });
                    } else {
                        console.error('Eye Toggle Button must have a data-input-id attribute.');
                    }
                });
            }

            // #endregion
        });
    </script>
@endsection()
