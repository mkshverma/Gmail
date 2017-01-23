

$(document).ready(function(){
	$(document).on('click','[name=login]',function(e){
		e.preventDefault();
		var form = document.getElementById('login');
		var formData =  new FormData(form);
		$.ajax({
			async: true,
			crossDomain: true,
			headers: {
			    "secret-key": "1234",
			    "authorization": "Basic YWRtaW46MTIzNA==",
			},
			url: _base_url + 'api/login',
			method: 'POST',
			data: formData,
			dataType: 'json',
			processData: false,
			contentType: false,
		})
		.done(function(data){
			if(data.status==='success')
			{
				user = JSON.stringify(data.user);
				createCookie('user',user,1);
				window.location.href = _base_url + 'home/inbox';
			}
			else
			{
				alert(data.message);
			}
		})
		.fail(function(data){
			alert(data.error);
		});
	});
});


function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}