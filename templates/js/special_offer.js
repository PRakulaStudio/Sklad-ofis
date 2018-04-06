    let widgetContainer = document.querySelector('.special');
    let widget = {};
    widget.apiUrl = "/system/plugins/PonomareVlad/catalog/itemsList?special_offer=1&_limit=2&_showVariantsTitle=true";

    widget.init = function() {
        widget.request({});
    };
    widget.request = function(data){
        return fetch(widget.apiUrl, { method: 'POST', credentials: 'same-origin', body: data })
            .then(function (result) {
                if(!result.status || !result.data || !result.data.items){
                    return false;
                }

                widget.items = result.data.items;
                let renderedItems = [];
                for(let key in widget.items){
                    let nocom = widget.items[key].no_commission != undefined ? '<div class="nocommission"></div>' : '';
                    let exclusive = widget.items[key].exclusive != undefined ? '<div class="exclusive"></div>' : '';

                    renderedItems.push(
                        `<div class="special-block">
                            <div class="special-title">
                                <p>${widget.items[key].title}</p>
                            </div>
                            ${exclusive}        
                            <div class="special-img"><img src="${widget.items[key].images[0]}"></div>
                            ${nocom}        
                            <div class="special-text">
                                <p>Район: <strong>${widget.items[key].region}</strong></p>
                                <p>Цена за метр в, руб.: <strong>${widget.items[key].price} ${widget.items[key].price_dimension}</strong></p>
                                <p>Общая площадь: <strong>${widget.items[key].space} ${widget.items[key].space_dimension}</strong></p>
                            </div>
            
                            <div class="item-btn">
                                <a class="btn-bid" href="#">Оставить заявку</a>
                                <a class="btn-info" href="${widget.items[key].href}">Подробнее>></a>
                            </div>
                        </div>`);
                }
                widgetContainer.innerHTML =
                    `<div class="title">
                            <h2><a href="#">Спецпредложения</a></h2>
                        </div>                    
                        ${renderedItems.join('')}
                    `;

            });


    };

    widget.init();

