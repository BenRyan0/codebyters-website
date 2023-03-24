let apiUrl = "";
let host = document.location.hostname

if(host == "localhost" || host == "127.0.0.1"){
    apiUrl = "http://localhost/codebyters-website/backend/api/auth/";
}else if(host == "codebyters.projectdorsu.com"){
    apiUrl = ""
}

export let apiBaseUrl = apiUrl;