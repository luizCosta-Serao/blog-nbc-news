export default class Menu {
  constructor(menu, btnMenu) {
    this.menu = menu;
    this.btnMenu = btnMenu;
  }

  removeClass(nameClass) {
    $(this.menu).removeClass(nameClass);
  }

  reset() {
    $(window).resize(() => {
      this.removeClass('active')
    })
  }

  event() {
    this.reset();

    $(this.btnMenu).click(() => {
      $(this.menu).toggleClass('active');
    })
  }

}