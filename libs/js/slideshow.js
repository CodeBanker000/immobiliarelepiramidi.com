/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEvent("domready", function()
{    
	var gallery = $("gallery");
	
	var slider = gallery.getFirst();
	
	var slides = slider.getChildren();
	
	var totSlide = slides.length;
	
	var limit = totSlide-1;
	        
	var wSlide = slides[0].getStyle("width").toInt();
        
//        var hSlide = setGallery();
        
//	var wWrapper = wSlide*slides.length;
	
//	slider.setStyle("width", wWrapper);
	
	var step = 0;
	
//	console.log("W image: " + wSlide[0].toInt());
//	console.log("W slider: " + slider.getStyle("width"));
	
	var timerID = slideIn.periodical(10000);
	
	function slideIn() {
            var hSlide = setGallery();
            var objFx = new Fx.Morph(slider, {
                duration: 3000,
                onComplete: function() {
                    slides[step].inject(slider);
                    slider.setStyle("top", 0);
                    if(step == limit) 
                        step = 0;
                    else
                        step++;
                }	
            });

            objFx.start({"top": -hSlide});
		
	}
	
	function slideOut() {
            var hSlide = setGallery();
            var objFx = new Fx.Morph(slider, {
                duration: 3000,
                onComplete: function () {
                    slides[step].inject(slider, "top");
                    slider.setStyle("top", -(hSlide*totSlide-hSlide));
//                      console.log(step);
                    if (step == 0)
                        step = limit;
                    else
                        step--;
                }
            });

            objFx.start({"top": -(hSlide*2)});
	}
	
        function setGallery() {
            
            var image = $$("#gallery img");
            
            var img_h = image[0].getStyle("height");
            var img_w = image[0].getStyle("width");
            
            if (wSlide == img_w.toInt()) {

                gallery.setStyle("height", img_h);

                slider.setStyle("height", "100%");
                slides.setStyle("height", "100%");
                
                return img_h.toInt();
            } else 
                return img_h.toInt();
        }
	
	function setSlideOut() {
            var hSlide = setGallery();
            slides[step].inject(slider);
            slider.setStyle("top", -(hSlide*totSlide-hSlide));
	}

	function setSlideIn() {
            slides[step].inject(slider, "top");
            slider.setStyle("top", 0);
        }
	
	$("nextBotton").addEvents({
		mouseover: function() {
			$clear(timerID);
			setSlideIn();
		},
		click: function() {
			slideIn();
		}
	});

	$("prevBotton").addEvents({
		mouseover: function() {
			$clear(timerID);
			setSlideOut();
		},
		click: function() {
			slideOut();
		}
	});
});