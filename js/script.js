import Menu from "./menu.js";
import Login from "./login.js";
import PublicarPost from "./painel/publicar-post.js";
import CadastrarCategoria from "./painel/cadastrar-categoria.js";

// Class para funcionalidade de menu mobile
const menu = new Menu('.header-menu', '.header-btn-menu');
menu.event();

// Class para login do usuário
const login = new Login('.login-form #login', 'login.php', 'login-form');
login.loginAjax();

// Class para publicar novo post/notícia no painel de controle
const publicarPost = new PublicarPost('#post-article', 'publicar-post.php', 'publicar-post-form');
publicarPost.publicarPostAjax();

// Class para cadastrar nova categoria no painel de controle
const cadastrarCategoria = new CadastrarCategoria('#register-category', 'cadastrar-categoria.php', 'cadastrar-categoria-form');
cadastrarCategoria.cadastrarCategoriaAjax();