(function(b) {
    b.fn.booklet = function(c) {
        var d = b.extend({}, b.fn.booklet.defaults, c);
        return b(this).each(function() {
            var j, e, h, k, f, g;
            if (typeof c == "string") {
                if (b(this).data("booklet")) {
                    j = c.toLowerCase();
                    h = b.fn.booklet.interfaces[b(this).data("id")];
                    if (j == "next") {
                        h.next();
                    } else {
                        if (j == "prev") {
                            h.prev();
                        }
                    }
                }
            } else {
                if (typeof c == "number") {
                    if (b(this).data("booklet")) {
                        g = c;
                        h = b.fn.booklet.interfaces[b(this).data("id")];
                        if (g % 2 != 0) {
                            g -= 1;
                        }
                        h.gotoPage(g);
                    }
                } else {
                    e = b.extend(true, {}, d);
                    k = b.fn.booklet.interfaces.length;
                    for (f = 0; f < k; f++) {
                        if (typeof b.fn.booklet.interfaces[f] == "undefined") {
                            k = f;
                            break;
                        }
                    }
                    h = new a(b(this), e, k);
                    b.fn.booklet.interfaces[k] = h;
                }
            }
        });
    };
    function a(ac, ae, G) {
        var ao, av, S, A, O, L, I, E, o, ad, ah, C, N, aw = new Array(), K = new Array(), F, ab, Z, Y, W, U, ay, ag, J, s, c, aq, am, ax, az, T, al, ak, R, aj, ai, m, D, B, af, y, e, d, l, X, q, v, r, an, w, k, u, P, n, au, t, g, ap = '<div class="b-page-empty" title="" rel=""></div>', at = '<div class="b-page-blank" title="" rel=""></div>';
        ad = false;
        ah = false;
        C = N = false;
        ao = this;
        ao.options = ae;
        ao.id = G;
        ao.hash = "";
        av = ao.options;
        S = ac.addClass("booklet");
        A = S.children(".b-load");
        h();
        S.data("booklet", true);
        S.data("id", G);
        S.data("total", A.children().length);
        if (!av.width) {
            av.width = S.width();
        }
        if (!av.height) {
            av.height = S.height();
        }
        S.width(av.width);
        S.height(av.height);
        av.pWidth = av.width / 2;
        av.pWidthN = "-" + av.width / 2 + "px";
        av.pWidthH = av.width / 4;
        av.pHeight = av.height;
        av.pTotal = A.children().length;
        av.speedH = av.speed / 2;
        if (av.direction == "LTR") {
            av.curr = 0;
        } else {
            if (av.direction == "RTL") {
                av.curr = av.pTotal - 2;
            }
        }
        if (!isNaN(av.startingPage) && av.startingPage <= av.pTotal && av.startingPage > 0) {
            if (av.startingPage % 2 != 0) {
                av.startingPage--;
            }
            av.curr = av.startingPage;
        }
        if (av.name) {
            document.title = av.name;
        } else {
            av.name = document.title;
        }
        if (av.shadows) {
            av.shadowTopFwdWidth = "-" + av.shadowTopFwdWidth + "px";
            av.shadowTopBackWidth = "-" + av.shadowTopBackWidth + "px";
        }
        if (av.menu) {
            l = b(av.menu).addClass("b-menu");
            E = av.curr;
            if (av.pageSelector) {
                q = b('<div class="b-selector b-selector-page"><span class="b-current">' + (E + 1) + " - " + (E + 2) + "</span></div>").appendTo(l);
                v = b("<ul></ul>").appendTo(q).empty().css("height", "auto");
                for (L = 0; L < av.pTotal; L += 2) {
                    I = L;
                    nums = I + 1 + "-" + (I + 2);
                    if (av.closed) {
                        I--;
                        if (L == 0) {
                            nums = "1";
                        } else {
                            if (L == av.pTotal - 2) {
                                nums = av.pTotal - 2;
                            } else {
                                nums = I + 1 + "-" + (I + 2);
                            }
                        }
                        if (av.covers) {
                            I--;
                            if (L == 0) {
                                nums = "";
                            } else {
                                if (L == av.pTotal - 2) {
                                    nums = "";
                                } else {
                                    nums = I + 1 + "-" + (I + 2);
                                }
                            }
                        }
                    }
                    if (av.direction == "RTL") {
                        nums = Math.abs(I - av.pTotal) - 1 + " - " + Math.abs(I - av.pTotal);
                        if (av.closed) {
                            if (L == av.pTotal - 2) {
                                nums = "1";
                            } else {
                                if (L == 0) {
                                    nums = av.pTotal - 2;
                                } else {
                                    nums = Math.abs(I - av.pTotal) - 3 + " - " + (Math.abs(I - av.pTotal) - 2);
                                }
                            }
                            if (av.covers) {
                                if (L == av.pTotal - 2) {
                                    nums = "";
                                } else {
                                    if (L == 0) {
                                        nums = "";
                                    } else {
                                        nums = Math.abs(I - av.pTotal) - 5 + " - " + (Math.abs(I - av.pTotal) - 4);
                                    }
                                }
                            }
                        }
                        q.find(".b-current").text(nums);
                        an = b('<li><a href="#/page/' + (L + 1) + '" id="selector-page-' + L + '"><span class="b-text">' + aw[L + 1] + '</span><span class="b-num">' + nums + "</span></a></li>").prependTo(v);
                    } else {
                        if (L == 0) {
                            q.find(".b-current").text(nums);
                        }
                        an = b('<li><a href="#/page/' + (L + 1) + '" id="selector-page-' + L + '"><span class="b-text">' + aw[L] + '</span><span class="b-num">' + nums + "</span></a></li>").appendTo(v);
                    }
                    w = an.find("a");
                    if (!av.hash) {
                        w.click(function() {
                            if (av.direction == "RTL") {
                                q.find(".b-current").text(b(this).find(".b-num").text());
                            }
                            k = parseInt(b(this).attr("id").replace("selector-page-", ""));
                            ao.gotoPage(k);
                            return false;
                        });
                    }
                }
                r = v.height();
                v.css({
                    height: 0,
                    "padding-bottom": 0
                });
                q.unbind("hover").hover(function() {
                    v.stop().animate({
                        height: r,
                        paddingBottom: 10
                    }, 500);
                }, function() {
                    v.stop().animate({
                        height: 0,
                        paddingBottom: 0
                    }, 500);
                });
            }
            if (av.chapterSelector) {
                X = K[av.curr];
                if (X == "") {
                    X = K[av.curr + 1];
                }
                u = b('<div class="b-selector b-selector-chapter"><span class="b-current">' + X + "</span></div>").appendTo(l);
                P = b("<ul></ul>").appendTo(u).empty().css("height", "auto");
                for (L = 0; L < av.pTotal; L += 1) {
                    if (K[L] != "" && typeof K[L] != "undefined") {
                        if (av.direction == "RTL") {
                            I = L;
                            if (I % 2 != 0) {
                                I--;
                            }
                            u.find(".b-current").text(K[L]);
                            au = b('<li><a href="#/page/' + (I + 1) + '" id="selector-page-' + I + '"><span class="b-text">' + K[L] + "</span></a></li>").prependTo(P);
                        } else {
                            au = b('<li><a href="#/page/' + (L + 1) + '" id="selector-page-' + L + '"><span class="b-text">' + K[L] + "</span></a></li>").appendTo(P);
                        }
                        t = au.find("a");
                        if (!av.hash) {
                            t.click(function() {
                                if (av.direction == "RTL") {
                                    u.find(".b-current").text(b(this).find(".b-text").text());
                                }
                                g = parseInt(b(this).attr("id").replace("selector-page-", ""));
                                ao.gotoPage(g);
                                return false;
                            });
                        }
                    }
                }
                n = P.height();
                P.css({
                    height: 0,
                    "padding-bottom": 0
                });
                u.unbind("hover").hover(function() {
                    P.stop().animate({
                        height: n,
                        paddingBottom: 10
                    }, 500);
                }, function() {
                    P.stop().animate({
                        height: 0,
                        paddingBottom: 0
                    }, 500);
                });
            }
        }
        b.extend(ao, {
            next: function() {
                if (!ad) {
                    ao.gotoPage(av.curr + 2);
                }
            },
            prev: function() {
                if (!ad) {
                    ao.gotoPage(av.curr - 2);
                }
            },
            gotoPage: function(i) {
                if (i > av.curr && i < av.pTotal && i >= 0 && !ad) {
                    ad = true;
                    o = i - av.curr;
                    av.curr = i;
                    av.before.call(ao, av);
                    ar();
                    z();
                    M(av.curr + 1, av);
                    Q(o, true, ax);
                    Y.stop().animate({
                        width: 0
                    }, av.speedH, av.easeIn);
                    W.stop().animate({
                        left: av.pWidthH,
                        width: av.pWidthH,
                        paddingLeft: av.shadowBtmWidth
                    }, av.speedH, av.easeIn).animate({
                        left: 0,
                        width: av.pWidth,
                        paddingLeft: 0
                    }, av.speedH);
                    c.animate({
                        left: av.shadowBtmWidth
                    }, av.speedH, av.easeIn).animate({
                        left: 0
                    }, av.speedH, av.easeOut, function() {
                        H();
                    });
                } else {
                    if (i < av.curr && i < av.pTotal && i >= 0 && !ad) {
                        ad = true;
                        o = av.curr - i;
                        av.curr = i;
                        av.before.call(ao, av);
                        ar();
                        z();
                        M(av.curr + 1, av);
                        Q(o, false, az);
                        Z.animate({
                            left: av.pWidth,
                            width: 0
                        }, av.speed, av.easing);
                        J.animate({
                            left: av.pWidthN
                        }, av.speed, av.easing);
                        ab.animate({
                            left: av.pWidthH,
                            width: av.pWidthH
                        }, av.speedH, av.easeIn).animate({
                            left: av.pWidth,
                            width: av.pWidth
                        }, av.speedH, av.easeOut);
                        ag.animate({
                            right: av.shadowBtmWidth
                        }, av.speedH, av.easeIn).animate({
                            right: 0
                        }, av.speedH, av.easeOut, function() {
                            H();
                        });
                    }
                }
            }
        });
        if (av.next) {
            af = b(av.next);
            af.click(function(i) {
                i.preventDefault();
                ao.next();
            });
        }
        if (av.prev) {
            y = b(av.prev);
            y.click(function(i) {
                i.preventDefault();
                ao.prev();
            });
        }
        if (av.overlays) {
            ak = b('<div class="b-overlay b-overlay-prev b-prev" title="Previous Page"></div>').appendTo(S);
            al = b('<div class="b-overlay b-overlay-next b-next" title="Next Page"></div>').appendTo(S);
            T = S.find(".b-overlay");
            if (b.browser.msie) {
                T.css({
                    background: "#fff",
                    filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=0) !important"
                });
            }
        }
        if (av.tabs) {
            ai = b('<div class="b-tab b-tab-prev b-prev" title="Previous Page">Previous</div>').appendTo(S);
            aj = b('<div class="b-tab b-tab-next b-next" title="Next Page">Next</div>').appendTo(S);
            R = S.find(".b-tab");
            if (av.tabWidth) {
                R.width(av.tabWidth);
            }
            if (av.tabHeight) {
                R.height(av.tabHeight);
            }
            R.css({
                top: "-" + aj.outerHeight() + "px"
            });
            S.css({
                marginTop: aj.outerHeight()
            });
            if (av.direction == "RTL") {
                aj.html("Previous").attr("title", "Previous Page");
                ai.html("Next").attr("title", "Next Page");
            }
        } else {
            S.css({
                marginTop: 0
            });
        }
        if (av.arrows) {
            B = b('<div class="b-arrow b-arrow-prev b-prev" title="Previous Page"><div>Previous</div></div>').appendTo(S);
            D = b('<div class="b-arrow b-arrow-next b-next" title="Next Page"><div>Next</div></div>').appendTo(S);
            m = S.find(".b-arrow");
            if (av.direction == "RTL") {
                D.html("<div>Previous</div>").attr("title", "Previous Page");
                B.html("<div>Next</div>").attr("title", "Next Page");
            }
        }
        e = S.find(".b-next");
        d = S.find(".b-prev");
        e.click(function(i) {
            i.preventDefault();
            ao.next();
        });
        d.click(function(i) {
            i.preventDefault();
            ao.prev();
        });
        if (av.hovers) {
            e.hover(function() {
                if (!ad && av.curr + 2 <= av.pTotal - 2) {
                    Y.stop().animate({
                        width: av.pWidth - 40
                    }, 500, av.easing);
                    W.stop().animate({
                        left: av.width - 40,
                        width: 20,
                        paddingLeft: 10
                    }, 500, av.easing);
                    C = true;
                }
            }, function() {
                if (!ad && av.curr + 2 <= av.pTotal - 2) {
                    Y.stop().animate({
                        width: av.pWidth
                    }, 500, av.easing);
                    W.stop().animate({
                        left: av.width,
                        width: 0,
                        paddingLeft: 0
                    }, 500, av.easing);
                    C = false;
                }
            });
            d.hover(function() {
                if (!ad && av.curr - 2 >= 0) {
                    Z.stop().animate({
                        left: 10,
                        width: av.pWidth - 10
                    }, 400, av.easing);
                    J.stop().animate({
                        left: "-10px"
                    }, 400, av.easing);
                    ab.stop().animate({
                        left: 10,
                        width: 40
                    }, 400, av.easing);
                    ag.stop().animate({
                        right: 10
                    }, 400, av.easing);
                    N = true;
                }
            }, function() {
                if (!ad && av.curr - 2 >= 0) {
                    Z.stop().animate({
                        left: 0,
                        width: av.pWidth
                    }, 400, av.easing);
                    J.stop().animate({
                        left: 0
                    }, 400, av.easing);
                    ab.stop().animate({
                        left: 0,
                        width: 0
                    }, 400, av.easing);
                    ag.stop().animate({
                        right: 0
                    }, 400, av.easing);
                    N = false;
                }
            });
        }
        if (av.arrows) {
            if (b.support.opacity) {
                e.hover(function() {
                    D.find("div").stop().fadeTo("fast", 1);
                }, function() {
                    D.find("div").stop().fadeTo("fast", 0);
                });
                d.hover(function() {
                    B.find("div").stop().fadeTo("fast", 1);
                }, function() {
                    B.find("div").stop().fadeTo("fast", 0);
                });
            } else {
                e.hover(function() {
                    D.find("div").show();
                }, function() {
                    D.find("div").hide();
                });
                d.hover(function() {
                    B.find("div").show();
                }, function() {
                    B.find("div").hide();
                });
            }
        }
        if (av.keyboard) {
            b(document).keyup(function(i) {
                if (i.keyCode == 37) {
                    ao.prev();
                } else {
                    if (i.keyCode == 39) {
                        ao.next();
                    }
                }
            });
        }
        if (av.hash) {
            f();
            clearInterval();
            setInterval(function() {
                V();
            }, 250);
        }
        aa();
        function h() {
            if (A.children().length % 2 != 0) {
                if (av.closed && av.covers) {
                    A.children().last().before(at);
                } else {
                    A.children().last().after(at);
                }
            }
            if (av.closed) {
                b(ap).attr({
                    title: av.closedFrontTitle || "Beginning",
                    rel: av.closedFrontChapter || "Beginning of Book"
                }).prependTo(A);
                A.children().last().attr({
                    title: av.closedBackTitle || "End",
                    rel: av.closedBackChapter || "End of Book"
                });
                A.append(ap);
            }
            if (av.direction == "LTR") {
                I = 0;
            } else {
                I = A.children().length;
                if (av.closed) {
                    I -= 2;
                }
                if (av.covers) {
                    I -= 2;
                }
                b(A.children().get().reverse()).each(function() {
                    b(this).appendTo(A);
                });
            }
            A.children().each(function(j) {
                if (b(this).attr("rel")) {
                    K[j] = b(this).attr("rel");
                } else {
                    K[j] = "";
                }
                aw[j] = b(this).attr("title");
                if (b(this).hasClass("b-page-empty")) {
                    b(this).wrap('<div class="b-page"><div class="b-wrap"></div></div>');
                } else {
                    if (av.closed && av.covers && (j == 1 || j == A.children().length - 2)) {
                        b(this).wrap('<div class="b-page"><div class="b-wrap b-page-cover"></div></div>');
                    } else {
                        if (j % 2 != 0) {
                            b(this).wrap('<div class="b-page"><div class="b-wrap b-wrap-right"></div></div>');
                        } else {
                            b(this).wrap('<div class="b-page"><div class="b-wrap b-wrap-left"></div></div>');
                        }
                    }
                }
                b(this).parents(".b-page").addClass("b-page-" + j);
                if (av.pageNumbers && !b(this).hasClass("b-page-empty") && (!av.closed || av.closed && !av.covers || av.closed && av.covers && j != 1 && j != A.children().length - 2)) {
                    if (av.direction == "LTR") {
                        I++;
                    }
                    b(this).parent().append('<div class="b-counter">' + I + "</div>");
                    if (av.direction == "RTL") {
                        I--;
                    }
                }
            });
        }
        function aa() {
            S.find(".b-page").removeClass("b-pN b-p0 b-p1 b-p2 b-p3 b-p4").hide();
            if (ah) {
                I = av.pTotal - 1;
                for (L = 0; L < av.pTotal; L++) {
                    S.find(".b-page-" + L).detach().appendTo(A);
                }
            }
            if (av.curr - 2 >= 0) {
                S.find(".b-page-" + (av.curr - 2)).addClass("b-pN").show();
                S.find(".b-page-" + (av.curr - 1)).addClass("b-p0").show();
            }
            S.find(".b-page-" + av.curr).addClass("b-p1").show();
            S.find(".b-page-" + (av.curr + 1)).addClass("b-p2").show();
            if (av.curr + 3 <= av.pTotal) {
                S.find(".b-page-" + (av.curr + 2)).addClass("b-p3").show();
                S.find(".b-page-" + (av.curr + 3)).addClass("b-p4").show();
            }
            F = S.find(".b-pN");
            ab = S.find(".b-p0");
            Z = S.find(".b-p1");
            Y = S.find(".b-p2");
            W = S.find(".b-p3");
            U = S.find(".b-p4");
            ay = S.find(".b-pN .b-wrap");
            ag = S.find(".b-p0 .b-wrap");
            J = S.find(".b-p1 .b-wrap");
            s = S.find(".b-p2 .b-wrap");
            c = S.find(".b-p3 .b-wrap");
            aq = S.find(".b-p4 .b-wrap");
            am = S.find(".b-wrap");
            am.attr("style", "");
            am.css({
                width: av.pWidth - av.pagePadding * 2,
                height: av.pHeight - av.pagePadding * 2,
                padding: av.pagePadding
            });
            Z.css({
                left: 0,
                width: av.pWidth,
                height: av.pHeight
            });
            Y.css({
                left: av.pWidth,
                width: av.pWidth,
                opacity: 1,
                height: av.pHeight
            });
            F.css({
                left: 0,
                width: av.pWidth,
                height: av.pHeight
            });
            ab.css({
                left: 0,
                width: 0,
                height: av.pHeight
            });
            W.stop().css({
                left: av.pWidth * 2,
                width: 0,
                height: av.pHeight,
                paddingLeft: 0
            });
            c.stop().css({
                left: 0
            });
            U.css({
                left: av.pWidth,
                width: av.pWidth,
                height: av.pHeight
            });
            if (av.curr + 3 <= av.pTotal) {
                W.after(ab.detach());
                Z.after(U.detach());
            } else {
                ab.detach().appendTo(A);
            }
            ah = true;
            ax = az = null;
            S.find(".b-shadow-b, .b-shadow-f").remove();
            if (av.shadows) {
                ax = b('<div class="b-shadow-f"></div>').appendTo(W).css({
                    right: 0,
                    width: av.pWidth,
                    height: av.pHeight
                });
                az = b('<div class="b-shadow-b"></div>').appendTo(ab).css({
                    left: 0,
                    width: av.pWidth,
                    height: av.pHeight
                });
            }
        }
        function Q(j, i, p) {
            if (i && j > 2) {
                S.find(".b-p3, .b-p4").removeClass("b-p3 b-p4").hide();
                S.find(".b-page-" + av.curr).addClass("b-p3").show().stop().css({
                    left: av.pWidth * 2,
                    width: 0,
                    height: av.pHeight,
                    paddingLeft: 0
                });
                S.find(".b-page-" + (av.curr + 1)).addClass("b-p4").show().css({
                    left: av.pWidth,
                    width: av.pWidth,
                    height: av.pHeight
                });
                S.find(".b-page-" + av.curr + " .b-wrap").show().css({
                    width: av.pWidth - av.pagePadding * 2,
                    height: av.pHeight - av.pagePadding * 2,
                    padding: av.pagePadding
                });
                S.find(".b-page-" + (av.curr + 1) + " .b-wrap").show().css({
                    width: av.pWidth - av.pagePadding * 2,
                    height: av.pHeight - av.pagePadding * 2,
                    padding: av.pagePadding
                });
                W = S.find(".b-p3");
                U = S.find(".b-p4");
                c = S.find(".b-p3 .b-wrap");
                aq = S.find(".b-p4 .b-wrap");
                if (C) {
                    W.css({
                        left: av.width - 40,
                        width: 20,
                        "padding-left": 10
                    });
                }
                p.appendTo(W);
                Z.after(U.detach());
                Y.after(W.detach());
            } else {
                if (!i && j > 2) {
                    S.find(".b-pN, .b-p0").removeClass("b-pN b-p0").hide();
                    S.find(".b-page-" + av.curr).addClass("b-pN").show().css({
                        left: 0,
                        width: av.pWidth,
                        height: av.pHeight
                    });
                    S.find(".b-page-" + (av.curr + 1)).addClass("b-p0").show().css({
                        left: 0,
                        width: 0,
                        height: av.pHeight
                    });
                    S.find(".b-page-" + av.curr + " .b-wrap").show().css({
                        width: av.pWidth - av.pagePadding * 2,
                        height: av.pHeight - av.pagePadding * 2,
                        padding: av.pagePadding
                    });
                    S.find(".b-page-" + (av.curr + 1) + " .b-wrap").show().css({
                        width: av.pWidth - av.pagePadding * 2,
                        height: av.pHeight - av.pagePadding * 2,
                        padding: av.pagePadding
                    });
                    F = S.find(".b-pN");
                    ab = S.find(".b-p0");
                    ay = S.find(".b-pN .b-wrap");
                    ag = S.find(".b-p0 .b-wrap");
                    if (N) {
                        ab.css({
                            left: 10,
                            width: 40
                        });
                        ag.css({
                            right: 10
                        });
                    }
                    p.appendTo(ab);
                    ab.detach().appendTo(A);
                }
            }
            if (av.closed) {
                if (!i && av.curr == 0) {
                    F.hide();
                } else {
                    if (!i) {
                        F.show();
                    }
                }
                if (i && av.curr >= av.pTotal - 2) {
                    U.hide();
                } else {
                    if (i) {
                        U.show();
                    }
                }
            }
            if (av.shadows) {
                if (b.support.opacity) {
                    p.animate({
                        opacity: 1
                    }, av.speedH, av.easeIn).animate({
                        opacity: 0
                    }, av.speedH, av.easeOut);
                } else {
                    if (i) {
                        p.animate({
                            right: av.shadowTopFwdWidth
                        }, av.speed, av.easeIn);
                    } else {
                        p.animate({
                            left: av.shadowTopBackWidth
                        }, av.speed, av.easeIn);
                    }
                }
            }
        }
        function H() {
            aa();
            ar();
            z();
            av.after.call(ao, av);
            ad = false;
        }
        function z() {
            if (av.overlays || av.tabs || av.arrows) {
                if (av.curr < av.pTotal - 2) {
                    e.fadeIn("fast").css("cursor", av.cursor);
                } else {
                    e.fadeOut("fast").css("cursor", "default");
                }
                if (av.curr >= 2 && av.curr != 0) {
                    d.fadeIn("fast").css("cursor", av.cursor);
                } else {
                    d.fadeOut("fast").css("cursor", "default");
                }
            }
        }
        function ar() {
            if (av.pageSelector) {
                if (av.direction == "RTL") {
                    nums = Math.abs(av.curr - av.pTotal) - 1 + " - " + Math.abs(av.curr - av.pTotal);
                    if (av.closed) {
                        if (av.curr == av.pTotal - 2) {
                            nums = "1";
                        } else {
                            if (av.curr == 0) {
                                nums = av.pTotal - 2;
                            } else {
                                nums = Math.abs(av.curr - av.pTotal) - 2 + " - " + (Math.abs(av.curr - av.pTotal) - 1);
                            }
                        }
                        if (av.covers) {
                            if (av.curr == av.pTotal - 2) {
                                nums = "";
                            } else {
                                if (av.curr == 0) {
                                    nums = "";
                                } else {
                                    nums = Math.abs(av.curr - av.pTotal) - 3 + " - " + (Math.abs(av.curr - av.pTotal) - 2);
                                }
                            }
                        }
                    }
                    b(av.menu + " .b-selector-page .b-current").text(nums);
                } else {
                    nums = av.curr + 1 + " - " + (av.curr + 2);
                    if (av.closed) {
                        if (av.curr == 0) {
                            nums = "1";
                        } else {
                            if (av.curr == av.pTotal - 2) {
                                nums = av.pTotal - 2;
                            } else {
                                nums = av.curr + "-" + (av.curr + 1);
                            }
                        }
                        if (av.covers) {
                            if (av.curr == 0) {
                                nums = "";
                            } else {
                                if (av.curr == av.pTotal - 2) {
                                    nums = "";
                                } else {
                                    nums = av.curr - 1 + "-" + av.curr;
                                }
                            }
                        }
                    }
                    b(av.menu + " .b-selector-page .b-current").text(nums);
                }
            }
            if (av.chapterSelector) {
                if (K[av.curr] != "") {
                    b(av.menu + " .b-selector-chapter .b-current").text(K[av.curr]);
                } else {
                    if (K[av.curr + 1] != "") {
                        b(av.menu + " .b-selector-chapter .b-current").text(K[av.curr + 1]);
                    }
                }
                if (av.direction == "RTL" && K[av.curr + 1] != "") {
                    b(av.menu + " .b-selector-chapter .b-current").text(K[av.curr + 1]);
                } else {
                    if (K[av.curr] != "") {
                        b(av.menu + " .b-selector-chapter .b-current").text(K[av.curr]);
                    }
                }
            }
        }
        function f() {
            O = x();
            if (!isNaN(O) && O <= av.pTotal - 1 && O >= 0 && O != "") {
                if (O % 2 != 0) {
                    O--;
                }
                av.curr = O;
            } else {
                M(av.curr + 1, av);
            }
            ao.hash = O;
        }
        function V() {
            O = x();
            if (!isNaN(O) && O <= av.pTotal - 1 && O >= 0) {
                if (O != av.curr && O.toString() != ao.hash) {
                    if (O % 2 != 0) {
                        O--;
                    }
                    document.title = av.name + " - Page " + (O + 1);
                    if (!ad) {
                        ao.gotoPage(O);
                        ao.hash = O;
                    }
                }
            }
        }
        function x() {
            var i = window.location.hash.split("/");
            if (i.length > 1) {
                return parseInt(i[2]) - 1;
            } else {
                return "";
            }
        }
        function M(j, i) {
            if (i.hash) {
                window.location.hash = "/page/" + j;
            }
        }
    }
    b.fn.booklet.interfaces = [];
    b.fn.booklet.defaults = {
        name: null,
        width: 600,
        height: 400,
        speed: 1e3,
        direction: "LTR",
        startingPage: 0,
        easing: "easeInOutQuad",
        easeIn: "easeInQuad",
        easeOut: "easeOutQuad",
        closed: false,
        closedFrontTitle: null,
        closedFrontChapter: null,
        closedBackTitle: null,
        closedBackChapter: null,
        covers: false,
        pagePadding: 10,
        pageNumbers: true,
        hovers: true,
        overlays: true,
        tabs: false,
        tabWidth: 60,
        tabHeight: 20,
        arrows: false,
        cursor: "pointer",
        hash: false,
        keyboard: true,
        next: null,
        prev: null,
        menu: null,
        pageSelector: false,
        chapterSelector: false,
        shadows: true,
        shadowTopFwdWidth: 166,
        shadowTopBackWidth: 166,
        shadowBtmWidth: 50,
        before: function() {},
        after: function() {}
    };
})(jQuery);