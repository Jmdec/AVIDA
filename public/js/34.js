(window.webpackJsonp = window.webpackJsonp || []).push([
    [34],
    {
        "5TLY": function (e, t, r) {
            "use strict";
            r.r(t),
                r.d(t, "lazyHydrate", function () {
                    return u;
                });
            var o = r("f0fW"),
                n = r("q1tI"),
                a = r.n(n),
                c = r("i8i4"),
                i = r.n(c),
                d =
                    (r("6yn5"),
                    r("q8gk"),
                    [
                        "image",
                        "loading",
                        "isLoading",
                        "isLoaded",
                        "toggleIsLoaded",
                        "ref",
                        "imgClassName",
                        "imgStyle",
                        "objectPosition",
                        "backgroundColor",
                        "objectFit",
                    ]);
            function u(e, t, r, n) {
                var c = e.image,
                    u = e.loading,
                    g = e.isLoading,
                    l = e.isLoaded,
                    s = e.toggleIsLoaded,
                    b = e.ref,
                    j = e.imgClassName,
                    m = e.imgStyle,
                    f = void 0 === m ? {} : m,
                    h = e.objectPosition,
                    w = e.backgroundColor,
                    y = e.objectFit,
                    k = void 0 === y ? "cover" : y,
                    L = Object(o.e)(e, d),
                    O = c.width,
                    p = c.height,
                    v = c.layout,
                    C = c.images,
                    N = c.placeholder,
                    E = c.backgroundColor,
                    F = JSON.stringify(C);
                f = Object(o.f)(
                    { objectFit: k, objectPosition: h, backgroundColor: w },
                    f
                );
                var I = a.a.createElement(
                    o.b,
                    { layout: v, width: O, height: p },
                    a.a.createElement(
                        o.d,
                        Object(o.f)({}, Object(o.j)(N, l, v, O, p, E, k, h))
                    ),
                    a.a.createElement(
                        o.c,
                        Object(o.f)(
                            {},
                            L,
                            { width: O, height: p, className: j },
                            Object(o.g)(g, l, C, u, s, F, b, f)
                        )
                    )
                );
                return (
                    t.current &&
                        (i.a.createRoot
                            ? (r.current ||
                                  (r.current = i.a.createRoot(t.current)),
                              r.current.render(I))
                            : ((r.current || n.current
                                  ? i.a.render
                                  : i.a.hydrate)(I, t.current),
                              (r.current = !0))),
                    function () {
                        t.current &&
                            (i.a.createRoot
                                ? r.current.render(null)
                                : i.a.render(null, t.current));
                    }
                );
            }
        },
    },
]);
//# sourceMappingURL=34-1a9393f11dc41f9ef20a.js.map
