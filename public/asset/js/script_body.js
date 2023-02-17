var GLOBAL = {
    common: {
        init: function () {
            $(document).on("click", ".add_to_cart", addToCart);
        },
    },
    templateIndex: {
        init: function () {},
    },
    templateProduct: {
        init: function () {},
    },
    templateCart: {
        init: function () {},
    },
};
var UTIL = {
    fire: function (func, funcname, args) {
        var namespace = GLOBAL;
        funcname = funcname === undefined ? "init" : funcname;
        if (
            func !== "" &&
            namespace[func] &&
            typeof namespace[func][funcname] == "function"
        ) {
            namespace[func][funcname](args);
        }
    },
    loadEvents: function () {
        var bodyId = document.body.id;
        UTIL.fire("common");
        $.each(document.body.className.split(/\s+/), function (i, classnm) {
            UTIL.fire(classnm);
            UTIL.fire(classnm, bodyId);
        });
    },
};
$(document).ready(UTIL.loadEvents);
Number.prototype.formatMoney = function (c, d, t) {
    var n = this,
        c = isNaN((c = Math.abs(c))) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "." : t,
        s = n < 0 ? "-" : "",
        i = parseInt((n = Math.abs(+n || 0).toFixed(c))) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return (
        s +
        (j ? i.substr(0, j) + t : "") +
        i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) +
        (c
            ? d +
              Math.abs(n - i)
                  .toFixed(c)
                  .slice(2)
            : "")
    );
};
function addToCart(e) {
    if (typeof e !== "undefined") e.preventDefault();
    var $this = $(this);
    var form = $this.parents("form");
    $.ajax({
        type: "POST",
        url: "/cart/add.js",
        async: false,
        data: form.serialize(),
        dataType: "json",
        error: addToCartFail,
        beforeSend: function () {},
        success: addToCartSuccess,
        cache: false,
    });
}
function qty() {
    var dqty = $("#qtym").val();
    if (dqty == undefined) {
        return 1;
    }
    return dqty;
}

function addToCartSuccess(jqXHR, textStatus, errorThrown) {
    var url_product = jqXHR["url"];
    var class_id = jqXHR["product_id"];
    var name = jqXHR["title"];
    var textDisplay =
        '<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng';
    var id = jqXHR["variant_id"];
    var dataList = $(".item-name a")
        .map(function () {
            var plus = $(this).text();
            return plus;
        })
        .get();
    $(".title-popup-cart .cart-popup-name").html(
        '<a href="' + url_product + '" title="' + name + '">' + name + "</a> "
    );
    var nameid = dataList,
        found = $.inArray(name, nameid);
    var textfind = found;

    var src = "";
    if (
        !jqXHR["image"] ||
        (Haravan.resizeImage(jqXHR["image"], "small") == null ||
            Haravan.resizeImage(jqXHR["image"], "small") == "null" ||
            Haravan.resizeImage(jqXHR["image"], "small")) == ""
    ) {
        src = no_image_placeholder;
    } else {
        src = Haravan.resizeImage(jqXHR["image"], "small");
    }

    $(".item-info > p:contains(" + id + ")").html(
        '<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>'
    );

    var va_title = jqXHR["variant_options"]
        .filter((opt) => opt != "Default Title")
        .join(", ");
    var windowW = $(window).width();
    awe.hidePopup(".loading");

    $("#popup-cart").addClass("opencart");
    $("body").addClass("opacitycart");
    $("#popup-cart").addClass("opencart");
    $("body").addClass("opacitycart");
    $("#popupCartModal").html("");
    var $popupMobile =
        "" +
        '<div class="modal-dialog">' +
        '<div class="modal-content">' +
        '<button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>' +
        '<div class="row row-noGutter"><div class="modal-left col-sm-12 col-lg-12 col-md-12">' +
        '<h3 class="modal-title"><svg width="18" height="18" class="mb-1"><g fill="none" fill-rule="evenodd" stroke="#0d5302" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.455" transform="translate(1 1)"><path d="M3.636 8l2.91 2.91 5.818-5.82"></path><circle cx="8" cy="8" r="8"></circle></g></svg> Sản phẩm vừa được thêm <span class="hidden-xs">vào giỏ hàng</span></h3>' +
        '<div class="modal-body"><div class="media"><div class="media-left thumb_img"><div class="thumb-1x1">' +
        '<img src="' +
        src +
        '" alt="' +
        jqXHR["title"] +
        '"></div></div>' +
        '<div class="media-body body_content"><div class="product-title">' +
        jqXHR["title"] +
        "</div>" +
        '<div class="product-new-price"><span>' +
        Haravan.formatMoney(jqXHR["price"], window.money_format) +
        "</span></div>" +
        '<div class="variant_title"><span>' +
        va_title +
        "</span></div>" +
        "</div></div>" +
        "</div>" +
        "</div>" +
        "</div></div>";
    $("#popupCartModal").html($popupMobile);
    $("#popupCartModal").modal();

    $.ajax({
        type: "GET",
        url: "/cart.js",
        async: false,
        cache: false,
        dataType: "json",
        success: function (cart) {
            setTimeout(() => {
                addToCartEffect(
                    $("#popupCartModal .modal-body img").eq(0),
                    () => {
                        Haravan.updateCartFromForm(
                            cart,
                            ".top-cart-content .mini-products-list"
                        );
                        Haravan.updateCartPopupForm(
                            cart,
                            "#popup-cart-desktop .tbody-popup"
                        );
                        Haravan.updateCartPageFormMobile(
                            cart,
                            ".cart-mobile .header-cart-content"
                        );
                        $("#popupCartModal .close").click();
                    }
                );
            }, 600);

            window.cart = cart;
        },
    });
}
function addToCartFail(jqXHR, textStatus, errorThrown) {
    var response = $.parseJSON(jqXHR.responseText);
    alert(response.description);
    var $info = '<div class="error">' + response.description + "</div>";
}
$(document).on("click", ".remove-item-cart", function () {
    var variantId = $(this).attr("data-id");
    removeItemCart(variantId);
});
$(document).on("click", ".items-count", function () {
    $(this).parent().children(".items-count").prop("disabled", true);
    var thisBtn = $(this);
    var variantId = $(this).parent().find(".variantID").val();
    var qty = $(this).parent().children(".number-sidebar").val();
    updateQuantity(qty, variantId);
});

