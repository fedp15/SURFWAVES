<section class='slider'>

    <div class="main">
		<div class="slides">
			<img src="{{asset('imgs/compra1.png')}}" alt="">
			<img src="{{asset('imgs/compra2.png')}}" alt="">
			<img src="{{asset('imgs/compra3.png')}}" alt="">
      <img src="{{asset('imgs/compra4.png')}}" alt="" href="http://www.quiksilver.com/es/surf/">
        <img src="{{asset('imgs/compra5.png')}}" alt="" href="http://www.quiksilver.com/es/surf/">
          <img src="{{asset('imgs/compra6.png')}}" alt="" href="http://www.quiksilver.com/es/surf/">
            <img src="{{asset('imgs/compra7.png')}}" alt="" href="http://www.quiksilver.com/es/surf/">
		</div>
	</div>
</section>

<section class='imgs' >
<ul>
  <li><img src="{{asset('imgs/men.png')}}" alt="" width="20%" ></li>
    <li><img src="{{asset('imgs/women.png')}}" alt="" width="20%"></li>
      <li><img src="{{asset('imgs/kids.png')}}" alt="" width="20%"></li>
        <li><img src="{{asset('imgs/pro.png')}}" alt="" width="20%"></li>
</ul>
</section>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src={{asset('js/jquery.slides.js')}}></script>
<script>

	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});

	</script>


  <!-- Controls -->
