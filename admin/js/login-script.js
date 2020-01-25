$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});

$("#login-button").click(function(){
	
	$("#login-form").find('[name="submit"]').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Logging in...');
	$.post(
		$("#login-form").attr("action"),
		$("#login-form :input").serializeArray(),
		function(response){
			if(response == 1){
				window.location.href = "admin-main.php";
			} else if(response == 0){
				var x = document.getElementById("snackbar")
				x.className = "show";
				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                $("#login-form").find('[name="submit"]').html('Login');
			}
		}
	);
});

$("#login-form").submit(function(){
	return false;
});