$(document).on("change", ".number-sidebar", function () {
    var variantId = $(this).parent().children(".variantID").val();
    var qty = $(this).val();
    updateQuantity(qty, variantId);
});
function updateQuantity(qty, variantId) {
    var variantIdUpdate = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: { quantity: qty, id: variantId },
        dataType: "json",
        success: function (cart, variantId) {
            Haravan.onCartUpdateClick(cart, variantIdUpdate);
            cart_min();
        },
        error: function (qty, variantId) {
            Haravan.onError(qty, variantId);
        },
    });
}
function removeItemCart(variantId) {
    var variantIdRemove = variantId;
    $.ajax({
        type: "POST",
        url: "/cart/change.js",
        data: { quantity: 0, id: variantId },
        dataType: "json",
        success: function (cart, variantId) {
            Haravan.onCartRemoveClick(cart, variantIdRemove);
            $(".productid-" + variantIdRemove).remove();
            if ($(".tbody-popup>div").length == "0") {
                $("#popup-cart").removeClass("opencart");
                $("body").removeClass("opacitycart");
            }
            if ($(".list-item-cart>li").length == "0") {
                $(".mini-products-list").html(
                    '<div class="no-item"><p>Không có sản phẩm nào.</p></div>'
                );
            }
            if ($(".cart-mobile .item-product").length == "0") {
                $(".page_cart").remove();
                $(".header-cart-content").remove();
                $(".title_cart_pc").html(
                    '<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                );
                $(".cart-mobile .header-cart").html(`
                  <div class="alert green-alert section" role="alert">
                      <div class="title-cart ">
                          <h1>Giỏ hàng</h1><p>(Chưa có sản phẩm nào) nhấn vào <a href="/collections/all" title="cửa hàng" class="link text-primary">cửa hàng</a> để mua hàng</p>
                      </div>
                  </div>
                  `);
            }
            var productAction = $(
                `.product-action-bottom[data-variant-id="${variantIdRemove}"]`
            );
            productAction.removeClass("added");
            $(
                `.product-action-bottom[data-variant-id="${variantId}"] .qty`
            ).val(1);
            window.cart = cart;
        },
        error: function (variantId, r) {
            Haravan.onError(variantId, r);
        },
    });
}
function render(props) {
    return function (tok, i) {
        return i % 2 ? props[tok] : tok;
    };
}
Haravan.updateCartFromForm = function (cart, cart_summary_id, cart_count_id) {
    if (typeof cart_summary_id === "string") {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.
            jQuery.each(cart, function (key, value) {
                if (key === "items") {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {
                        jQuery('<ul class="list-item-cart"></ul>').appendTo(
                            table
                        );
                        jQuery.each(value, function (i, item) {
                            var buttonQty = "";
                            if (item.quantity == "1") {
                                buttonQty = "disabled";
                            } else {
                                buttonQty = "";
                            }
                            var link_img0 = item.image
                                ? Haravan.resizeImage(item.image, "compact")
                                : "";
                            if (
                                link_img0 == "null" ||
                                link_img0 == "" ||
                                link_img0 == null
                            ) {
                                link_img0 = no_image_placeholder;
                            }
                            if (item.variant_title == "Default Title") {
                                var ItemDropCart = [
                                    {
                                        url: item.url,
                                        image_url: link_img0,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        id_item: item.variant_id,
                                        variant_title: "",
                                    },
                                ];
                            } else {
                                let variant_title = item.variant_options
                                    ? item.variant_options
                                          .filter(
                                              (opt) => opt != "Default Title"
                                          )
                                          .join(", ")
                                    : "";
                                var ItemDropCart = [
                                    {
                                        url: item.url,
                                        image_url: link_img0,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        id_item: item.variant_id,
                                        variant_title:
                                            variant_title == item.title
                                                ? ""
                                                : variant_title,
                                    },
                                ];
                            }
                            $(function () {
                                var TemplateItemDropCart = $(
                                    'script[data-template="ItemDropCart"]'
                                )
                                    .text()
                                    .split(/\$\{(.+?)\}/g);
                                $(".list-item-cart").append(
                                    ItemDropCart.map(function (item) {
                                        return TemplateItemDropCart.map(
                                            render(item)
                                        ).join("");
                                    })
                                );
                            });
                        });
                        jQuery(
                            '<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' +
                                Haravan.formatMoney(
                                    cart.total_price,
                                    window.money_format
                                ) +
                                "</span></div></div>"
                        ).appendTo(table);
                        jQuery(
                            '<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>'
                        ).appendTo(table);
                    } else {
                        jQuery(
                            '<div class="no-item"><p>Không có sản phẩm nào.</p></div>'
                        ).appendTo(table);
                    }
                }
            });
        }
    }
    updateCartDesc(cart);
    var numInput = document.querySelector("#cart-sidebar input.input-text");
    if (numInput != null) {
        // Listen for input event on numInput.
        numInput.addEventListener(
            "input",
            function () {
                // Let's match only digits.
                var num = this.value.match(/^\d+$/);
                if (num == 0) {
                    // If we have no match, value will be empty.
                    this.value = 1;
                }
                if (num === null) {
                    // If we have no match, value will be empty.
                    this.value = "";
                }
            },
            false
        );
    }
};

