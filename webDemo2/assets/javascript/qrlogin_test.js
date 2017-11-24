let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
        scanner.addListener('scan', function (content) {
            console.log(content);
            var url = window.location.pathname;
            url = url.replace(/\/[^\/]*$/, "/topics"); //change last part of url to 'topics'
            post(url);
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
        
function post(path, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);
    form.setAttribute("language", "dutch");
    form.setAttribute("name", "John");
    form.setAttribute("id", "1");

    document.body.appendChild(form);
    form.submit();
}