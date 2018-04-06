$(document).ready(function(){
    let searchForm = $('#search-api');
    let search = {};
    search.apiUrl = "";
    search.bindEvents = function() {
        search.bindSubmit();
    };

    search.bindSubmit = function() {
        $(".search-button").click(function (e) {
            e.preventDefault();
            console.log("SEARCH FORM");
            let data = {};
            data.message = $('input[name="message"]', searchForm).val();
            data.object_category = $('select[name="type"]', searchForm).val();
            data.city = $('select[name="city"]', searchForm).val();
            data.object_type = $('select[name="object"]', searchForm).val();
            data.space_from = $('input[name="square_from"]', searchForm).val();
            data.space_to = $('input[name="square_to"]', searchForm).val();
            function isEmpty(value){
                return value == null || value == "";
            }
            let query = '';

            for(let key in data) {
                if(key == 'message'){
                    query = data[key];
                    delete data[key];
                }
                if (isEmpty(data[key]))
                    delete data[key];
            }

            let str = $.param( data );


            console.debug(str);
            window.location = '/search/'+query+'?'+str;
        });
    };

    search.bindEvents();
});