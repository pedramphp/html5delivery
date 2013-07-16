var hd = {};
$(document).ready(function(){
	hd.core.init();
});

hd.core = {
	init: function(){
		$(".contact-us-link").on("click", $.proxy(this.showContactForm, this));
		$(".overlay-contact .close").on("click", function(){
			$(".overlay-holder").hide();
		});
		$(".overlay-holder").on("click", $.proxy(this.modalClick, this));
	},
	
	showContactForm: function(e){
		e.preventDefault();
		this.resetContactForm();
		$(".overlay-holder").show();
	},
	
	resetContactForm: function(){
		$(".overlay-contact").find(":text, textarea").val("");
		$(".overlay-contact").find(".error").removeClass("error");
	},
	
	modalClick: function(e){
		if(!$(e.target).closest(".overlay-contact").length){
			$(".overlay-contact .close").trigger("click");
		}
	}
	
};