Haravan.updateCartPageForm = function (cart, cart_summary_id, cart_count_id) {
    if (typeof cart_summary_id === "string") {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.
            jQuery.each(cart, function (key, value) {
                if (key === "items") {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {
                        var HeaderCartPc = $(
                            'script[data-template="HeaderCartPc"]'
                        )
                            .text()
                            .split(/\$\{(.+?)\}/g);
                        var pageCartCheckout = $(
                            'script[data-template="pageCartCheckout"]'
                        )
                            .text()
                            .split(/\$\{(.+?)\}/g);

                        $(table).append(function () {
                            return HeaderCartPc.map(render()).join("");
                        });

                        jQuery.each(value, function (i, item) {
                            var buttonQty = "";
                            if (item.quantity == "1") {
                                buttonQty = "disabled";
                            } else {
                                buttonQty = "";
                            }
                            var link_img1 = item.image
                                ? Haravan.resizeImage(item.image, "compact")
                                : "";
                            if (
                                link_img1 == "null" ||
                                link_img1 == "" ||
                                link_img1 == null
                            ) {
                                link_img1 = no_image_placeholder;
                            }

                            if (item.variant_title == "Default Title") {
                                var ItemCartPage = [
                                    {
                                        url: item.url,
                                        image_url: link_img1,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        variant_title: item.variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                        variant_title: "",
                                    },
                                ];
                            } else {
                                let variant_title = item.variant_options
                                    ? item.variant_options
                                          .filter(
                                              (opt) => opt != "Default Title"
                                          )
                                          .join(", ")
                                    : "";
                                var ItemCartPage = [
                                    {
                                        url: item.url,
                                        image_url: link_img1,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        buttonQty: buttonQty,
                                        quanty: item.quantity,
                                        variant_title:
                                            variant_title == item.title
                                                ? ""
                                                : variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    },
                                ];
                            }

                            $(function () {
                                var pageCartItem = $(
                                    'script[data-template="pageCartItem"]'
                                )
                                    .text()
                                    .split(/\$\{(.+?)\}/g);
                                $(table.find(".cart-tbody")).append(
                                    ItemCartPage.map(function (item) {
                                        return pageCartItem
                                            .map(render(item))
                                            .join("");
                                    })
                                );
                            });
                        });

                        var PriceTotalCheckout = [
                            {
                                price_total: Haravan.formatMoney(
                                    cart.total_price,
                                    window.money_format
                                ),
                            },
                        ];
                        $(table.children(".cart")).append(
                            PriceTotalCheckout.map(function (item) {
                                return pageCartCheckout
                                    .map(render(item))
                                    .join("");
                            })
                        );
                    } else {
                        jQuery(
                            '<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                        ).appendTo(table);
                        jQuery(".cart_desktop_page").css("min-height", "auto");
                    }
                }
            });
        }
    }
    updateCartDesc(cart);
    jQuery("#wait").hide();
};
Haravan.updateCartPopupForm = function (cart, cart_summary_id, cart_count_id) {
    if (typeof cart_summary_id === "string") {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.
            jQuery.each(cart, function (key, value) {
                if (key === "items") {
                    var table = jQuery(cart_summary_id);
                    if (value.length) {
                        jQuery.each(value, function (i, item) {
                            var src = item.image;
                            if (src == null) {
                                src = no_image_placeholder;
                            }
                            var buttonQty = "";
                            if (item.quantity == "1") {
                                buttonQty = "disabled";
                            } else {
                                buttonQty = "";
                            }

                            if (item.variant_title == "Default Title") {
                                var ItemPopupCart = [
                                    {
                                        url: item.url,
                                        image_url: src,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        quanty: item.quantity,
                                        variant_title: "",
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    },
                                ];
                            } else {
                                let variant_title = item.variant_options
                                    ? item.variant_options
                                          .filter(
                                              (opt) => opt != "Default Title"
                                          )
                                          .join(", ")
                                    : "";

                                var ItemPopupCart = [
                                    {
                                        url: item.url,
                                        image_url: src,
                                        price: Haravan.formatMoney(
                                            item.price,
                                            window.money_format
                                        ),
                                        title: item.title,
                                        quanty: item.quantity,
                                        variant_title:
                                            variant_title == item.title
                                                ? ""
                                                : variant_title,
                                        price_quanty: Haravan.formatMoney(
                                            item.price * item.quantity,
                                            window.money_format
                                        ),
                                        id_item: item.variant_id,
                                    },
                                ];
                            }

                            $(function () {
                                var TemplateItemPopupCart = $(
                                    'script[data-template="TemplateItemPopupCart"]'
                                )
                                    .text()
                                    .split(/\$\{(.+?)\}/g);
                                $(table).append(
                                    ItemPopupCart.map(function (item) {
                                        return TemplateItemPopupCart.map(
                                            render(item)
                                        ).join("");
                                    })
                                );
                            });

                            $(".link_product").text();
                        });
                    }
                }
            });
        }
    }
    jQuery(".total-price").html(
        Haravan.formatMoney(cart.total_price, window.money_format)
    );
    updateCartDesc(cart);
};
Haravan.updateCartPageFormMobile = function (
    cart,
    cart_summary_id,
    cart_count_id
) {
    if (typeof cart_summary_id === "string") {
        var cart_summary = jQuery(cart_summary_id);
        if (cart_summary.length) {
            // Start from scratch.
            cart_summary.empty();
            // Pull it all out.
            if (cart.items && cart.items.length) {
                var table = jQuery(cart_summary_id);
                jQuery(
                    '<div class="cart_page_mobile content-product-list"></div>'
                ).appendTo(table);
                jQuery.each(cart.items, function (i, item) {
                    if (item.image) {
                        var src = Haravan.resizeImage(item.image, "compact");
                    } else {
                        var src = no_image_placeholder;
                    }
                    let variant_title = item.variant_options
                        ? item.variant_options
                              .filter((opt) => opt != "Default Title")
                              .join(", ")
                        : "";

                    var ItemCartPageMobile = [
                        {
                            url: item.url,
                            image_url: src,
                            price: Haravan.formatMoney(
                                item.price,
                                window.money_format
                            ),
                            title: item.title,
                            quanty: item.quantity,
                            variant_title:
                                variant_title == item.title
                                    ? ""
                                    : variant_title,
                            price_quanty: Haravan.formatMoney(
                                item.price * item.quantity,
                                window.money_format
                            ),
                            id_item: item.variant_id,
                        },
                    ];

                    var pageCartItemMobile = $(
                        'script[data-template="ItemCartMobile"]'
                    )
                        .text()
                        .split(/\$\{(.+?)\}/g);
                    $(table.children(".content-product-list")).append(
                        ItemCartPageMobile.map(function (item) {
                            return pageCartItemMobile
                                .map(render(item))
                                .join("");
                        })
                    );
                });

                var pageCartCheckoutMobile = $(
                    'script[data-template="pageCartCheckoutMobile"]'
                )
                    .text()
                    .split(/\$\{(.+?)\}/g);
                var PriceTotalCheckoutMobile = [
                    {
                        price_total: Haravan.formatMoney(
                            cart.total_price,
                            window.money_format
                        ),
                    },
                ];
                $(table).append(
                    PriceTotalCheckoutMobile.map(function (item) {
                        return pageCartCheckoutMobile
                            .map(render(item))
                            .join("");
                    })
                );
                $(".cart_page_mobile").append(`<div class="cart-note">
              <label for="note" class="note-label">Ghi chú đơn hàng</label>
              <textarea id="note" name="note" rows="8"></textarea>
              </div>`);
            }
        }
    }
    updateCartDesc(cart);
};

