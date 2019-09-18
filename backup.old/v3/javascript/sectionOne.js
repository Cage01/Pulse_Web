
    
    // set up the base pattern
      var pattern = Trianglify({
          height: window.innerHeight,
          width: window.innerWidth+400,
          x_colors: ['#2b2e4a', '#252840', '#53354a', '#252840', '#2b2e4a'],
          y_colors: ['#2b2e4a', '#252840', '#53354a', '#252840', '#2b2e4a'],
          variance: 10,
          seed: '666',
          cell_size: 120});

        // // canvas
        // document.body.appendChild(pattern.canvas())

        // svg
        document.body.appendChild(pattern.svg());



        // // png
        // var png = document.createElement('img')
        // png.src = pattern.png()
        // document.body.appendChild(png)
       
  $('.title-wrapper').css('width', '100%');
  $('.title-wrapper').css('height', '70vh');


  var time           = 5,
      $paths         = $('body').find('svg').find('path'),
      pathCollection = $paths.get(),
      count          = $paths.length;

  console.log(count);

  pathCollection.sort(function() {
      return Math.random()*10 > 5 ? 1 : -1;
  });

  function showText(){
    var title = $('#pm'),
        subtitle = $('#slogan');
        subButton = $('#subscribe');
        mcSubButton = $('#mc-embedded-subscribe');
        subHeader = $('#subHead');
        mcEmail = $('#mce-EMAIL');
        window = $('#subWindow');

    title.removeClass('hidden');
    setTimeout( function(){ 
      subtitle.removeClass('hidden');
    }, 500);
    
    setTimeout( function(){
        subButton.removeClass('hidden');
        subHeader.removeClass('hidden');
        mcEmail.removeClass('hidden');
        mcSubButton.removeClass('hidden');
    }, 1000);
  }

  setTimeout( function(){ 
    $.each(pathCollection,function(i,el) {
        var $path = $(this);
      setTimeout( function(){ 

        $path.css('opacity','1');
      }, time);
      time += 5;

      if (i+1 === count) {
        setTimeout( function(){ 
          showText();
        }, 1700); 
    }

    });
  }, 0);
