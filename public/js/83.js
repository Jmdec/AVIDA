(window.webpackJsonp = window.webpackJsonp || []).push([
    [83],
    {
        "9mMO": function (e, t, a) {},
        SUGq: function (e, t, a) {
            "use strict";
            a.r(t);
            var n = a("q1tI"),
                i = a.n(n),
                l = a("Wbzz"),
                s = a("OS56"),
                r = a.n(s),
                c =
                    (a("9mMO"),
                    a("K7k0"),
                    a("tyWD"),
                    function (e) {
                        var t = e.title,
                            a = e.titleImage,
                            s = e.subTitle,
                            c = e.description,
                            o = e.link,
                            m = e.slideList,
                            d = e.className,
                            p = e.listMapper,
                            u = Object(n.useCallback)(
                                function () {
                                    if (!t)
                                        return i.a.createElement(
                                            i.a.Fragment,
                                            null
                                        );
                                    var e = t.split(" "),
                                        a = e.pop();
                                    return i.a.createElement(
                                        "h3",
                                        null,
                                        e.join(" "),
                                        " ",
                                        i.a.createElement("span", null, a)
                                    );
                                },
                                [t]
                            );
                        return i.a.createElement(
                            "div",
                            {
                                className:
                                    "slider-section" + (d ? " " + d : ""),
                            },
                            i.a.createElement(
                                "div",
                                { className: "slider-header" },
                                !!s && i.a.createElement("h4", null, s),
                                !!t && u(),
                                !!a &&
                                    i.a.createElement("img", {
                                        src: a,
                                        alt: "close icon",
                                    }),
                                i.a.createElement("p", null, c)
                            ),
                            i.a.createElement(
                                r.a,
                                {
                                    infinite: !1,
                                    variableWidth: !0,
                                    centerMode: !0,
                                    slidesToShow: 3,
                                    className: "slider",
                                    swipe: !1,
                                    responsive: [
                                        {
                                            breakpoint: 600,
                                            settings: {
                                                slidesToShow: 1,
                                                swipe: !0,
                                                swipeToSlide: !0,
                                                centerMode: !1,
                                                infinite: !0,
                                            },
                                        },
                                    ],
                                },
                                m.map(p)
                            ),
                            i.a.createElement(
                                "div",
                                { className: "link-container" },
                                i.a.createElement(
                                    l.Link,
                                    { to: "/" + o + "/" },
                                    "[ Read more ]"
                                )
                            )
                        );
                    });
            t.default = Object(n.memo)(c);
        },
    },
]);
//# sourceMappingURL=83-9e0613bbf51afd51051f.js.map
