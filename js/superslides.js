/*! ease jquery */
jQuery.easing.jswing = jQuery.easing.swing, jQuery.extend(jQuery.easing, {
    def: "easeOutQuad",
    swing: function (e, t, n, o, r) {
        return jQuery.easing[jQuery.easing.def](e, t, n, o, r)
    },
    easeInQuad: function (e, t, n, o, r) {
        return o * (t /= r) * t + n
    },
    easeOutQuad: function (e, t, n, o, r) {
        return -o * (t /= r) * (t - 2) + n
    },
    easeInOutQuad: function (e, t, n, o, r) {
        return 1 > (t /= r / 2) ? o / 2 * t * t + n : -o / 2 * (--t * (t - 2) - 1) + n
    },
    easeInCubic: function (e, t, n, o, r) {
        return o * (t /= r) * t * t + n
    },
    easeOutCubic: function (e, t, n, o, r) {
        return o * ((t = t / r - 1) * t * t + 1) + n
    },
    easeInOutCubic: function (e, t, n, o, r) {
        return 1 > (t /= r / 2) ? o / 2 * t * t * t + n : o / 2 * ((t -= 2) * t * t + 2) + n
    },
    easeInQuart: function (e, t, n, o, r) {
        return o * (t /= r) * t * t * t + n
    },
    easeOutQuart: function (e, t, n, o, r) {
        return -o * ((t = t / r - 1) * t * t * t - 1) + n
    },
    easeInOutQuart: function (e, t, n, o, r) {
        return 1 > (t /= r / 2) ? o / 2 * t * t * t * t + n : -o / 2 * ((t -= 2) * t * t * t - 2) + n
    },
    easeInQuint: function (e, t, n, o, r) {
        return o * (t /= r) * t * t * t * t + n
    },
    easeOutQuint: function (e, t, n, o, r) {
        return o * ((t = t / r - 1) * t * t * t * t + 1) + n
    },
    easeInOutQuint: function (e, t, n, o, r) {
        return 1 > (t /= r / 2) ? o / 2 * t * t * t * t * t + n : o / 2 * ((t -= 2) * t * t * t * t + 2) + n
    },
    easeInSine: function (e, t, n, o, r) {
        return -o * Math.cos(t / r * (Math.PI / 2)) + o + n
    },
    easeOutSine: function (e, t, n, o, r) {
        return o * Math.sin(t / r * (Math.PI / 2)) + n
    },
    easeInOutSine: function (e, t, n, o, r) {
        return -o / 2 * (Math.cos(Math.PI * t / r) - 1) + n
    },
    easeInExpo: function (e, t, n, o, r) {
        return 0 == t ? n : o * Math.pow(2, 10 * (t / r - 1)) + n
    },
    easeOutExpo: function (e, t, n, o, r) {
        return t == r ? n + o : o * (-Math.pow(2, -10 * t / r) + 1) + n
    },
    easeInOutExpo: function (e, t, n, o, r) {
        return 0 == t ? n : t == r ? n + o : 1 > (t /= r / 2) ? o / 2 * Math.pow(2, 10 * (t - 1)) + n : o / 2 * (-Math.pow(2, -10 * --t) + 2) + n
    },
    easeInCirc: function (e, t, n, o, r) {
        return -o * (Math.sqrt(1 - (t /= r) * t) - 1) + n
    },
    easeOutCirc: function (e, t, n, o, r) {
        return o * Math.sqrt(1 - (t = t / r - 1) * t) + n
    },
    easeInOutCirc: function (e, t, n, o, r) {
        return 1 > (t /= r / 2) ? -o / 2 * (Math.sqrt(1 - t * t) - 1) + n : o / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
    },
    easeInElastic: function (e, t, n, o, r) {
        var i = 1.70158, s = 0, a = o;
        if (0 == t)return n;
        if (1 == (t /= r))return n + o;
        if (s || (s = .3 * r), Math.abs(o) > a) {
            a = o;
            var i = s / 4
        } else var i = s / (2 * Math.PI) * Math.asin(o / a);
        return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * r - i) * 2 * Math.PI / s)) + n
    },
    easeOutElastic: function (e, t, n, o, r) {
        var i = 1.70158, s = 0, a = o;
        if (0 == t)return n;
        if (1 == (t /= r))return n + o;
        if (s || (s = .3 * r), Math.abs(o) > a) {
            a = o;
            var i = s / 4
        } else var i = s / (2 * Math.PI) * Math.asin(o / a);
        return a * Math.pow(2, -10 * t) * Math.sin((t * r - i) * 2 * Math.PI / s) + o + n
    },
    easeInOutElastic: function (e, t, n, o, r) {
        var i = 1.70158, s = 0, a = o;
        if (0 == t)return n;
        if (2 == (t /= r / 2))return n + o;
        if (s || (s = r * .3 * 1.5), Math.abs(o) > a) {
            a = o;
            var i = s / 4
        } else var i = s / (2 * Math.PI) * Math.asin(o / a);
        return 1 > t ? -.5 * a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * r - i) * 2 * Math.PI / s) + n : .5 * a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * r - i) * 2 * Math.PI / s) + o + n
    },
    easeInBack: function (e, t, n, o, r, i) {
        return void 0 == i && (i = 1.70158), o * (t /= r) * t * ((i + 1) * t - i) + n
    },
    easeOutBack: function (e, t, n, o, r, i) {
        return void 0 == i && (i = 1.70158), o * ((t = t / r - 1) * t * ((i + 1) * t + i) + 1) + n
    },
    easeInOutBack: function (e, t, n, o, r, i) {
        return void 0 == i && (i = 1.70158), 1 > (t /= r / 2) ? o / 2 * t * t * (((i *= 1.525) + 1) * t - i) + n : o / 2 * ((t -= 2) * t * (((i *= 1.525) + 1) * t + i) + 2) + n
    },
    easeInBounce: function (e, t, n, o, r) {
        return o - jQuery.easing.easeOutBounce(e, r - t, 0, o, r) + n
    },
    easeOutBounce: function (e, t, n, o, r) {
        return 1 / 2.75 > (t /= r) ? o * 7.5625 * t * t + n : 2 / 2.75 > t ? o * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n : 2.5 / 2.75 > t ? o * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n : o * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
    },
    easeInOutBounce: function (e, t, n, o, r) {
        return r / 2 > t ? .5 * jQuery.easing.easeInBounce(e, 2 * t, 0, o, r) + n : .5 * jQuery.easing.easeOutBounce(e, 2 * t - r, 0, o, r) + .5 * o + n
    }
}), function (e, t, n, o) {
    function r(t, n) {
        this.element = t, this.options = e.extend({}, f, n), this._defaults = f, this._name = h, this.init()
    }

    function i() {
        var e, r = n.createElement("p"), i = {
            webkitTransform: "-webkit-transform",
            OTransform: "-o-transform",
            msTransform: "-ms-transform",
            MozTransform: "-moz-transform",
            transform: "transform"
        };
        n.body.insertBefore(r, null);
        for (var s in i)r.style[s] !== o && (r.style[s] = "translate3d(1px,1px,1px)", e = t.getComputedStyle(r).getPropertyValue(i[s]));
        return n.body.removeChild(r), e !== o && e.length > 0 && "none" !== e
    }

    function s(e, t) {
        var n = e.indexOf(t);
        return -1 !== n ? !0 : !1
    }

    function a(e) {
        return e === !0
    }

    function l(e) {
        return "number" == typeof e
    }

    function c(e) {
        return "function" == typeof e
    }

    function u(e) {
        return "object" == typeof e
    }

    var h = "pofloor", f = {
        pofloorFloorName: !1,
        childType: "div",
        windowsOn: 0,
        direction: "y",
        loop: !1,
        width: "100%",
        height: "100%",
        time: 250,
        easing: "linear",
        keyNavigation: !0,
        queued: !1,
        jump: !1,
        ready: !1,
        swipeNavigation: "mobile-only",
        swipeVelocity: .7
    };
    Array.prototype.indexOf || (Array.prototype.indexOf = function (e) {
        var t = this.length >>> 0, n = Number(arguments[1]) || 0;
        for (n = 0 > n ? Math.ceil(n) : Math.floor(n), 0 > n && (n += t); t > n; n++)if (n in this && this[n] === e)return n;
        return -1
    }), r.prototype = {
        init: function () {
            return this.AXIS_X = 1, this.AXIS_Y = 0, this.dataAttributeMap = {
                next: "pofloor-next",
                prev: "pofloor-prev",
                down: "pofloor-down",
                up: "pofloor-up",
                left: "pofloor-left",
                right: "pofloor-right"
            }, this.node = e(this.element), this.nodeChildren = this.node.children(this.options.childType), this.floorActive = l(this._getFloorFromHash()) ? this._getFloorFromHash() : this.options.windowsOn, this.NH = this.node.height(), this.NW = this.node.width(), this.directionIsArray = u(this.options.direction), this.supportTransform = i(), u(this.options.pofloorFloorName) && this.options.pofloorFloorName.length < this.nodeChildren.length ? this._emitConsoleMessage("error", "floors total (" + this.nodeChildren.length + ") & floor name array length (" + this.options.pofloorFloorName.length + ") don't match") : this.directionIsArray && this.options.direction.length < this.nodeChildren.length ? this._emitConsoleMessage("error", "floors total (" + this.nodeChildren.length + ") & direction array lenght (" + this.options.direction.length + ") don't match") : (this.setup(), o)
        }, setup: function () {
            this._positionElement(), this._bindEvents(), this.scrollToFloor(this.floorActive), u(this.options.pofloorFloorName) && this._updateHash(this.floorActive), c(this.options.ready) && this.options.ready()
        }, _bindEvents: function () {
            var r = this;
            if (this.node.on("scrollToDirection", function (e, t) {
                    r.scrollToDirection(t)
                }), this.node.on("scrollToStage", function (t, n) {
                    if ("string" == typeof n) {
                        var o = e.inArray(n, r.options.pofloorFloorName);
                        -1 !== o && r.scrollToFloor(o)
                    } else if ("number" == typeof n) {
                        if (n > r.nodeChildren.length)return;
                        r.scrollToFloor(n)
                    }
                }), this.node.on("next", function () {
                    var e = r.nodeChildren.eq(r.floorActive).data(r.dataAttributeMap.next);
                    return e ? r.scrollToFloor(e) : (r.next(), o)
                }), this.node.on("prev", function () {
                    var e = r.nodeChildren.eq(r.floorActive).data(r.dataAttributeMap.prev);
                    return e ? r.scrollToFloor(e) : (r.prev(), o)
                }), this.node.on("refresh", function () {
                    r.refresh()
                }), this.node.on("remove", function () {
                    r.destroy()
                }), e(t).on("resize.pofloor", function () {
                    r.scrollToFloor(r.floorActive, !1)
                }), u(this.options.pofloorFloorName) && e(t).on("hashchange.pofloor", function (e) {
                    r._hashchangeHandler(e)
                }), t.DeviceOrientationEvent && e(t).on("orientationchange.pofloor", function () {
                    r.scrollToFloor(r.floorActive)
                }), this.options.keyNavigation && e(n).on("keydown.pofloor", function (e) {
                    r._keypressHandler(e)
                }), this.options.swipeNavigation) {
                var i = "touchstart.pofloor touchend.pofloor";
                "mobile-only" !== this.options.swipeNavigation && (i += " mousedown.pofloor mouseup.pofloor"), this.node.on(i, function (e) {
                    r._handleTouchEvent(e)
                })
            }
        }, refresh: function () {
            this.nodeChildren = this.node.children(this.options.childType), this._positionElement()
        }, destroy: function () {
            this.node.off("scrollToDirection scrollToStage next prev refresh remove touchstart.pofloor touchend.pofloor mousedown.pofloor mouseup.pofloor"), e(t).off("resize.pofloor hashchange.pofloor orientationchange.pofloor"), e(n).off("keydown.pofloor"), this.node.css({
                position: "",
                overflow: "",
                top: "",
                left: "",
                width: "",
                height: ""
            }), this.nodeChildren.css({
                position: "",
                overflow: "",
                top: "",
                left: "",
                width: "",
                height: "",
                transform: ""
            }), this.node.removeData()
        }, _handleTouchEvent: function (e) {
            switch (e.type) {
                case"touchstart":
                case"mousedown":
                    this.touchStartTime = (new Date).getTime(), this.touchStartX = "touchstart" == e.type ? e.originalEvent.touches[0].pageX : e.pageX, this.touchStartY = "touchstart" == e.type ? e.originalEvent.touches[0].pageY : e.pageY;
                    break;
                case"touchend":
                case"mouseup":
                    this.touchEndTime = (new Date).getTime(), this.touchEndX = "touchend" == e.type ? e.originalEvent.changedTouches[0].pageX : e.pageX, this.touchEndY = "touchend" == e.type ? e.originalEvent.changedTouches[0].pageY : e.pageY;
                    var t = this.touchStartX - this.touchEndX, n = this.touchStartY - this.touchEndY, o = this.touchEndTime - this.touchStartTime, r = Math.abs(t) / o, i = Math.abs(n) / o;
                    r > this.options.swipeVelocity && Math.abs(t) > Math.abs(n) && 0 > t && this.scrollToDirection("left"), r > this.options.swipeVelocity && Math.abs(t) > Math.abs(n) && t > 0 && this.scrollToDirection("right"), i > this.options.swipeVelocity && Math.abs(t) < Math.abs(n) && 0 > n && this.scrollToDirection("up"), i > this.options.swipeVelocity && Math.abs(t) < Math.abs(n) && n > 0 && this.scrollToDirection("down")
            }
        }, _positionElement: function () {
            var t = this;
            this.directionIsArray && this._generateFloorMap(), this.node.css({
                position: "absolute",
                overflow: "hidden",
                top: "0",
                left: "0",
                width: this.options.width,
                height: this.options.height
            }), this.nodeChildren.css({
                position: "absolute",
                overflow: "auto",
                top: "0",
                left: "0",
                width: "100%",
                height: "100%"
            }), this.nodeChildren.each(function (n) {
                t.supportTransform ? e(this).css({
                    transform: function () {
                        return "y" === t.options.direction ? "translateY(" + 100 * n + "%)" : "x" === t.options.direction ? "translateX(" + 100 * n + "%)" : t.directionIsArray ? "translateY(" + 100 * t.options.direction[n][t.AXIS_Y] + "%) translateX(" + 100 * t.options.direction[n][t.AXIS_X] + "%)" : o
                    }
                }) : e(this).css({
                    top: function () {
                        return "y" === t.options.direction ? 100 * n + "%" : t.directionIsArray ? 100 * t.options.direction[n][t.AXIS_Y] + "%" : o
                    }, left: function () {
                        return "x" === t.options.direction ? 100 * n + "%" : t.directionIsArray ? 100 * t.options.direction[n][t.AXIS_X] + "%" : o
                    }
                })
            })
        }, _getFloorFromHash: function () {
            return this._getHash() && this.options.pofloorFloorName && s(this.options.pofloorFloorName, this._getHash()) ? this.options.pofloorFloorName.indexOf(this._getHash()) : !1
        }, _getHash: function () {
            if (t.location.hash) {
                var e = t.location.hash.split("#").pop();
                return e
            }
            return !1
        }, _hashchangeHandler: function () {
            l(this._getFloorFromHash()) && this._getFloorFromHash() !== this.floorActive && !this.node.is(":animated") && this.scrollToFloor(this._getFloorFromHash())
        }, _updateHash: function (e) {
            u(this.options.pofloorFloorName) && this._getHash() !== this.options.pofloorFloorName[e] && t.location.replace(("" + t.location).split("#")[0] + "#" + this.options.pofloorFloorName[e])
        }, _emitEvent: function (e, t, n) {
            this.node.trigger(e, floor = {from: t, to: n})
        }, _emitConsoleMessage: function (e, t) {
            "error" == e && console.error("pofloor.js: " + t), "warn" == e && console.warn("pofloor.js: " + t)
        }, _keypressHandler: function (t) {
            var n = this, o = t.keyCode || t.which;
            if (!e("input, textarea, button").is(":focus"))switch (o) {
                case 40:
                case 83:
                    n.scrollToDirection("down");
                    break;
                case 38:
                case 87:
                    n.scrollToDirection("up");
                    break;
                case 37:
                case 65:
                    n.scrollToDirection("left");
                    break;
                case 39:
                case 68:
                    n.scrollToDirection("right")
            }
        }, scrollToFloor: function (e) {
            var t = this, n = e === this.floorActive ? !1 : !0;
            this.NW !== this.node.width() && (this.NW = this.node.width()), this.NH !== this.node.height() && (this.NH = this.node.height());
            var o = this._getAnimationSettings(e);
            n ? (this._emitEvent("scrollStart", t.floorActive, e), this.node.stop().animate(o.property, t.options.time, t.options.easing, o.callback)) : this.node.stop().scrollTop(o.defaults.scrollTop).scrollLeft(o.defaults.scrollLeft), this.floorActive = e, this.node.data("current-floor", this.floorActive)
        }, prev: function () {
            var e = this.floorActive - 1;
            if (0 > e) {
                if (!this.options.loop)return;
                e = this.nodeChildren.length - 1
            }
            this.scrollToFloor(e)
        }, next: function () {
            var e = this.floorActive + 1;
            if (e > this.nodeChildren.length - 1) {
                if (!this.options.loop)return;
                e = 0
            }
            this.scrollToFloor(e)
        }, _getAnimationSettings: function (e) {
            var t = this, n = {
                property: {}, callback: function () {
                    t._emitEvent("scrollEnd", t.floorActive, e), t._updateHash(e)
                }, defaults: {}
            }, o = {
                property: {}, callback: function () {
                    t._emitEvent("scrollEnd", t.floorActive, e), t._updateHash(e)
                }
            };
            if (n.defaults.scrollTop = e * t.NH, n.defaults.scrollLeft = e * t.NW, "y" === t.options.direction)return n.property.scrollTop = e * t.NH, n;
            if ("x" === t.options.direction)return n.property.scrollLeft = e * t.NW, n;
            if (t.directionIsArray) {
                var r = t.options.direction[e][t.AXIS_Y] * t.NH, i = t.options.direction[e][t.AXIS_X] * t.NW;
                if (n.defaults.scrollTop = r, n.defaults.scrollLeft = i, t.options.queued) {
                    {
                        var s = this.node.scrollLeft() === i;
                        this.node.scrollTop() === r
                    }
                    return "x" === t.options.queued && s ? (n.property.scrollTop = r, n) : (n.property.scrollLeft = i, o.property.scrollTop = r, n.callback = function () {
                        t.node.stop().animate(o.property, t.options.time, t.options.easing, o.callback)
                    }, n)
                }
                return n.property.scrollTop = r, n.property.scrollLeft = i, n
            }
            return n
        }, scrollToDirection: function (e) {
            var t = this, n = this.nodeChildren.eq(this.floorActive).data(this.dataAttributeMap[e]);
            if (n)return t.scrollToFloor(n);
            var o = "right" == e || "left" == e, r = "down" == e || "up" == e;
            if (!("y" == t.options.direction && o || "x" == t.options.direction && r)) {
                if ("y" == t.options.direction && "down" == e || "x" == t.options.direction && "right" == e)return t.next();
                if ("y" == t.options.direction && "up" == e || "x" == t.options.direction && "left" == e)return t.prev();
                if (t.directionIsArray) {
                    var i = t.floorMap[t.floorActive], s = i[e];
                    if (l(s))return t.scrollToFloor(s);
                    var c = i.closest[e];
                    if (a(t.options.jump) && l(c))return t.scrollToFloor(c);
                    var u = i.furthest[e];
                    if (l(u) && (a(t.options.loop) || o && "loop-x" == t.options.loop || r && "loop-y" == t.options.loop))return t.scrollToFloor(u);
                    var h = i.increment[e];
                    if (l(h) && ("increment" == t.options.loop || r && "increment-y" == t.options.loop || o && "increment-x" == t.options.loop))return t.scrollToFloor(h);
                    if ("increment-x" == t.options.loop && o || "increment" == t.options.loop) {
                        if (t.floorActive == t.floorMap.furthest_x)return t.scrollToFloor(t.floorMap.closest_x);
                        if (t.floorActive == t.floorMap.closest_x)return t.scrollToFloor(t.floorMap.furthest_x)
                    }
                    if ("increment-y" == t.options.loop && r || "increment" == t.options.loop) {
                        if (t.floorActive == t.floorMap.furthest_y)return t.scrollToFloor(t.floorMap.closest_y);
                        if (t.floorActive == t.floorMap.closest_y)return t.scrollToFloor(t.floorMap.furthest_y)
                    }
                }
            }
        }, _getDirectFloorIndex: function (t, n, r) {
            var i = this, s = [this.options.direction[n][this.AXIS_Y], this.options.direction[n][this.AXIS_X]];
            "right" == r && (s[this.AXIS_X] += 1), "left" == r && (s[this.AXIS_X] -= 1), "up" == r && (s[this.AXIS_Y] -= 1), "down" == r && (s[this.AXIS_Y] += 1);
            var a = !1;
            return e.each(t, function (e, t) {
                return t[i.AXIS_Y] == s[i.AXIS_Y] && t[i.AXIS_X] == s[i.AXIS_X] ? (a = e, !1) : o
            }), a
        }, _getAxisFromDirection: function (e) {
            var t, n = this;
            switch (e) {
                case"up":
                case"down":
                    t = n.AXIS_Y;
                    break;
                case"left":
                case"right":
                    t = n.AXIS_X
            }
            return t
        }, _getClosestFloorIndex: function (t, n, o, r) {
            r = r || 0;
            var i = this._getAxisFromDirection(o), s = t[n][i], a = i == this.AXIS_Y ? this.AXIS_X : this.AXIS_Y, l = !1, c = !1;
            return e.each(t, function (e, u) {
                u[a] == t[n][a] + r && (("right" == o || "down" == o) && u[i] > s || ("left" == o || "up" == o) && s > u[i]) && (!c || Math.abs(u[i] - s) < Math.abs(c[i])) && (l = e, c = u)
            }), l
        }, _getFurthestFloorIndex: function (t, n, o, r) {
            r = r || 0;
            var i = this._getAxisFromDirection(o), s = t[n][i], a = i == this.AXIS_Y ? this.AXIS_X : this.AXIS_Y, l = !1, c = !1;
            return e.each(t, function (e, o) {
                o[a] == t[n][a] + r && (!l || Math.abs(o[i] - s) > Math.abs(l[i] - s)) && (l = o, c = e)
            }), c
        }, _generateFloorMap: function () {
            function t(e, t) {
                var n = !1;
                return jQuery.each(e, function (e, o) {
                    (n === !1 || n[t] < o[t]) && (n = o)
                }), n
            }

            function n(e, t) {
                var n = !1;
                return jQuery.each(e, function (e, o) {
                    (n === !1 || n[t] > o[t]) && (n = o)
                }), n
            }

            function o(e, t) {
                return jQuery.grep(i, function (n) {
                    var o = n[t] == e[t];
                    return o
                })
            }

            var r = this;
            this.floorMap = [];
            var i = jQuery.grep(r.options.direction, function (e, t) {
                return r.nodeChildren.length > t
            });
            e.each(i, function (e) {
                r.floorMap[e] = {
                    down: r._getDirectFloorIndex(i, e, "down"),
                    up: r._getDirectFloorIndex(i, e, "up"),
                    right: r._getDirectFloorIndex(i, e, "right"),
                    left: r._getDirectFloorIndex(i, e, "left"),
                    increment: {
                        down: r._getFurthestFloorIndex(i, e, "down", 1),
                        up: r._getFurthestFloorIndex(i, e, "up", -1),
                        right: r._getFurthestFloorIndex(i, e, "right", 1),
                        left: r._getFurthestFloorIndex(i, e, "left", -1)
                    },
                    closest: {
                        down: r._getClosestFloorIndex(i, e, "down"),
                        up: r._getClosestFloorIndex(i, e, "up"),
                        right: r._getClosestFloorIndex(i, e, "right"),
                        left: r._getClosestFloorIndex(i, e, "left")
                    },
                    furthest: {
                        down: r._getFurthestFloorIndex(i, e, "down"),
                        up: r._getFurthestFloorIndex(i, e, "up"),
                        right: r._getFurthestFloorIndex(i, e, "right"),
                        left: r._getFurthestFloorIndex(i, e, "left")
                    }
                }
            });
            var s = t(i, r.AXIS_X), a = o(s, r.AXIS_X), l = t(a, r.AXIS_Y), c = t(i, r.AXIS_Y), u = o(c, r.AXIS_Y), h = t(u, r.AXIS_X);
            r.floorMap.furthest_x = i.indexOf(h), r.floorMap.furthest_y = i.indexOf(l);
            var f = n(i, r.AXIS_X), p = o(f, r.AXIS_X), d = n(p, r.AXIS_Y), g = n(i, r.AXIS_Y), m = o(g, r.AXIS_Y), v = n(m, r.AXIS_X);
            r.floorMap.closest_x = i.indexOf(v), r.floorMap.closest_y = i.indexOf(d)
        }
    }, e.fn[h] = function (t) {
        return this.each(function () {
            e.data(this, h) || e.data(this, h, new r(this, t))
        }), this
    }
}(jQuery, window, document), window.PR_SHOULD_USE_CONTINUATION = !0, window.PR_TAB_WIDTH = 8, window.PR_normalizedHtml = window.PR = window.prettyPrintOne = window.prettyPrint = void 0, window._pr_isIE6 = function () {
    var e = navigator && navigator.userAgent && navigator.userAgent.match(/\bMSIE ([678])\./);
    return e = e ? +e[1] : !1, window._pr_isIE6 = function () {
        return e
    }, e
}, function () {
    function e(e) {
        return e.replace(_, "&amp;").replace(x, "&lt;").replace(A, "&gt;")
    }

    function t(n, o, r) {
        switch (n.nodeType) {
            case 1:
                var i = n.tagName.toLowerCase();
                o.push("<", i);
                var s = n.attributes, a = s.length;
                if (a) {
                    if (r) {
                        for (var l = [], c = a; --c >= 0;)l[c] = s[c];
                        l.sort(function (e, t) {
                            return e.name < t.name ? -1 : e.name === t.name ? 0 : 1
                        }), s = l
                    }
                    for (c = 0; a > c; ++c)l = s[c], l.specified && o.push(" ", l.name.toLowerCase(), '="', l.value.replace(_, "&amp;").replace(x, "&lt;").replace(A, "&gt;").replace(I, "&quot;"), '"')
                }
                for (o.push(">"), s = n.firstChild; s; s = s.nextSibling)t(s, o, r);
                (n.firstChild || !/^(?:br|link|img)$/.test(i)) && o.push("</", i, ">");
                break;
            case 3:
            case 4:
                o.push(e(n.nodeValue))
        }
    }

    function n(e) {
        function t(e) {
            if ("\\" !== e.charAt(0))return e.charCodeAt(0);
            switch (e.charAt(1)) {
                case"b":
                    return 8;
                case"t":
                    return 9;
                case"n":
                    return 10;
                case"v":
                    return 11;
                case"f":
                    return 12;
                case"r":
                    return 13;
                case"u":
                case"x":
                    return parseInt(e.substring(2), 16) || e.charCodeAt(1);
                case"0":
                case"1":
                case"2":
                case"3":
                case"4":
                case"5":
                case"6":
                case"7":
                    return parseInt(e.substring(1), 8);
                default:
                    return e.charCodeAt(1)
            }
        }

        function n(e) {
            return 32 > e ? (16 > e ? "\\x0" : "\\x") + e.toString(16) : (e = String.fromCharCode(e), ("\\" === e || "-" === e || "[" === e || "]" === e) && (e = "\\" + e), e)
        }

        function o(e) {
            var o = e.substring(1, e.length - 1).match(RegExp("\\\\u[0-9A-Fa-f]{4}|\\\\x[0-9A-Fa-f]{2}|\\\\[0-3][0-7]{0,2}|\\\\[0-7]{1,2}|\\\\[\\s\\S]|-|[^-\\\\]", "g"));
            e = [];
            for (var r = [], i = "^" === o[0], s = i ? 1 : 0, a = o.length; a > s; ++s) {
                var l = o[s];
                switch (l) {
                    case"\\B":
                    case"\\b":
                    case"\\D":
                    case"\\d":
                    case"\\S":
                    case"\\s":
                    case"\\W":
                    case"\\w":
                        e.push(l);
                        continue
                }
                l = t(l);
                var c;
                a > s + 2 && "-" === o[s + 1] ? (c = t(o[s + 2]), s += 2) : c = l, r.push([l, c]), 65 > c || l > 122 || (65 > c || l > 90 || r.push([32 | Math.max(65, l), 32 | Math.min(c, 90)]), 97 > c || l > 122 || r.push([-33 & Math.max(97, l), -33 & Math.min(c, 122)]))
            }
            for (r.sort(function (e, t) {
                return e[0] - t[0] || t[1] - e[1]
            }), o = [], l = [0 / 0, 0 / 0], s = 0; r.length > s; ++s)a = r[s], a[0] <= l[1] + 1 ? l[1] = Math.max(l[1], a[1]) : o.push(l = a);
            for (r = ["["], i && r.push("^"), r.push.apply(r, e), s = 0; o.length > s; ++s)a = o[s], r.push(n(a[0])), a[1] > a[0] && (a[1] + 1 > a[0] && r.push("-"), r.push(n(a[1])));
            return r.push("]"), r.join("")
        }

        function r(e) {
            for (var t = e.source.match(RegExp("(?:\\[(?:[^\\x5C\\x5D]|\\\\[\\s\\S])*\\]|\\\\u[A-Fa-f0-9]{4}|\\\\x[A-Fa-f0-9]{2}|\\\\[0-9]+|\\\\[^ux0-9]|\\(\\?[:!=]|[\\(\\)\\^]|[^\\x5B\\x5C\\(\\)\\^]+)", "g")), n = t.length, r = [], a = 0, l = 0; n > a; ++a) {
                var c = t[a];
                "(" === c ? ++l : "\\" === c.charAt(0) && (c = +c.substring(1)) && l >= c && (r[c] = -1)
            }
            for (a = 1; r.length > a; ++a)-1 === r[a] && (r[a] = ++i);
            for (l = a = 0; n > a; ++a)c = t[a], "(" === c ? (++l, void 0 === r[l] && (t[a] = "(?:")) : "\\" === c.charAt(0) && (c = +c.substring(1)) && l >= c && (t[a] = "\\" + r[l]);
            for (l = a = 0; n > a; ++a)"^" === t[a] && "^" !== t[a + 1] && (t[a] = "");
            if (e.ignoreCase && s)for (a = 0; n > a; ++a)c = t[a], e = c.charAt(0), c.length >= 2 && "[" === e ? t[a] = o(c) : "\\" !== e && (t[a] = c.replace(/[a-zA-Z]/g, function (e) {
                return e = e.charCodeAt(0), "[" + String.fromCharCode(-33 & e, 32 | e) + "]"
            }));
            return t.join("")
        }

        for (var i = 0, s = !1, a = !1, l = 0, c = e.length; c > l; ++l) {
            var u = e[l];
            if (u.ignoreCase)a = !0; else if (/[a-z]/i.test(u.source.replace(/\\u[0-9a-f]{4}|\\x[0-9a-f]{2}|\\[^ux]/gi, ""))) {
                s = !0, a = !1;
                break
            }
        }
        var h = [];
        for (l = 0, c = e.length; c > l; ++l) {
            if (u = e[l], u.global || u.multiline)throw Error("" + u);
            h.push("(?:" + r(u) + ")")
        }
        return RegExp(h.join("|"), a ? "gi" : "g")
    }

    function o(e) {
        var t = 0;
        return function (n) {
            for (var o = null, r = 0, i = 0, s = n.length; s > i; ++i)switch (n.charAt(i)) {
                case"	":
                    for (o || (o = []), o.push(n.substring(r, i)), r = e - t % e, t += r; r >= 0; r -= 16)o.push("                ".substring(0, r));
                    r = i + 1;
                    break;
                case"\n":
                    t = 0;
                    break;
                default:
                    ++t
            }
            return o ? (o.push(n.substring(r)), o.join("")) : n
        }
    }

    function r(e, t, n, o) {
        t && (e = {source: t, c: e}, n(e), o.push.apply(o, e.d))
    }

    function i(e, t) {
        function o(e) {
            for (var n = e.c, l = [n, v], u = 0, h = e.source.match(i) || [], f = {}, p = 0, d = h.length; d > p; ++p) {
                var g, m = h[p], y = f[m], b = void 0;
                if ("string" == typeof y)g = !1; else {
                    var _ = s[m.charAt(0)];
                    if (_)b = m.match(_[1]), y = _[0]; else {
                        for (g = 0; a > g; ++g)if (_ = t[g], b = m.match(_[1])) {
                            y = _[0];
                            break
                        }
                        b || (y = v)
                    }
                    !(g = y.length >= 5 && "lang-" === y.substring(0, 5)) || b && "string" == typeof b[1] || (g = !1, y = w), g || (f[m] = y)
                }
                if (_ = u, u += m.length, g) {
                    g = b[1];
                    var x = m.indexOf(g), A = x + g.length;
                    b[2] && (A = m.length - b[2].length, x = A - g.length), y = y.substring(5), r(n + _, m.substring(0, x), o, l), r(n + _ + x, g, c(y, g), l), r(n + _ + A, m.substring(A), o, l)
                } else l.push(n + _, y)
            }
            e.d = l
        }

        var i, s = {};
        (function () {
            for (var o = e.concat(t), r = [], a = {}, l = 0, c = o.length; c > l; ++l) {
                var u = o[l], h = u[3];
                if (h)for (var f = h.length; --f >= 0;)s[h.charAt(f)] = u;
                u = u[1], h = "" + u, a.hasOwnProperty(h) || (r.push(u), a[h] = null)
            }
            r.push(/[\0-\uffff]/), i = n(r)
        })();
        var a = t.length;
        return o
    }

    function s(e) {
        var t = [], n = [];
        return e.tripleQuotedStrings ? t.push([h, /^(?:\'\'\'(?:[^\'\\]|\\[\s\S]|\'{1,2}(?=[^\']))*(?:\'\'\'|$)|\"\"\"(?:[^\"\\]|\\[\s\S]|\"{1,2}(?=[^\"]))*(?:\"\"\"|$)|\'(?:[^\\\']|\\[\s\S])*(?:\'|$)|\"(?:[^\\\"]|\\[\s\S])*(?:\"|$))/, null, "'\""]) : e.multiLineStrings ? t.push([h, /^(?:\'(?:[^\\\']|\\[\s\S])*(?:\'|$)|\"(?:[^\\\"]|\\[\s\S])*(?:\"|$)|\`(?:[^\\\`]|\\[\s\S])*(?:\`|$))/, null, "'\"`"]) : t.push([h, /^(?:\'(?:[^\\\'\r\n]|\\.)*(?:\'|$)|\"(?:[^\\\"\r\n]|\\.)*(?:\"|$))/, null, "\"'"]), e.verbatimStrings && n.push([h, /^@\"(?:[^\"]|\"\")*(?:\"|$)/, null]), e.hashComments && (e.cStyleComments ? (t.push([p, /^#(?:(?:define|elif|else|endif|error|ifdef|include|ifndef|line|pragma|undef|warning)\b|[^\r\n]*)/, null, "#"]), n.push([h, /^<(?:(?:(?:\.\.\/)*|\/?)(?:[\w-]+(?:\/[\w-]+)+)?[\w-]+\.h|[a-z]\w*)>/, null])) : t.push([p, /^#[^\r\n]*/, null, "#"])), e.cStyleComments && (n.push([p, /^\/\/[^\r\n]*/, null]), n.push([p, /^\/\*[\s\S]*?(?:\*\/|$)/, null])), e.regexLiterals && n.push(["lang-regex", RegExp("^" + b + "(/(?=[^/*])(?:[^/\\x5B\\x5C]|\\x5C[\\s\\S]|\\x5B(?:[^\\x5C\\x5D]|\\x5C[\\s\\S])*(?:\\x5D|$))+/)")]), e = e.keywords.replace(/^\s+|\s+$/g, ""), e.length && n.push([f, RegExp("^(?:" + e.replace(/\s+/g, "|") + ")\\b"), null]), t.push([v, /^\s+/, null, " \r\n	 "]), n.push([g, /^@[a-z_$][a-z_$@0-9]*/i, null], [d, /^@?[A-Z]+[a-z][A-Za-z_$@0-9]*/, null], [v, /^[a-z_$][a-z_$@0-9]*/i, null], [g, /^(?:0x[a-f0-9]+|(?:\d(?:_\d+)*\d*(?:\.\d*)?|\.\d\+)(?:e[+\-]?\d+)?)[a-z]*/i, null, "0123456789"], [m, /^.[^\s\w\.$@\'\"\`\/\#]*/, null]), i(t, n)
    }

    function a(t) {
        function n(t) {
            if (t > l) {
                c && c !== u && (a.push("</span>"), c = null), !c && u && (c = u, a.push('<span class="', c, '">'));
                var n = e(p(r.substring(l, t))).replace(w ? g : d, "$1&#160;");
                w = v.test(n), a.push(n.replace(m, b)), l = t
            }
        }

        var r = t.source, i = t.g, s = t.d, a = [], l = 0, c = null, u = null, h = 0, f = 0, p = o(window.PR_TAB_WIDTH), d = /([\r\n ]) /g, g = /(^| ) /gm, m = /\r\n?|\n/g, v = /[ \r\n]$/, w = !0, y = window._pr_isIE6();
        y = y ? "PRE" === t.b.tagName ? 6 === y ? "&#160;\r\n" : 7 === y ? "&#160;<br>\r" : "&#160;\r" : "&#160;<br />" : "<br />";
        var b, _ = t.b.className.match(/\blinenums\b(?::(\d+))?/);
        if (_) {
            for (var x = [], A = 0; 10 > A; ++A)x[A] = y + '</li><li class="L' + A + '">';
            var I = _[1] && _[1].length ? _[1] - 1 : 0;
            a.push('<ol class="linenums"><li class="L', I % 10, '"'), I && a.push(' value="', I + 1, '"'), a.push(">"), b = function () {
                var e = x[++I % 10];
                return c ? "</span>" + e + '<span class="' + c + '">' : e
            }
        } else b = y;
        for (; ;)if (i.length > h ? s.length > f ? i[h] <= s[f] : !0 : !1)n(i[h]), c && (a.push("</span>"), c = null), a.push(i[h + 1]), h += 2; else {
            if (!(s.length > f))break;
            n(s[f]), u = s[f + 1], f += 2
        }
        n(r.length), c && a.push("</span>"), _ && a.push("</li></ol>"), t.a = a.join("")
    }

    function l(e, t) {
        for (var n = t.length; --n >= 0;) {
            var o = t[n];
            R.hasOwnProperty(o) ? "console"in window && console.warn("cannot override language handler %s", o) : R[o] = e
        }
    }

    function c(e, t) {
        return e && R.hasOwnProperty(e) || (e = /^\s*</.test(t) ? "default-markup" : "default-code"), R[e]
    }

    function u(e) {
        var t = e.f, n = e.e;
        e.a = t;
        try {
            var o, r = t.match(X);
            t = [];
            var i = 0, s = [];
            if (r)for (var l = 0, u = r.length; u > l; ++l) {
                var h = r[l];
                if (h.length > 1 && "<" === h.charAt(0)) {
                    if (!O.test(h))if (P.test(h))t.push(h.substring(9, h.length - 3)), i += h.length - 12; else if (D.test(h))t.push("\n"), ++i; else if (h.indexOf(y) >= 0 && h.replace(/\s(\w+)\s*=\s*(?:\"([^\"]*)\"|'([^\']*)'|(\S+))/g, ' $1="$2$3$4"').match(/[cC][lL][aA][sS][sS]=\"[^\"]*\bnocode\b/)) {
                        var f, p = h.match($)[2], d = 1;
                        f = l + 1;
                        e:for (; u > f; ++f) {
                            var g = r[f].match($);
                            if (g && g[2] === p)if ("/" === g[1]) {
                                if (0 === --d)break e
                            } else++d
                        }
                        u > f ? (s.push(i, r.slice(l, f + 1).join("")), l = f) : s.push(i, h)
                    } else s.push(i, h)
                } else {
                    var m;
                    d = h;
                    var v = d.indexOf("&");
                    if (0 > v)m = d; else {
                        for (--v; (v = d.indexOf("&#", v + 1)) >= 0;) {
                            var w = d.indexOf(";", v);
                            if (w >= 0) {
                                var b = d.substring(v + 3, w), _ = 10;
                                b && "x" === b.charAt(0) && (b = b.substring(1), _ = 16);
                                var x = parseInt(b, _);
                                isNaN(x) || (d = d.substring(0, v) + String.fromCharCode(x) + d.substring(w + 1))
                            }
                        }
                        m = d.replace(S, "<").replace(T, ">").replace(M, "'").replace(C, '"').replace(N, " ").replace(k, "&")
                    }
                    t.push(m), i += m.length
                }
            }
            o = {source: t.join(""), h: s};
            var A = o.source;
            e.source = A, e.c = 0, e.g = o.h, c(n, A)(e), a(e)
        } catch (I) {
            "console"in window && console.log(I && I.stack ? I.stack : I)
        }
    }

    var h = "str", f = "kwd", p = "com", d = "typ", g = "lit", m = "pun", v = "pln", w = "src", y = "nocode", b = function () {
        for (var e = ["!", "!=", "!==", "#", "%", "%=", "&", "&&", "&&=", "&=", "(", "*", "*=", "+=", ",", "-=", "->", "/", "/=", ":", "::", ";", "<", "<<", "<<=", "<=", "=", "==", "===", ">", ">=", ">>", ">>=", ">>>", ">>>=", "?", "@", "[", "^", "^=", "^^", "^^=", "{", "|", "|=", "||", "||=", "~", "break", "case", "continue", "delete", "do", "else", "finally", "instanceof", "return", "throw", "try", "typeof"], t = "(?:^^|[+-]", n = 0; e.length > n; ++n)t += "|" + e[n].replace(/([^=<>:&a-z])/g, "\\$1");
        return t += ")\\s*"
    }(), _ = /&/g, x = /</g, A = />/g, I = /\"/g, S = /&lt;/g, T = /&gt;/g, M = /&apos;/g, C = /&quot;/g, k = /&amp;/g, N = /&nbsp;/g, F = /[\r\n]/g, E = null, X = RegExp("[^<]+|<!--[\\s\\S]*?-->|<!\\[CDATA\\[[\\s\\S]*?\\]\\]>|</?[a-zA-Z](?:[^>\"']|'[^']*'|\"[^\"]*\")*>|<", "g"), O = /^<\!--/, P = /^<!\[CDATA\[/, D = /^<br\b/i, $ = /^<(\/?)([a-zA-Z][a-zA-Z0-9]*)/, L = s({
        keywords: "break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof alignof align_union asm axiom bool concept concept_map const_cast constexpr decltype dynamic_cast explicit export friend inline late_check mutable namespace nullptr reinterpret_cast static_assert static_cast template typeid typename using virtual wchar_t where break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof abstract boolean byte extends final finally implements import instanceof null native package strictfp super synchronized throws transient as base by checked decimal delegate descending event fixed foreach from group implicit in interface internal into is lock object out override orderby params partial readonly ref sbyte sealed stackalloc string select uint ulong unchecked unsafe ushort var break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof debugger eval export function get null set undefined var with Infinity NaN caller delete die do dump elsif eval exit foreach for goto if import last local my next no our print package redo require sub undef unless until use wantarray while BEGIN END break continue do else for if return while and as assert class def del elif except exec finally from global import in is lambda nonlocal not or pass print raise try with yield False True None break continue do else for if return while alias and begin case class def defined elsif end ensure false in module next nil not or redo rescue retry self super then true undef unless until when yield BEGIN END break continue do else for if return while case done elif esac eval fi function in local set then until ",
        hashComments: !0,
        cStyleComments: !0,
        multiLineStrings: !0,
        regexLiterals: !0
    }), R = {};
    l(L, ["default-code"]), l(i([], [[v, /^[^<?]+/], ["dec", /^<!\w[^>]*(?:>|$)/], [p, /^<\!--[\s\S]*?(?:-\->|$)/], ["lang-", /^<\?([\s\S]+?)(?:\?>|$)/], ["lang-", /^<%([\s\S]+?)(?:%>|$)/], [m, /^(?:<[%?]|[%?]>)/], ["lang-", /^<xmp\b[^>]*>([\s\S]+?)<\/xmp\b[^>]*>/i], ["lang-js", /^<script\b[^>]*>([\s\S]*?)(<\/script\b[^>]*>)/i], ["lang-css", /^<style\b[^>]*>([\s\S]*?)(<\/style\b[^>]*>)/i], ["lang-in.tag", /^(<\/?[a-z][^<>]*>)/i]]), ["default-markup", "htm", "html", "mxml", "xhtml", "xml", "xsl"]), l(i([[v, /^[\s]+/, null, " 	\r\n"], ["atv", /^(?:\"[^\"]*\"?|\'[^\']*\'?)/, null, "\"'"]], [["tag", /^^<\/?[a-z](?:[\w.:-]*\w)?|\/?>$/i], ["atn", /^(?!style[\s=]|on)[a-z](?:[\w:-]*\w)?/i], ["lang-uq.val", /^=\s*([^>\'\"\s]*(?:[^>\'\"\s\/]|\/(?=\s)))/], [m, /^[=<>\/]+/], ["lang-js", /^on\w+\s*=\s*\"([^\"]+)\"/i], ["lang-js", /^on\w+\s*=\s*\'([^\']+)\'/i], ["lang-js", /^on\w+\s*=\s*([^\"\'>\s]+)/i], ["lang-css", /^style\s*=\s*\"([^\"]+)\"/i], ["lang-css", /^style\s*=\s*\'([^\']+)\'/i], ["lang-css", /^style\s*=\s*([^\"\'>\s]+)/i]]), ["in.tag"]), l(i([], [["atv", /^[\s\S]+/]]), ["uq.val"]), l(s({
        keywords: "break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof alignof align_union asm axiom bool concept concept_map const_cast constexpr decltype dynamic_cast explicit export friend inline late_check mutable namespace nullptr reinterpret_cast static_assert static_cast template typeid typename using virtual wchar_t where ",
        hashComments: !0,
        cStyleComments: !0
    }), ["c", "cc", "cpp", "cxx", "cyc", "m"]), l(s({keywords: "null true false"}), ["json"]), l(s({
        keywords: "break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof abstract boolean byte extends final finally implements import instanceof null native package strictfp super synchronized throws transient as base by checked decimal delegate descending event fixed foreach from group implicit in interface internal into is lock object out override orderby params partial readonly ref sbyte sealed stackalloc string select uint ulong unchecked unsafe ushort var ",
        hashComments: !0,
        cStyleComments: !0,
        verbatimStrings: !0
    }), ["cs"]), l(s({
        keywords: "break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof abstract boolean byte extends final finally implements import instanceof null native package strictfp super synchronized throws transient ",
        cStyleComments: !0
    }), ["java"]), l(s({
        keywords: "break continue do else for if return while case done elif esac eval fi function in local set then until ",
        hashComments: !0,
        multiLineStrings: !0
    }), ["bsh", "csh", "sh"]), l(s({
        keywords: "break continue do else for if return while and as assert class def del elif except exec finally from global import in is lambda nonlocal not or pass print raise try with yield False True None ",
        hashComments: !0,
        multiLineStrings: !0,
        tripleQuotedStrings: !0
    }), ["cv", "py"]), l(s({
        keywords: "caller delete die do dump elsif eval exit foreach for goto if import last local my next no our print package redo require sub undef unless until use wantarray while BEGIN END ",
        hashComments: !0,
        multiLineStrings: !0,
        regexLiterals: !0
    }), ["perl", "pl", "pm"]), l(s({
        keywords: "break continue do else for if return while alias and begin case class def defined elsif end ensure false in module next nil not or redo rescue retry self super then true undef unless until when yield BEGIN END ",
        hashComments: !0,
        multiLineStrings: !0,
        regexLiterals: !0
    }), ["rb"]), l(s({
        keywords: "break continue do else for if return while auto case char const default double enum extern float goto int long register short signed sizeof static struct switch typedef union unsigned void volatile catch class delete false import new operator private protected public this throw true try typeof debugger eval export function get null set undefined var with Infinity NaN ",
        cStyleComments: !0,
        regexLiterals: !0
    }), ["js"]), l(i([], [[h, /^[\s\S]+/]]), ["regex"]), window.PR_normalizedHtml = t, window.prettyPrintOne = function (e, t) {
        var n = {f: e, e: t};
        return u(n), n.a
    }, window.prettyPrint = function (n) {
        function o() {
            for (var r = window.PR_SHOULD_USE_CONTINUATION ? c.now() + 250 : 1 / 0; i.length > f && r > c.now(); f++) {
                var s = i[f];
                if (s.className && s.className.indexOf("prettyprint") >= 0) {
                    var a = s.className.match(/\blang-(\w+)\b/);
                    a && (a = a[1]);
                    for (var l = !1, p = s.parentNode; p; p = p.parentNode)if (("pre" === p.tagName || "code" === p.tagName || "xmp" === p.tagName) && p.className && p.className.indexOf("prettyprint") >= 0) {
                        l = !0;
                        break
                    }
                    if (!l) {
                        if (p = s, null === E && (l = document.createElement("PRE"), l.appendChild(document.createTextNode('<!DOCTYPE foo PUBLIC "foo bar">\n<foo />')), E = !/</.test(l.innerHTML)), E) {
                            if (l = p.innerHTML, "XMP" === p.tagName)l = e(l); else {
                                if (p = p, "PRE" === p.tagName)p = !0; else if (F.test(l)) {
                                    var d = "";
                                    p.currentStyle ? d = p.currentStyle.whiteSpace : window.getComputedStyle && (d = window.getComputedStyle(p, null).whiteSpace), p = !d || "pre" === d
                                } else p = !0;
                                p || (l = l.replace(/(<br\s*\/?>)[\r\n]+/g, "$1").replace(/(?:[\r\n]+[ \t]*)+/g, " "))
                            }
                            l = l
                        } else {
                            for (l = [], p = p.firstChild; p; p = p.nextSibling)t(p, l);
                            l = l.join("")
                        }
                        if (l = l.replace(/(?:\r\n?|\n)$/, ""), h = {
                                f: l,
                                e: a,
                                b: s
                            }, u(h), s = h.a)if (a = h.b, "XMP" === a.tagName) {
                            for (l = document.createElement("PRE"), p = 0; a.attributes.length > p; ++p)d = a.attributes[p], d.specified && ("class" === d.name.toLowerCase() ? l.className = d.value : l.setAttribute(d.name, d.value));
                            l.innerHTML = s, a.parentNode.replaceChild(l, a)
                        } else a.innerHTML = s
                    }
                }
            }
            i.length > f ? setTimeout(o, 250) : n && n()
        }

        for (var r = [document.getElementsByTagName("pre"), document.getElementsByTagName("code"), document.getElementsByTagName("xmp")], i = [], s = 0; r.length > s; ++s)for (var a = 0, l = r[s].length; l > a; ++a)i.push(r[s][a]);
        r = null;
        var c = Date;
        c.now || (c = {
            now: function () {
                return (new Date).getTime()
            }
        });
        var h, f = 0;
        o()
    }, window.PR = {
        combinePrefixPatterns: n,
        createSimpleLexer: i,
        registerLangHandler: l,
        sourceDecorator: s,
        PR_ATTRIB_NAME: "atn",
        PR_ATTRIB_VALUE: "atv",
        PR_COMMENT: p,
        PR_DECLARATION: "dec",
        PR_KEYWORD: f,
        PR_LITERAL: g,
        PR_NOCODE: y,
        PR_PLAIN: v,
        PR_PUNCTUATION: m,
        PR_SOURCE: w,
        PR_STRING: h,
        PR_TAG: "tag",
        PR_TYPE: d
    }
}();
(function ($) {
    "use strict";
    $.ajaxChimp = {
        responses: {
            "We have sent you a confirmation email": 0,
            "Please enter a value": 1,
            "An email address must contain a single @": 2,
            "The domain portion of the email address is invalid (the portion after the @: )": 3,
            "The username portion of the email address is invalid (the portion before the @: )": 4,
            "This email address looks fake or invalid. Please enter a real email address": 5
        }, translations: {en: null}, init: function (selector, options) {
            $(selector).ajaxChimp(options)
        }
    };
    $.fn.ajaxChimp = function (options) {
        $(this).each(function (i, elem) {
            var form = $(elem);
            var email = form.find("input[type=email]");
            var label = form.find("label[for=" + email.attr("id") + "]");
            var settings = $.extend({url: form.attr("action"), language: "en"}, options);
            var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
            form.attr("novalidate", "true");
            email.attr("name", "EMAIL");
            form.submit(function () {
                var msg;

                function successCallback(resp) {
                    if (resp.result === "success") {
                        msg = "We have sent you a confirmation email";
                        label.removeClass("error").addClass("valid");
                        email.removeClass("error").addClass("valid")
                    } else {
                        email.removeClass("valid").addClass("error");
                        label.removeClass("valid").addClass("error");
                        var index = -1;
                        try {
                            var parts = resp.msg.split(" - ", 2);
                            if (parts[1] === undefined) {
                                msg = resp.msg
                            } else {
                                var i = parseInt(parts[0], 10);
                                if (i.toString() === parts[0]) {
                                    index = parts[0];
                                    msg = parts[1]
                                } else {
                                    index = -1;
                                    msg = resp.msg
                                }
                            }
                        } catch (e) {
                            index = -1;
                            msg = resp.msg
                        }
                    }
                    if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) {
                        msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]
                    }
                    label.html(msg);
                    label.show(2e3);
                    if (settings.callback) {
                        settings.callback(resp)
                    }
                }

                var data = {};
                var dataArray = form.serializeArray();
                $.each(dataArray, function (index, item) {
                    data[item.name] = item.value
                });
                $.ajax({
                    url: url,
                    data: data,
                    success: successCallback,
                    dataType: "jsonp",
                    error: function (resp, text) {
                        console.log("mailchimp ajax submit error: " + text)
                    }
                });
                var submitMsg = "Submitting...";
                if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) {
                    submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                }
                label.html(submitMsg).show(2e3);
                return false
            })
        });
        return this
    }
})(jQuery);
/*! Superslides */
(function (i, t) {
    var n, e = "superslides";
    n = function (n, e) {
        this.options = t.extend({
            play: !1,
            animation_speed: 600,
            animation_easing: "swing",
            animation: "slide",
            inherit_width_from: i,
            inherit_height_from: i,
            pagination: !0,
            hashchange: !1,
            scrollable: !0,
            elements: {
                preserve: ".preserve",
                nav: ".slides-navigation",
                container: ".slides-container",
                pagination: ".slides-pagination"
            }
        }, e);
        var s = this, o = t("<div>", {"class": "slides-control"}), a = 1;
        this.$el = t(n), this.$container = this.$el.find(this.options.elements.container);
        var r = function () {
            return a = s._findMultiplier(), s.$el.on("click", s.options.elements.nav + " a", function (i) {
                i.preventDefault(), s.stop(), t(this).hasClass("next") ? s.animate("next", function () {
                    s.start()
                }) : s.animate("prev", function () {
                    s.start()
                })
            }), t(document).on("keyup", function (i) {
                37 === i.keyCode && s.animate("prev"), 39 === i.keyCode && s.animate("next")
            }), t(i).on("resize", function () {
                setTimeout(function () {
                    var i = s.$container.children();
                    s.width = s._findWidth(), s.height = s._findHeight(), i.css({
                        width: s.width,
                        left: s.width
                    }), s.css.containers(), s.css.images()
                }, 10)
            }), t(i).on("hashchange", function () {
                var i, t = s._parseHash();
                i = s._upcomingSlide(t), i >= 0 && i !== s.current && s.animate(i)
            }), s.pagination._events(), s.start(), s
        }, h = {
            containers: function () {
                s.init ? (s.$el.css({height: s.height}), s.$control.css({
                    width: s.width * a,
                    left: -s.width
                }), s.$container.css({})) : (t("body").css({margin: 0}), s.$el.css({
                    position: "relative",
                    overflow: "hidden",
                    width: "100%",
                    height: s.height
                }), s.$control.css({
                    position: "relative",
                    transform: "translate3d(0)",
                    height: "100%",
                    width: s.width * a,
                    left: -s.width
                }), s.$container.css({
                    display: "none",
                    margin: "0",
                    padding: "0",
                    listStyle: "none",
                    position: "relative",
                    height: "100%"
                })), 1 === s.size() && s.$el.find(s.options.elements.nav).hide()
            }, images: function () {
                var i = s.$container.find("img").not(s.options.elements.preserve);
                i.removeAttr("width").removeAttr("height").css({
                    "-webkit-backface-visibility": "hidden",
                    "-ms-interpolation-mode": "bicubic",
                    position: "absolute",
                    left: "0",
                    top: "0",
                    "z-index": "-1",
                    "max-width": "none"
                }), i.each(function () {
                    var i = s.image._aspectRatio(this), n = this;
                    if (t.data(this, "processed"))s.image._scale(n, i), s.image._center(n, i); else {
                        var e = new Image;
                        e.onload = function () {
                            s.image._scale(n, i), s.image._center(n, i), t.data(n, "processed", !0)
                        }, e.src = this.src
                    }
                })
            }, children: function () {
                var i = s.$container.children();
                i.is("img") && (i.each(function () {
                    if (t(this).is("img")) {
                        t(this).wrap("<div>");
                        var i = t(this).attr("id");
                        t(this).removeAttr("id"), t(this).parent().attr("id", i)
                    }
                }), i = s.$container.children()), s.init || i.css({
                    display: "none",
                    left: 2 * s.width
                }), i.css({position: "absolute", overflow: "hidden", height: "100%", width: s.width, top: 0, zIndex: 0})
            }
        }, c = {
            slide: function (i, t) {
                var n = s.$container.children(), e = n.eq(i.upcoming_slide);
                e.css({
                    left: i.upcoming_position,
                    display: "block"
                }), s.$control.animate({left: i.offset}, s.options.animation_speed, s.options.animation_easing, function () {
                    s.size() > 1 && (s.$control.css({left: -s.width}), n.eq(i.upcoming_slide).css({
                        left: s.width,
                        zIndex: 2
                    }), i.outgoing_slide >= 0 && n.eq(i.outgoing_slide).css({
                        left: s.width,
                        display: "none",
                        zIndex: 0
                    })), t()
                })
            }, fade: function (i, t) {
                var n = this, e = n.$container.children(), s = e.eq(i.outgoing_slide), o = e.eq(i.upcoming_slide);
                o.css({
                    left: this.width,
                    opacity: 1,
                    display: "block"
                }), i.outgoing_slide >= 0 ? s.animate({opacity: 0}, n.options.animation_speed, n.options.animation_easing, function () {
                    n.size() > 1 && (e.eq(i.upcoming_slide).css({zIndex: 2}), i.outgoing_slide >= 0 && e.eq(i.outgoing_slide).css({
                        opacity: 1,
                        display: "none",
                        zIndex: 0
                    })), t()
                }) : (o.css({zIndex: 2}), t())
            }
        };
        c = t.extend(c, t.fn.superslides.fx);
        var d = {
            _centerY: function (i) {
                var n = t(i);
                n.css({top: (s.height - n.height()) / 2})
            }, _centerX: function (i) {
                var n = t(i);
                n.css({left: (s.width - n.width()) / 2})
            }, _center: function (i) {
                s.image._centerX(i), s.image._centerY(i)
            }, _aspectRatio: function (i) {
                if (!i.naturalHeight && !i.naturalWidth) {
                    var t = new Image;
                    t.src = i.src, i.naturalHeight = t.height, i.naturalWidth = t.width
                }
                return i.naturalHeight / i.naturalWidth
            }, _scale: function (i, n) {
                n = n || s.image._aspectRatio(i);
                var e = s.height / s.width, o = t(i);
                e > n ? o.css({height: s.height, width: s.height / n}) : o.css({height: s.width * n, width: s.width})
            }
        }, l = {
            _setCurrent: function (i) {
                if (s.$pagination) {
                    var t = s.$pagination.children();
                    t.removeClass("current"), t.eq(i).addClass("current")
                }
            }, _addItem: function (i) {
                var n = i + 1, e = n, o = s.$container.children().eq(i), a = o.attr("id");
                a && (e = a);
                var r = t("<a>", {href: "#" + e, text: e});
                r.appendTo(s.$pagination)
            }, _setup: function () {
                if (s.options.pagination && 1 !== s.size()) {
                    var i = t("<nav>", {"class": s.options.elements.pagination.replace(/^\./, "")});
                    s.$pagination = i.appendTo(s.$el);
                    for (var n = 0; s.size() > n; n++)s.pagination._addItem(n)
                }
            }, _events: function () {
                s.$el.on("click", s.options.elements.pagination + " a", function (i) {
                    i.preventDefault();
                    var t, n = s._parseHash(this.hash);
                    t = s._upcomingSlide(n, !0), t !== s.current && s.animate(t, function () {
                        s.start()
                    })
                })
            }
        };
        return this.css = h, this.image = d, this.pagination = l, this.fx = c, this.animation = this.fx[this.options.animation], this.$control = this.$container.wrap(o).parent(".slides-control"), s._findPositions(), s.width = s._findWidth(), s.height = s._findHeight(), this.css.children(), this.css.containers(), this.css.images(), this.pagination._setup(), r()
    }, n.prototype = {
        _findWidth: function () {
            return t(this.options.inherit_width_from).width()
        }, _findHeight: function () {
            return t(this.options.inherit_height_from).height()
        }, _findMultiplier: function () {
            return 1 === this.size() ? 1 : 3
        }, _upcomingSlide: function (i, t) {
            if (t && !isNaN(i) && (i -= 1), /next/.test(i))return this._nextInDom();
            if (/prev/.test(i))return this._prevInDom();
            if (/\d/.test(i))return +i;
            if (i && /\w/.test(i)) {
                var n = this._findSlideById(i);
                return n >= 0 ? n : 0
            }
            return 0
        }, _findSlideById: function (i) {
            return this.$container.find("#" + i).index()
        }, _findPositions: function (i, t) {
            t = t || this, void 0 === i && (i = -1), t.current = i, t.next = t._nextInDom(), t.prev = t._prevInDom()
        }, _nextInDom: function () {
            var i = this.current + 1;
            return i === this.size() && (i = 0), i
        }, _prevInDom: function () {
            var i = this.current - 1;
            return 0 > i && (i = this.size() - 1), i
        }, _parseHash: function (t) {
            return t = t || i.location.hash, t = t.replace(/^#/, ""), t && !isNaN(+t) && (t = +t), t
        }, size: function () {
            return this.$container.children().length
        }, destroy: function () {
            return this.$el.removeData()
        }, update: function () {
            this.css.children(), this.css.containers(), this.css.images(), this.pagination._addItem(this.size()), this._findPositions(this.current), this.$el.trigger("updated.slides")
        }, stop: function () {
            clearInterval(this.play_id), delete this.play_id, this.$el.trigger("stopped.slides")
        }, start: function () {
            var n = this;
            n.options.hashchange ? t(i).trigger("hashchange") : this.animate(), this.options.play && (this.play_id && this.stop(), this.play_id = setInterval(function () {
                n.animate()
            }, this.options.play)), this.$el.trigger("started.slides")
        }, animate: function (t, n) {
            var e = this, s = {};
            if (!(this.animating || (this.animating = !0, void 0 === t && (t = "next"), s.upcoming_slide = this._upcomingSlide(t), s.upcoming_slide >= this.size()))) {
                if (s.outgoing_slide = this.current, s.upcoming_position = 2 * this.width, s.offset = -s.upcoming_position, ("prev" === t || s.outgoing_slide > t) && (s.upcoming_position = 0, s.offset = 0), e.size() > 1 && e.pagination._setCurrent(s.upcoming_slide), e.options.hashchange) {
                    var o = s.upcoming_slide + 1, a = e.$container.children(":eq(" + s.upcoming_slide + ")").attr("id");
                    i.location.hash = a ? a : o
                }
                e.$el.trigger("animating.slides", [s]), e.animation(s, function () {
                    e._findPositions(s.upcoming_slide, e), "function" == typeof n && n(), e.animating = !1, e.$el.trigger("animated.slides"), e.init || (e.$el.trigger("init.slides"), e.init = !0, e.$container.fadeIn("fast"))
                })
            }
        }
    }, t.fn[e] = function (i, s) {
        var o = [];
        return this.each(function () {
            var a, r, h;
            return a = t(this), r = a.data(e), h = "object" == typeof i && i, r || (o = a.data(e, r = new n(this, h))), "string" == typeof i && (o = r[i], "function" == typeof o) ? o = o.call(r, s) : void 0
        }), o
    }, t.fn[e].fx = {}
})(this, jQuery);