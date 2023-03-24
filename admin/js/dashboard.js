import { checkLogin } from "./common.js";

if (checkLogin()) {
  console.log("Is User Logged in? -> true");
} else {
    console.log("Is User Logged in? -> false");
}