function updateCartDesc(data) {
    var $cartPrice = Haravan.formatMoney(data.total_price, window.money_format),
        $cartMobile = $("#header .cart-mobile .quantity-product"),
        $cartDesktop = $(".count_item_pr, .count_sidebar, .cart-popup-count"),
        $cartDesktopList = $(".cart-counter-list"),
        $cartPopup = $(".cart-popup-count");

    switch (data.item_count) {
        case 0:
            $cartMobile.text("0");
            $cartDesktop.text("0");
            $cartDesktopList.text("0");
            $cartPopup.text("0");

            break;
        case 1:
            $cartMobile.text("1");
            $cartDesktop.text("1");
            $cartDesktopList.text("1");
            $cartPopup.text("1");

            break;
        default:
            $cartMobile.text(data.item_count);
            $cartDesktop.text(data.item_count);
            $cartDesktopList.text(data.item_count);
            $cartPopup.text(data.item_count);

            break;
    }
    $(
        ".top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price"
    ).html($cartPrice);
    $(".popup-total .total-price").html($cartPrice);
    $(
        ".shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar"
    ).html($cartPrice);
    $(".header-cart-price .totals_price_mobile").html($cartPrice);
    $(".cartCount, .cart-popup-count, #ega-cart-count").html(data.item_count);
}

