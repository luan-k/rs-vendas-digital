import $ from "Jquery";

class Search {
  /* 1. describe and create/initiate our object */
  constructor() {
    this.addSearchHtml();
    this.resultsDiv = $("#search-overlay__results");
    this.openButton = $(".js-search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.searchField = $("#search-term");
    this.searchBottom = $("#search-results-bottom");
    this.events();
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;
  }
  /*  2. events */
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    /* $(document).on("keyup", this.keyPressDispatcher.bind(this)); */
    this.searchField.on("keyup", this.TypingLogic.bind(this));
  }
  /* 3. methods */
  TypingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer);
      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.searchOverlay.addClass("active-bottom ");
          this.resultsDiv.html('<div class="spinner-loader"></div>');
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
      } else {
        this.resultsDiv.html("");
        this.isSpinnerVisible = false;
      }
    }
    this.previousValue = this.searchField.val();
  }

  getResults() {
    $.getJSON(
      WKodeData.root_url +
        "/wp-json/wk/v1/search?term=" +
        this.searchField.val(),
      (results) => {
        this.resultsDiv.html(`

        <div class="" >
            
              ${
                results.products.length
                  ? '<div class="row"> <h3 class="title-3 mt-5 mb-3 text-white"> Produtos </h3> <hr class="white">'
                  : '<h3 class="title-4 text-white mt-5 mb-3 text-center">nenhum produto corresponde a sua pesquisa</h3>'
              }
                ${results.products
                  .map(
                    (item) =>
                      `
                      <a href="${item.permalink}" class="link-search-results produto grid grid-cols-1">
                          <div class="search-product-wraper grid grid-cols-1">
                            <div class="row grid grid-cols-1 md:grid-cols-12">
                              <div class="col-img-search md:col-span-4">
                                  <div class="img-wraper-search">
                                      <img src="${item.image}" alt="">
                                  </div>
                              </div>
                              <div class="col-text-search md:col-span-8">
                                  <div class="row grid grid-cols-1 md:grid-cols-12">
                                      <div class="title-3 title-search md:col-span-12">${item.title}</div>
                                      
                                  </div>
                                  <div class="text-search hidden md:grid grid-cols-1">${item.descricao}</div>
                              </div>
                            </div>
                          </div>
                      </a>                
                      `
                  )
                  .join("")}
                  <div class='btn-wraper justify-center search my-5 px-9 py-6 rounded-2xl'> <a href="${
                    WKodeData.root_url
                  }/produtos" class='btn-wk text-center px-9 py-6 rounded-2xl bg-white text-dark-primary'> ver todos os Produtos </a> </div> 
              ${results.products.length ? "</div>" : ""}
          </div>

        `);
        this.isSpinnerVisible = false;
      }
    ); /* asynchronous */
  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    /* $("body").addClass("body-no-scroll"); */
    this.searchField.val("");
    setTimeout(() => this.searchField.focus(), 301);
    return false;
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    this.searchOverlay.removeClass("active-bottom ");
    /* $("body").removeClass("body-no-scroll"); */
  }

  addSearchHtml() {
    $("#navbarNavAltMarkup").append(`
    <div class="search-overlay">
      <div class="search-overlay__top px-6">
        <div class="">
          <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
          <input autocomplete="off" type="text" class="search-term" placeholder="O QUE VOCÊ ESTÁ PROCURANDO?" id="search-term">
          <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
        </div>
      </div>
      <div class="px-9" id="search-results-bottom">
        <div id="search-overlay__results"></div>
      </div>
    </div>
    `);
  }
}

export default Search;
