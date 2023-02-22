<section class="section" id="recent-view-coll">
    <div class="container card py-2">
        <div class="title_module heading-bar d-flex justify-content-between align-items-center">
            <h2 class="bf_flower heading-bar__title">Sản phẩm đã xem</h2>
        </div>
        <div class="recent-view-list row"></div>

        <script>
            let data = [];

            function getProductByView(handle) {
                return $.ajax({
                    url: `/sanpham/${handle}?view=product-item`,
                    success: function(res) {
                        data.push(res);
                    },
                });
            }

            function renderRecentView(data, query) {
                if (data && data.length) {
                    let wrapper = $(query).find(".recent-view-list");
                    data = data
                        .map((item) => {
                            let coll =
                                data.size >= 5 ? `col-md-12 col-5` : `col-5 col-md-3`;
                            return `<div class="${coll}">
                              ${item}
                          </div>`;
                        })
                        .join("");
                    wrapper.html(data);
                    awe_lazyloadImage();
                    if (window.BPR && window.BPR.loadBadges) {
                        window.BPR.initDomEls(), window.BPR.loadBadges();
                    }
                    window.matchMedia("(min-width: 768px)").matches &&
                        wrapper.find(".item_product_main").length >= 5 &&
                        $(`${query} .recent-view-list`).slick({
                            autoplay: false,
                            autoplaySpeed: 6000,
                            dots: false,
                            arrows: true,
                            infinite: false,
                            speed: 300,
                            slidesToShow: 4,
                            slidesToScroll: 4,
                            centerMode: false,
                            responsive: [{
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 4,
                                    },
                                },
                                {
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 4,
                                    },
                                },
                                {
                                    breakpoint: 991,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 1,
                                    },
                                },
                                {
                                    breakpoint: 767,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2,
                                    },
                                },
                            ],
                        });
                } else {
                    $(query).remove();
                }
            }

            function getRecentView(query) {
                try {
                    let storage =
                        JSON.parse(localStorage.getItem("recentProduct")) || [];
                    if (storage && storage.length && Array.isArray(storage)) {
                        //	$.when.apply($, my_array).then( ___ )
                        let getProductArr = storage.map((handle) =>
                            getProductByView(handle)
                        );
                        $.when.apply($, getProductArr).then(
                            () => {
                                renderRecentView(data, query);
                            },
                            () => {
                                renderRecentView(data, query);
                            }
                        );
                    } else {
                        $(query).remove();
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        </script>
    </div>
</section>
