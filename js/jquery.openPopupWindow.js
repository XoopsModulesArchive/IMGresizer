(function($)
{
    var _popupTracker = {}
    var _popupCounter = 0;
    $.fn.openPopupWindow = function(options)
    {
        var defaults = {
            height: 350, // sets the height in pixels of the window.
            width: 350, // sets the width in pixels of the window.
            toolbar: 0, // determines whether a toolbar (includes the forward and back buttons) is displayed {1 (YES) or 0 (NO)}.
            scrollbars: 0, // determines whether scrollbars appear on the window {1 (YES) or 0 (NO)}.
            status: 0, // whether a status line appears at the bottom of the window {1 (YES) or 0 (NO)}.
            resizable: 0, // whether the window can be resized {1 (YES) or 0 (NO)}. Can also be overloaded using resizable.
            left: 0, // left position when the window appears.
            top: 0, // top position when the window appears.
            center: 0, // should we center the window? {1 (YES) or 0 (NO)}. overrides top and left
            createnew: 0, // should we create a new window for each occurance {1 (YES) or 0 (NO)}.
            location: 0, // determines whether the address bar is displayed {1 (YES) or 0 (NO)}.
            menubar: 0 // determines whether the menu bar is displayed {1 (YES) or 0 (NO)}.
			
        };

        var options = $.extend(defaults, options);

        var obj = this;

        // center the window
        if (options.center == 1)
        {
            options.top = (screen.height - (options.height + 110)) / 2;
            options.left = (screen.width - options.width) / 2;
        }

        var parameters = "location=" + options.location +
                         ",menubar=" + options.menubar +
                         ",height=" + options.height +
                         ",width=" + options.width +
                         ",toolbar=" + options.toolbar +
                         ",scrollbars=" + options.scrollbars +
                         ",status=" + options.status +
                         ",resizable=" + options.resizable +
                         ",left=" + options.left +
                         ",screenX=" + options.left +
                         ",top=" + options.top +
                         ",screenY=" + options.top;

        // target url
        var target = obj.attr("href");       
        
        // test if popup window is already open, if it is, just give it fokus.        
        var popup = _popupTracker[target];
        
        if (options.createnew == 0 && popup !== undefined && !popup.closed)
        {            
            popup.focus();
        } 
        else
        {
            var name = "PopupWindow" + _popupCounter;
            _popupCounter++;
                        
            // open window
            popup = window.open(target, name, parameters);            
            _popupTracker[target] = popup;
            _popupTracker[target].focus();
        }
                
        return false;
    };        
})(jQuery);