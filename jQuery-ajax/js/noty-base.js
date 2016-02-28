    function generate(type, message) {
        var n = noty({
            text        : message,
            type        : type,
            dismissQueue: true,
            timeout     : 10000,
            closeWith   : ['click'],
            layout      : 'topCenter',
            theme       : 'defaultTheme',
            maxVisible  : 10
        });
    }
