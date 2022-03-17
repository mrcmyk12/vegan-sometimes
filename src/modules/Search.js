import $ from "jquery";

class Search {
	//1. describe and create/initiate our object
	constructor() {
		this.resultsDiv = $("modal_results");
		this.searchField = $("search-term");
		this.events();
		this.isSpinnerVisible = false;
		this.previousValue;
		this.typingTimer;
	}

	//2.events
	events() {
		this.searchField.on("keyup", this.typingLogic.bind(this));
	}

	//3.methods(function, action...)
	typingLogic() {
		if (this.searchField.val() != this.previousValue) {
			clearTimeout(this.typingTimer);

			if (this.searchField.val()) {
				if (!this.isSpinnerVisible) {
					this.resultsDiv.html(
						'<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>'
					);
					this.isSpinnerVisible = true;
				}
				this.typingTimer = setTimeout(this.getResults.bind(this), 2000);
			} else {
				this.resultsDiv.html("");
				this.isSpinnerVisible = false;
			}
		}

		this.previousValue = this.searchField.val();
	}

    getResults() {
        $.getJSON("/wp-json/wp/v2/breakfast?search=" + this.searchField.val(), function (posts) {
            alert(posts[0].title.rendered)
        })
    }
}