Haravan.onCartUpdate = function (cart) {
    Haravan.updateCartFromForm(cart, ".mini-products-list");
    Haravan.updateCartPopupForm(cart, "#popup-cart-desktop .tbody-popup");
};
Haravan.onCartUpdateClick = function (cart, variantId) {
    jQuery.each(cart, function (key, value) {
        if (key === "items") {
            jQuery.each(value, function (i, item) {
                if (item.variant_id == variantId) {
                    $(".productid-" + variantId)
                        .find(".cart-price span.price")
                        .html(
                            Haravan.formatMoney(
                                item.price * item.quantity,
                                window.money_format
                            )
                        );
                    $(".productid-" + variantId)
                        .find(".items-count")
                        .prop("disabled", false);
                    $(".productid-" + variantId)
                        .find(".number-sidebar")
                        .prop("disabled", false);
                    $(".productid-" + variantId + " .number-sidebar").val(
                        item.quantity
                    );
                    $(
                        `.list-item-cart .item.productid-${variantId} .quanlity`
                    ).text(`x ${item.quantity}`);
                    if (item.quantity == "1") {
                        $(".productid-" + variantId)
                            .find(".items-count.btn-minus")
                            .prop("disabled", true);
                    }
                }
            });
        }
    });

    updateCartDesc(cart);
};
Haravan.onCartRemoveClick = function (cart, variantId) {
    jQuery.each(cart, function (key, value) {
        if (key === "items") {
            jQuery.each(value, function (i, item) {
                if (item.variant_id == variantId) {
                    $(".productid-" + variantId).remove();
                }
            });
        }
    });
    updateCartDesc(cart);
};
$(window).ready(function () {
    $.ajax({
        type: "GET",
        url: "/cart.js",
        async: false,
        cache: false,
        dataType: "json",
        success: function (cart) {
            window.cart = cart;

            Haravan.updateCartFromForm(cart, ".mini-products-list");
            Haravan.updateCartPopupForm(
                cart,
                "#popup-cart-desktop .tbody-popup"
            );

            var head = document.getElementsByTagName("head").item(0);
            var script = document.createElement("script");
            script.setAttribute(
                "src",
                "../mixcdn.egany.com/themes/delivery-builtin/index.min.js"
            );
            head.appendChild(script);
        },
    });

    var wDWs = $(window).width();
    if (wDWs < 1199) {
        $(".top-cart-content").remove();
    }
});
Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function (
    options
) {
    if (this.selectors && this.selectors.length && this.selectors.length > 0) {
        this.selectors[0].element.onchange(options);
    }
};
function productQuickAddCart() {
    const productAction = ".product-action-bottom";
    const qty = ".qty";
    const minus = ".num_1";
    const plus = ".num_2";
    $(document).on(
        "click",
        ".product-action-bottom .add_to_cart",
        function (e) {
            var result = $(e.currentTarget).parents(productAction);
            if (result.find(qty).length) {
                result.addClass("added");
            }
        }
    );
    $(document).on("click", ".product-action-bottom .num_1", function (e) {
        const parent = $(e.currentTarget).parents(productAction);
        const variantId = parent.data("variantId");
        var result = $(
            `.product-action-bottom[data-variant-id="${variantId}"] ${qty}`
        );
        var qtypro = +result.val();
        if (!isNaN(qtypro) && qtypro > 1) {
            result.val(--qtypro);
            updateQuantity(qtypro, variantId);
        } else {
            removeItemCart(variantId);
        }

        return false;
    });
    $(document).on("click", ".product-action-bottom .num_2", function (e) {
        const parent = $(e.currentTarget).parents(productAction);
        const variantId = parent.data("variantId");
        var result = $(
            `${productAction}[data-variant-id="${variantId}"] ${qty}`
        );
        var qtypro = +result.val();
        var max = result.attr("max");
        if (!isNaN(qtypro)) {
            let qty = qtypro + 1;
            if (max && qty > +max) {
                qty = max;
                alertInvalidQty(qty);
            }
            result.val(qty);
            updateQuantity(qtypro, variantId);
        }
        return false;
    });
    $(`${productAction}[data-variant-id]`).each(function () {
        if (!window.cart && !window.cart.items) return;
        const variantId = $(this).data("variantId");
        const result = $(this).find(qty);
        result.keypress((e) => {
            if (e.keyCode == 13) return false;
        });
        result.on("input", () => {
            var max = result.attr("max");
            var qty = result.val();
            if (max && qty > +max) {
                qty = max;
                result.val(max);
                alertInvalidQty(qty);
            }
            updateQuantity(qty, variantId);
        });
        const item = window.cart.items.find(
            (item) => item.variant_id == variantId
        );
        if (item && !$(this).hasClass("soldout") && result.length) {
            $(this).addClass("added");
            result.val(item.quantity);
        }
    });
}

