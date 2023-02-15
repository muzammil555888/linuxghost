<div class="row">
    <div class="col">
        @if (!empty($errors) && count($errors) > 0)
            @foreach ($errors->all() as $error)
                <script>
                    Lobibox.notify('error', {
                        pauseDelayOnHover: true,
                        size: 'mini',
                        rounded: true,
                        delayIndicator: false,
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        icon: 'bx bx-x-circle',
                        msg: @json($error)
                    });
                </script>
            @endforeach
        @endif

        @if (session('error'))
            <script>
                Lobibox.notify('error', {
                    pauseDelayOnHover: true,
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bx bx-x-circle',
                    msg: @json(session('error'))
                });
            </script>
        @endif

        @if (session('success'))
            <script>
                Lobibox.notify('success', {
                    pauseDelayOnHover: true,
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bx bx-x-circle',
                    msg: @json(session('success'))
                });
            </script>
        @endif

        @if (session('status'))
            <script>
                Lobibox.notify('default', {
                    pauseDelayOnHover: true,
                    size: 'mini',
                    rounded: true,
                    delayIndicator: false,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bx bx-x-circle',
                    msg: @json(session('status'))
                });
            </script>
        @endif
    </div>
</div>
