import { apiBaseUrl } from "./_host.js";

let baseUrl = apiBaseUrl;

export function checkLogin() {
  const loginInfos = localStorage.getItem("usrid");
  const infos = JSON.parse(loginInfos);

  if (loginInfos) {
    if (infos.token != "" || infos.id != "") {
      return true;
    } else {
      return false;
    }
  }
}

export async function postData(userInfo, route) {
  const data = {
    method: "POST",
    mode: "no-cors",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(userInfo),
  };

  try {
    const response = await (await fetch(baseUrl + route, data)).json();
    return response;
  } catch (error) {
    return error;
  }
}
