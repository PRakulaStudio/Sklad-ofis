
    let bannerContainer = document.querySelector('.swiper-wrapper');
    let banner = {};
    banner.apiUrl = "/system/plugins/PonomareVlad/catalog/itemsList?_limit=5";
    banner.init = function() {
        banner.request();
    };

    banner.request = function(data){
        return fetch(banner.apiUrl, { method: 'POST', credentials: 'same-origin', body: data })
            .then(function (result) {
                if(!result.status || !result.data || !result.data.items) {
                    return false;
                }

                banner.slides = result.data.items;
                let renderedSlides = [];
                for(let slide in result.data.items){
                    let image = banner.slides[slide].images[0];
                    renderedSlides.push(
                        `<div class="swiper-slide">
                            <div class="slider-content">
                                <p>${banner.slides[slide].title}</p>
                                <p><i>${banner.slides[slide].highway}, ${banner.slides[slide].mkad_distance} км от МКАД</i></p>
                                <a class="slider-btn" href="${banner.slides[slide].href}">Смотреть далее</a>
                            </div>
                        </div>
                        `);
                }
                bannerContainer.innerHTML = renderedSlides.join('');

            });

    };

    banner.init();