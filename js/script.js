import Menu from "./menu.js";
import Login from "./login.js";
import PublicarPost from "./painel/publicar-post.js";

// Class para funcionalidade de menu mobile
const menu = new Menu('.header-menu', '.header-btn-menu');
menu.event();

const login = new Login('.login-form #login', 'login.php', 'login-form');
login.loginAjax();

const publicarPost = new PublicarPost('#post-article', 'publicar-post.php', 'publicar-post-form');
publicarPost.publicarPostAjax();