function productsCallback() {
    awe_lazyloadImage();

    if (window.BPR && window.BPR.loadBadges) {
        window.BPR.initDomEls();
        window.BPR.loadBadges();
    }
}
function cart_min() {
    var sts = true;
    $.ajax({
        type: "GET",
        url: "/cart.js",
        async: false,
        success: function (data) {
            var cart = data.total_price + "";
            cart = parseInt(cart.substring(0, cart.length - 2));
            var cart_compare = parseInt(100000);
            if (cart < cart_compare) {
                $(".btn-proceed-checkout-mobile").addClass("disabled");
                $(".cart-limit-alert").css("display", "block");
                sts = false;
            } else {
                $(".btn-proceed-checkout-mobile").removeClass("disabled");
                $(".cart-limit-alert").css("display", "none");
            }
        },
    });
    return sts;
}
function alertInvalidQty(qty) {
    alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`);
}
function validateQty(product, variantId, qty) {
    let isInValidQty = false;
    /** check variant **/
    let variant =
        product && product.variants.find((item) => item.id == variantId);
    if (
        variant &&
        variant.inventory_management === "haravan" &&
        variant.inventory_policy == "deny"
    ) {
        isInValidQty = qty > variant.inventory_quantity;
        isInValidQty && alertInvalidQty(variant.inventory_quantity);
        return isInValidQty ? variant.inventory_quantity : false;
    }
    return isInValidQty;
}
function addToCartEffect(imgtodrag, callback) {
    var cart = $(".cartgroup");
    if ($(".header_sticky").hasClass("active")) {
        cart = $(".header_sticky .cartgroup");
    }
    if (imgtodrag) {
        var imgclone = imgtodrag
            .clone()
            .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left,
            })
            .addClass("fly-animate-img")
            .appendTo($("body"))
            .animate(
                {
                    top: cart.offset().top + 10,
                    left: cart.offset().left + 10,
                    width: 75,
                    height: 75,
                },
                340,
                "swing"
            );
        imgclone.animate(
            {
                width: 0,
                height: 0,
            },
            function () {
                callback();
                $(this).detach();
            }
        );
    }
}

$(document).ready(function () {
    cart_min();
});

var cro_show = true,
    cro_addcart_show = true,
    cro_cart_show = true,
    cro_addcart_title = "Thêm vào giỏ",
    cro_addcart_bg_1 = "#ff5722",
    cro_addcart_bg_2 = "#ff5722",
    cro_addcart_color = "#fff",
    cro_price_color = "#f3283d",
    cro_variant_color = "#008848",
    cro_cta_bg = "",
    cro_cta_color = "",
    cro_addcart_modal_mess = "Tiến hành thanh toán",
    cro_addcart_modal_redirect = "",
    cro_modal_btn_text = "",
    cro_modal_btn_bg = "",
    cro_modal_btn_color = "",
    cro_hotline_show = true,
    cro_hotline_number = "0999999999",
    cro_mess_show = true,
    cro_mess_url = "https://m.me/EGAnyTech",
    cro_home_show = true,
    cro_home_title = "Ưu đãi",
    cro_home_url = "/collections/trai-cay-viet-nam",
    cro_coll_title = "Sản phẩm",
    cro_coll_url = "/collections/all",
    cro_blog_title = "Tin tức",
    cro_blog_url = "/blogs/tin-tuc-2",
    cro_general_color = "#008848",
    cro_product_color = "#008848",
    cro_background_color = "#fff";

window.EGACRAddonSettings = {
    general: {
        enabled: cro_show,
        iconWidth: 20,
        background: cro_background_color,
        color: cro_general_color,
        activeColor: cro_general_color,
        activeBackground: cro_background_color,
        screenSize: [{ name: "mobile" }],
        styleAddon: "shopee",
        productBackground: "#ffffff",
        productColor: cro_product_color,
        ignorePages: [],
        bodyOffset: 54,
        conflictEl: "#ega-hotline,.fb_dialog.fb_dialog_advanced",
        skipEl: ".button-popup-loyalty",
        desktop: { x: "right", y: 50 },
    },
    products: {
        enabled: cro_cart_show || cro_addcart_show,
        cart: {
            enabled: cro_cart_show,
            icon: "https://file.hstatic.net/1000405773/file/egaproductscarticon_67abb816c5fc457a9de536aa009b6db2.svg",
            title: "Giỏ hàng",
            url: "/cart",
        },
        buyNowBtn: {
            enabled: false,
            title: "Mua ngay",
            color: "#ffffff",
            background: "#ffd001",
            backgroundEnd: "#ff9b30",
        },
        addToCartBtn: {
            enabled: cro_addcart_show,
            title: cro_addcart_title,
            color: "#ffffff",
            background: cro_addcart_bg_1,
            loadingColor: "",
            icon: "",
            backgroundEnd: cro_addcart_bg_2,
            cartQuery: ".count_item_pr,.count-holder .count",
        },
        modal: {
            enabled: true,
            headerText: "Sản phẩm vừa được thêm vào giỏ hàng",
            ctaLink: "checkout",
            ctaText: cro_addcart_modal_mess,
            ctaBg: "#ff5722",
            ctaColor: "#fff",
        },
        qvProduct: {
            priceColor: cro_price_color,
            variantColor: cro_variant_color,
            ctaBg: "#ff5722",
            ctaColor: "#fff",
            useQty: true,
        },
    },
    pages: {
        enabled: cro_home_show,
        links: [
            {
                url: cro_coll_url,
                title: cro_coll_title,
                icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_coll.png?v=586",
            },
            {
                url: cro_blog_url,
                title: cro_blog_title,
                icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_blog.png?v=586",
            },

            {
                url: cro_home_url,
                title: cro_home_title,
                icon: "//theme.hstatic.net/200000295082/1000772075/14/icon_cro_home.png?v=586",
            },
        ],
    },
    messenger: {
        enabled: cro_mess_show,
        icon: "https://file.hstatic.net/1000405773/file/egamessengericon_0986642a69264b65a9cdc5945bcd6e7e.svg",
        title: "Nhắn tin",
        url: cro_mess_url,
    },
    phone: {
        enabled: cro_hotline_show,
        icon: "https://file.hstatic.net/1000405773/file/egaphoneicon_35a3ab099cfc4ab0b99f31f40ffff8a3.svg",
        title: "Gọi điện",
        number: cro_hotline_number,
    },
    form: {
        enabled: false,
    },
};
let crAddonScript =
    "../theme.hstatic.net/200000295082/1000772075/14/ega.addon-cr-button.minc353.js?v=586";
EGACRAddonSettings.general.currentTemplate = "index";
EGACRAddonSettings.general.platform = Haravan;
window.EGACRAddonSettings.general.moneyFormat = "{{amount}}₫";
const platform = window.EGACRAddonSettings.general.platform;
platform.addItem = function (variantId, quantity, callback, errHandle) {
    var quantity = quantity || 1,
        n = {
            type: "POST",
            url: "/cart/add.js",
            data: "quantity=" + quantity + "&id=" + variantId,
            dataType: "json",
            success: function (jqXHR, textStatus, errorThrown) {
                $("#crQVModal").trigger("click");
                $("#cr-addon-addtocart")
                    .removeClass("loading")
                    .removeAttr("disabled");
                addToCartSuccess(jqXHR, textStatus, errorThrown);
            },
            error: function (a, r) {
                errHandle(a, r);
            },
        };
    jQuery.ajax(n);
};
if (typeof EGA === "undefined") {
    EGA = {};
}
window.egaCRAddonValid = window.EGACRAddonSettings.general.enabled;

$(document).ready(function ($) {
    var isInit = false;
    $(window).on("scroll click mousemove touchstart", () => {
        if (!isInit) {
            isInit = true;
            $("body").append(
                `<script src="${crAddonScript}" defer ><\/script>`
            );
        }
    });
});

$(document).ready(() => {
    const page_id = "168389884826236";
    if (page_id && window.innerWidth > 600) {
        $(window).one(" mousemove touchstart scroll", () => {
            var chatbox = document.getElementById("fb-customer-chat");
            chatbox.setAttribute("page_id", page_id);
            chatbox.setAttribute("attribution", "biz_inbox");

            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: "v12.0",
                });
            };

            (function (d, s, id) {
                var js,
                    fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src =
                    "../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
                fjs.parentNode.insertBefore(js, fjs);
            })(document, "script", "facebook-jssdk");
        });
    }
});



var salePopArr = new Array();

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_1ebd832010824a9ebcd05f17cf65d830_small.jpg",
  pd_title: "Bắp giò heo Vissan",
  pd_url: "/products/bap-gio-heo-vissan",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_aac4e68e76e54f20a251e309211e788c_small.jpg",
  pd_title: "Bí đỏ giống Nhật Đà Lạt",
  pd_url: "/products/bi-do-giong-nhat-da-lat",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_809c14b19b564db88de9d0b933df337c_small.jpg",
  pd_title: "Cá hồi phi lê 0.3 kg",
  pd_url: "/products/ca-hoi-phi-le-0-3-kg",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_c99f5b6546644b0ea9dd6726e2dc148f_small.jpg",
  pd_title: "Cá thác lác nạo 0,3 kg",
  pd_url: "/products/ca-thac-lac-nao-0-3-kg",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_a937e6a0917f48ed8af0078e567135ab_small.jpg",
  pd_title: "Cam vàng Navel nhập khẩu Ai Cập hộp 1kg (4 - 5 trái)",
  pd_url: "/products/cam-vang-navel-nhap-khau-ai-cap-hop-1kg-4-5-trai",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_99cea375549f4853a94303d55969efa7_small.jpg",
  pd_title: "Nạc đùi, vai heo Vissan",
  pd_url: "/products/nac-dui-vai-heo-vissan",
});

salePopArr.push({
  img_url:
    "//product.hstatic.net/200000295082/product/upload_0c4e3477e5194b309ee6e3a150498f01_small.jpg",
  pd_title: "Nho xanh không hạt Mỹ",
  pd_url: "/products/nho-xanh-khong-hat-my",
});

function showSalePop() {
  let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
    salePopProduct = salePopArr[pdRanIndex],
    randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;

  $("#ega-sale-pop .sale-pop-wrap .sale-pop-img").html(
    `<img src="${salePopProduct.img_url}"/>`
  );
  $("#ega-sale-pop .sale-pop-wrap .sale-pop-name").html(
    `<a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>`
  );
  $("#ega-sale-pop .sale-pop-wrap .sale-pop-desc").html(
    `Khách hàng vừa đặt mua cách đây ${randomMin}`
  );

  $("#ega-sale-pop").addClass("salepop-show");
  $("#ega-sale-pop")
    .delay(5000)
    .fadeIn(function () {
      $(this).removeClass("salepop-show");
    });
}

let timePerPop = 15000;
let timeDelay = 15000;

setTimeout(function () {
  setInterval(function () {
    showSalePop();
  }, 15000);
}, timeDelay - timePerPop);

$(".sale-pop-close").click(function () {
  $("#ega-sale-pop").css("opacity", "0");
});
$(".sale-pop-cta").click(function (e) {
  e.preventDefault();
  $(".sale-pop-regis").show();
});
$(".regis-close").click(function () {
  $(".sale-pop-regis").hide();
});