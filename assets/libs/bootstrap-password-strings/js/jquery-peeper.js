!function(t, e, s, i) {
    "use strict";
    let n = "peeper"
      , o = {
        showEvent: "mouseup",
        showElement: "",
        mask: !0,
        maskOpacity: 1,
        autohide: !0,
        autohideTime: 4e3,
        maskCss: "gray",
        showPasswordCss: "fa fa-key",
        copyPasswordCss: "fa fa-copy",
        showCopyBtn: !0,
        showPasswordBtn: !0,
        animateDuration: 300
    };
    function a(e, s) {
        this.element = e,
        this.settings = t.extend({}, o, s),
        this._defaults = o,
        this._name = n,
        this._autoHiding = !1,
        this._container = null,
        this.init()
    }
    t.extend(a.prototype, {
        init: function() {
            this.peeperInit()
        },
        showPassword: function() {
            let e = t(this.element);
            e.attr("type", "text"),
            this.settings.mask && e.prev(".peeper-mask").stop().animate({
                width: "0"
            }, this.settings.animateDuration)
        },
        hidePassword: function() {
            let e = t(this.element)
              , s = this;
            this.settings.mask ? e.prev(".peeper-mask").stop().animate({
                width: e.outerWidth()
            }, this.settings.animateDuration, function() {
                e.attr("type", "password"),
                s._autoHiding && (s._autoHiding = !1)
            }) : e.attr("type", "password")
        },
        togglePasswordPeep: function() {
            let e = t(this.element);
            if ("password" == e.attr("type")) {
                if (e.prev(".peeper-mask").is(":animated"))
                    return;
                this.showPassword()
            } else
                this.hidePassword()
        },
        autoHide: function() {
            let e = this;
            if (!0 === e.settings.autohide) {
                if (e._autoHiding)
                    return;
                e._autoHiding = !0,
                setTimeout(function() {
                    t(e.element).is(":not(:focus)") && e.hidePassword()
                }, e.settings.autohideTime)
            }
        },
        copyPassword: function() {
            let e = t("<input>");
            t("body").append(e),
            e.val(t(this.element).val()).select(),
            s.execCommand("copy"),
            e.remove()
        },
        peeperInit: function() {
            t(this.element).wrap('<div class="peeper-container"></div>'),
            this._container = t(this.element).parent(),
            this.settings.showPasswordBtn && t(this.element).after('<span class="' + this.settings.showPasswordCss + ' peeper-keyhole"></span>'),
            this.settings.showCopyBtn && t(this.element).after('<span class="' + this.settings.copyPasswordCss + ' peeper-copy-pass"></span>'),
            this.settings.mask && (t(this.element).before('<div class="peeper-mask ' + this.settings.maskCss + '" style="opacity:' + this.settings.maskOpacity + '"></div>'),
            t(this.element).prev(".peeper-mask").css({
                width: t(this.element).outerWidth(),
                height: t(this.element).outerHeight(),
                position: "absolute",
                top: t(this.element).offsetTop,
                left: t(this.element).offsetLeft,
                "border-radius": t(this.element).css("borderRadius")
            })),
            "string" == typeof this.settings.showElement && "" == this.settings.showElement ? this.settings.showElement = t(this._container).find(".peeper-keyhole") : "string" == typeof this.settings.showElement && ".peeper-mask" == this.settings.showElement ? this.settings.showElement = t(this._container).find(".peeper-mask") : t(this.settings.showElement);
            let e = this
              , s = this.settings.showEvent.toLowerCase();
            switch (s) {
            case "mouseup":
                this.settings.showElement.on("mouseup", function(s) {
                    e.togglePasswordPeep(),
                    t(this.element).blur()
                }).on("mousedown", function(s) {
                    t(this.element).blur(),
                    e.togglePasswordPeep()
                }).on("mouseleave", function() {
                    e.hidePassword()
                });
                break;
            default:
                this.settings.showElement.on(s, function(t) {
                    e.togglePasswordPeep(),
                    e.autoHide(),
                    t.preventDefault()
                })
            }
            this.settings.showCopyBtn && t(this.element).next(".peeper-copy-pass").on("click", function(t) {
                e.copyPassword()
            }),
            t(this.element).on("blur", function(t) {
                e.hidePassword()
            })
        }
    }),
    t.fn[n] = function(e) {
        return this.each(function() {
            t.data(this, "plugin_" + n) || t.data(this, "plugin_" + n, new a(this,e))
        })
    }
}(jQuery, window, document);
