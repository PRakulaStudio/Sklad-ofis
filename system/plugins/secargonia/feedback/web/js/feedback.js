if (!window.pms) window.pms = {};
if (!window.pms.plugin) window.pms.plugin = {};
if (!window.pms.plugin.secargonia) window.pms.plugin.secargonia = {};
if (!window.pms.plugin.secargonia.feedback) window.pms.plugin.secargonia.feedback = {};
var feedback = window.pms.plugin.secargonia.feedback;
feedback.bidModal = document.querySelector('.bid-form');
feedback.callModal = document.querySelector('.call-form');

feedback.bindEvents = function() {
    feedback.bindMessage();
    feedback.bindCall();
};

feedback.bindMessage = function() {
    feedback.bidModal.querySelector('a.submit-form').addEventListener('click', function(event){
        event.preventDefault();
        var data = {};
        var response = grecaptcha.getResponse();
        if(response.length == 0){
            alert('Не отмечено поле "Я не робот"');
            return false;
        }

        data.name = feedback.bidModal.querySelector('.message-name').value;
        data.phone = feedback.bidModal.querySelector('.message-phone').value;
        data.message = feedback.bidModal.querySelector('.message-message').value;
        data.email = feedback.bidModal.querySelector('.message-email').value;

        if (!feedback.validateForm(data)) {
            alert("Не все поля заполнены");
            return false;
        }
        feedback.requestMessage(data);
        return true;
    });
};

feedback.bindCall = function() {
    feedback.callModal.querySelector('a.submit-form').addEventListener('click', function(event){
        event.preventDefault();
        var data = {};
        var response = grecaptcha.getResponse();
        if(response.length == 0){
            alert('Не отмечено поле "Я не робот"');
            return false;
        }

        data.name = feedback.callModal.querySelector('.message-name').value;
        data.phone = feedback.callModal.querySelector('.message-phone').value;

        if (!feedback.validateForm(data)) {
            alert("Не все поля заполнены");
            return false;
        }
        feedback.requestCall(data);
        return true;
    });
};

feedback.requestMessage = function (data) {

    return fetch('/system/plugins/secargonia/feedback/product/create', { method: 'POST', credentials: 'same-origin', body: data })
    .then(function (result) {
        if(!result.status || !result.data || !result.data.message) {
            var errorString = "";
            for(var error in result.error.attributes){
                errorString += result.error.attributes[error][0] + '\n';
            }
            alert(errorString);

            return false;
        }
        document.querySelector('.message-name').value = "";
        document.querySelector('.message-phone').value = "";
        document.querySelector('.message-message').value = "";
        document.querySelector('.message-email').value = "";
        document.querySelector('.close-popup').click();
        alert("Сообщение отправлено");
    });
};

feedback.requestCall = function (data) {

    return fetch('/system/plugins/secargonia/feedback/call/create', { method: 'POST', credentials: 'same-origin', body: data })
        .then(function (result) {
            if(!result.status || !result.data || !result.data.message) {
                var errorString = "";
                for(var error in result.error.attributes){
                    errorString += result.error.attributes[error][0] + '\n';
                }
                alert(errorString);

                return false;
            }
            document.querySelector('.message-name').value = "";
            document.querySelector('.message-phone').value = "";
            document.querySelector('.close-popup').click();
            alert("Сообщение отправлено");
        });
};





feedback.validateForm = function(o){
    var ok = true;
    for (var key in o) if (o[key] === "") ok = false;
    return ok;
};

window.onload = function() {
    feedback.bindEvents();
};

