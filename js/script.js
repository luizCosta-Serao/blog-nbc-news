import Menu from "./menu.js";
import Login from "./login.js";

// Class para funcionalidade de menu mobile
const menu = new Menu('.header-menu', '.header-btn-menu');
menu.event();

const login = new Login('.login-form #login', 'login.php', 'login-form');
login.loginAjax();
